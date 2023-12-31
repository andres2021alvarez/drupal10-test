<?php
/**
 * \Drupal\Sniffs\Arrays\ArraySniff.
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */

namespace Drupal\Sniffs\Arrays;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;

/**
 * ArraySniff.
 *
 * Checks if the array's are styled in the Drupal way.
 * - Comma after the last array element
 * - Indentation is 2 spaces for multi line array definitions
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class ArraySniff implements Sniff
{


    /**
     * The limit that the length of a line should not exceed.
     *
     * This can be configured to have a different value but the default is 120.
     * We don't enforce 80 characters by default because that can make array
     * definitions in nested arrays or function calls less readable.
     *
     * @var integer
     */
    public $lineLimit = 120;


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array<int|string>
     */
    public function register()
    {
        return [
            T_ARRAY,
            T_OPEN_SHORT_ARRAY,
        ];

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
     * @param int                         $stackPtr  The position of the current token in
     *                                               the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Support long and short syntax.
        $parenthesisOpener = 'parenthesis_opener';
        $parenthesisCloser = 'parenthesis_closer';
        if ($tokens[$stackPtr]['code'] === T_OPEN_SHORT_ARRAY) {
            $parenthesisOpener = 'bracket_opener';
            $parenthesisCloser = 'bracket_closer';
        }

        // Sanity check: this can sometimes be NULL if the array was not correctly
        // parsed.
        if ($tokens[$stackPtr][$parenthesisCloser] === null) {
            return;
        }

        $lastItem = $phpcsFile->findPrevious(
            Tokens::$emptyTokens,
            ($tokens[$stackPtr][$parenthesisCloser] - 1),
            $stackPtr,
            true
        );

        // Empty array.
        if ($lastItem === $tokens[$stackPtr][$parenthesisOpener]) {
            return;
        }

        // Inline array.
        $isInlineArray = $tokens[$tokens[$stackPtr][$parenthesisOpener]]['line'] === $tokens[$tokens[$stackPtr][$parenthesisCloser]]['line'];

        // Check if the last item in a multiline array has a "closing" comma.
        if ($tokens[$lastItem]['code'] !== T_COMMA && $isInlineArray === false
            && $tokens[($lastItem + 1)]['code'] !== T_CLOSE_PARENTHESIS
            && $tokens[($lastItem + 1)]['code'] !== T_CLOSE_SHORT_ARRAY
            && isset(Tokens::$heredocTokens[$tokens[$lastItem]['code']]) === false
        ) {
            $data = [$tokens[$lastItem]['content']];
            $fix  = $phpcsFile->addFixableWarning('A comma should follow the last multiline array item. Found: %s', $lastItem, 'CommaLastItem', $data);
            if ($fix === true) {
                $phpcsFile->fixer->addContent($lastItem, ',');
            }

            return;
        }

        if ($isInlineArray === true) {
            // Check if this array has more than one element and exceeds the
            // line length defined by $this->lineLimit.
            $arrayEnding = $tokens[$tokens[$stackPtr][$parenthesisCloser]]['column'];

            if ($arrayEnding > $this->lineLimit) {
                // Nested arrays and function calls within array elements may contain commas so we
                // cannot simply search for the next comma as evidence that the main array has more
                // than one item. So we examine the comma's nested_parenthesis info, and break out
                // of the loop when a valid comma is found, otherwise look for the next one.
                $pos = ($stackPtr + 1);
                while (($comma = $phpcsFile->findNext(T_COMMA, $pos, $tokens[$stackPtr][$parenthesisCloser])) > 0) {
                    // If the comma has no nested information then it is part of
                    // the main array being tested. No need to search for more.
                    if (isset($tokens[$comma]['nested_parenthesis']) === false) {
                        break;
                    }

                    // Get the last key and value from nested_parenthesis array. If these match the
                    // array opener and closer then the comma a valid part of the array being tested.
                    $end = array_slice($tokens[$comma]['nested_parenthesis'], -1, 1, true);
                    if ($end === [$tokens[$stackPtr][$parenthesisOpener] => $tokens[$stackPtr][$parenthesisCloser]]) {
                        break;
                    }

                    // If the comma nested information is identical to the $lastItem nested info
                    // then it is part of the array.
                    if (isset($tokens[$lastItem]['nested_parenthesis']) === true
                        && $tokens[$comma]['nested_parenthesis'] === $tokens[$lastItem]['nested_parenthesis']
                    ) {
                        break;
                    }

                    // If none of the breaks above have been executed then the comma is not part of the
                    // array being tested and does not indicate a second element. Look for the next one.
                    $pos = ($comma + 1);
                }//end while

                ;
                if ($comma !== false) {
                    $error = 'The array declaration extends to column %s (the limit is %s). The array content should be split up over multiple lines';
                    $phpcsFile->addError($error, $stackPtr, 'LongLineDeclaration', [$arrayEnding, $this->lineLimit]);
                }
            }//end if

            // Only continue for multi line arrays.
            return;
        }//end if

        // Find the first token on this line.
        $firstLineColumn = $tokens[$stackPtr]['column'];
        for ($i = $stackPtr; $i >= 0; $i--) {
            // If there is a PHP open tag then this must be a template file where we
            // don't check indentation.
            if ($tokens[$i]['code'] === T_OPEN_TAG) {
                return;
            }

            // Record the first code token on the line.
            if ($tokens[$i]['code'] !== T_WHITESPACE) {
                $firstLineColumn = $tokens[$i]['column'];
                // This could be a multi line string or comment beginning with white
                // spaces.
                $trimmed = ltrim($tokens[$i]['content']);
                if ($trimmed !== $tokens[$i]['content']) {
                    $firstLineColumn = ($firstLineColumn + strpos($tokens[$i]['content'], $trimmed));
                }
            }

            // It's the start of the line, so we've found our first php token.
            if ($tokens[$i]['column'] === 1) {
                break;
            }
        }//end for

        $lineStart = $stackPtr;
        // Iterate over all lines of this array.
        while ($lineStart < $tokens[$stackPtr][$parenthesisCloser]) {
            // Find next line start.
            $newLineStart = $lineStart;
            $currentLine  = $tokens[$newLineStart]['line'];
            while ($currentLine >= $tokens[$newLineStart]['line']) {
                $newLineStart = $phpcsFile->findNext(
                    Tokens::$emptyTokens,
                    ($newLineStart + 1),
                    ($tokens[$stackPtr][$parenthesisCloser] + 1),
                    true
                );

                if ($newLineStart === false) {
                    break 2;
                }

                // Long array syntax: Skip nested arrays, they are checked in a next
                // run.
                if ($tokens[$newLineStart]['code'] === T_ARRAY) {
                    $newLineStart = $tokens[$newLineStart]['parenthesis_closer'];
                    $currentLine  = $tokens[$newLineStart]['line'];
                }

                // Short array syntax: Skip nested arrays, they are checked in a next
                // run.
                if ($tokens[$newLineStart]['code'] === T_OPEN_SHORT_ARRAY) {
                    $newLineStart = $tokens[$newLineStart]['bracket_closer'];
                    $currentLine  = $tokens[$newLineStart]['line'];
                }

                // Nested structures such as closures: skip those, they are checked
                // in other sniffs. If the conditions of a token are different it
                // means that it is in a different nesting level.
                if ($tokens[$newLineStart]['conditions'] !== $tokens[$stackPtr]['conditions']) {
                    // Jump to the end of the closure.
                    $conditionKeys = array_keys($tokens[$newLineStart]['conditions']);
                    $closureToken  = end($conditionKeys);
                    if (isset($tokens[$closureToken]['scope_closer']) === true) {
                        $newLineStart = $tokens[$closureToken]['scope_closer'];
                        $currentLine  = $tokens[$closureToken]['line'];
                    } else {
                        $currentLine++;
                    }
                }
            }//end while

            if ($newLineStart === $tokens[$stackPtr][$parenthesisCloser]) {
                // End of the array reached.
                if ($tokens[$newLineStart]['column'] !== $firstLineColumn) {
                    $error = 'Array closing indentation error, expected %s spaces but found %s';
                    $data  = [
                        ($firstLineColumn - 1),
                        ($tokens[$newLineStart]['column'] - 1),
                    ];
                    $fix   = $phpcsFile->addFixableError($error, $newLineStart, 'ArrayClosingIndentation', $data);
                    if ($fix === true) {
                        if ($tokens[$newLineStart]['column'] === 1) {
                            $phpcsFile->fixer->addContentBefore($newLineStart, str_repeat(' ', ($firstLineColumn - 1)));
                        } else {
                            $phpcsFile->fixer->replaceToken(($newLineStart - 1), str_repeat(' ', ($firstLineColumn - 1)));
                        }
                    }
                }

                break;
            }

            // Define tokens that require extra indentation when found at the start of a line.
            // Expects: '->', '?', ':'.
            $extraIndentTokens = [
                T_OBJECT_OPERATOR,
                T_INLINE_THEN,
                T_INLINE_ELSE,
            ];

            // Determine whether extra indentation required for the next array line.
            // True where the line starts with one of the defined extra indent tokens.
            $extraIndentRequired = (in_array($tokens[$newLineStart]['code'], $extraIndentTokens, true));

            // Determine the expected column, default indentation of +2 spaces.
            // Where increased nesting required, bump another +2 spaces.
            $expectedColumn = ($firstLineColumn + 2);
            if ($extraIndentRequired === true) {
                $expectedColumn += 2;
            }

            if ($tokens[$newLineStart]['column'] !== $expectedColumn) {
                // Skip lines in nested structures such as a function call within an
                // array, no defined coding standard for those.
                $innerNesting = empty($tokens[$newLineStart]['nested_parenthesis']) === false
                    && end($tokens[$newLineStart]['nested_parenthesis']) < $tokens[$stackPtr][$parenthesisCloser];
                // Skip lines that are part of a multi-line string.
                $isMultiLineString = $tokens[($newLineStart - 1)]['code'] === T_CONSTANT_ENCAPSED_STRING
                    && substr($tokens[($newLineStart - 1)]['content'], -1) === $phpcsFile->eolChar;
                // Skip NOWDOC or HEREDOC lines.
                $nowDoc = isset(Tokens::$heredocTokens[$tokens[$newLineStart]['code']]);
                if ($innerNesting === false && $isMultiLineString === false && $nowDoc === false) {
                    $error = 'Array indentation error, expected %s spaces but found %s';
                    $data  = [
                        ($expectedColumn - 1),
                        ($tokens[$newLineStart]['column'] - 1),
                    ];
                    $fix   = $phpcsFile->addFixableError($error, $newLineStart, 'ArrayIndentation', $data);
                    if ($fix === true) {
                        if ($tokens[$newLineStart]['column'] === 1) {
                            $phpcsFile->fixer->addContentBefore($newLineStart, str_repeat(' ', ($expectedColumn - 1)));
                        } else {
                            $phpcsFile->fixer->replaceToken(($newLineStart - 1), str_repeat(' ', ($expectedColumn - 1)));
                        }
                    }
                }
            }//end if

            $lineStart = $newLineStart;
        }//end while

    }//end process()


}//end class
