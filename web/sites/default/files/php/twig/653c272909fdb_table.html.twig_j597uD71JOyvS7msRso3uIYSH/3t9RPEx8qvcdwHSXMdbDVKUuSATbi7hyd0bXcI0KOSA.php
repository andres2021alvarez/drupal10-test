<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/classy/dataset/table.html.twig .
 */
class __TwigTemplate_e1e824515bbcb2480f15d6859930ddfe extends Template {
  private $source;
  private $macros = [];

  /**
   *
   */
  public function __construct(Environment $env) {
    parent::__construct($env);

    $this->source = $this->getSourceContext();

    $this->parent = FALSE;

    $this->blocks = [];
    $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
    $this->checkSecurity();
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = []) {
    $macros = $this->macros;
    // Line 42.
    echo "<table";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 42, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 43.
    if (($context["caption"] ?? NULL)) {
      // Line 44.
      echo "    <caption>";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? NULL), 44, $this->source), "html", NULL, TRUE);
      echo "</caption>
  ";
    }
    // Line 46.
    echo "
  ";
    // Line 47.
    $context['_parent'] = $context;
    $context['_seq'] = twig_ensure_traversable(($context["colgroups"] ?? NULL));
    foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
      // Line 48.
      echo "    ";
      if (twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", FALSE, FALSE, TRUE, 48)) {
        // Line 49.
        echo "      <colgroup";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", FALSE, FALSE, TRUE, 49), 49, $this->source), "html", NULL, TRUE);
        echo ">
        ";
        // Line 50.
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["colgroup"], "cols", [], "any", FALSE, FALSE, TRUE, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
          // Line 51.
          echo "          <col";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["col"], "attributes", [], "any", FALSE, FALSE, TRUE, 51), 51, $this->source), "html", NULL, TRUE);
          echo " />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 53.
        echo "      </colgroup>
    ";
      }
      else {
        // Line 55.
        echo "      <colgroup";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["colgroup"], "attributes", [], "any", FALSE, FALSE, TRUE, 55), 55, $this->source), "html", NULL, TRUE);
        echo " />
    ";
      }
      // Line 57.
      echo "  ";
    }
    $_parent = $context['_parent'];
    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
    $context = array_intersect_key($context, $_parent) + $_parent;
    // Line 58.
    echo "
  ";
    // Line 59.
    if (($context["header"] ?? NULL)) {
      // Line 60.
      echo "    <thead>
      <tr>
        ";
      // Line 62.
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["header"] ?? NULL));
      foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
        // Line 63.
        echo "          ";
        // Line 64.
        $context["cell_classes"] = [
        // Line 65.
          0 => ((twig_get_attribute($this->env, $this->source,
        $context["cell"], "active_table_sort", [], "any", FALSE, FALSE, TRUE, 65)) ? ("is-active") : ("")),
        ];
        // Line 68.
        echo "          <";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 68), 68, $this->source), "html", NULL, TRUE);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", FALSE, FALSE, TRUE, 68), "addClass", [0 => ($context["cell_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 68), 68, $this->source), "html", NULL, TRUE);
        echo ">";
        // Line 69.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", FALSE, FALSE, TRUE, 69), 69, $this->source), "html", NULL, TRUE);
        // Line 70.
        echo "</";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 70), 70, $this->source), "html", NULL, TRUE);
        echo ">
        ";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 72.
      echo "      </tr>
    </thead>
  ";
    }
    // Line 75.
    echo "
  ";
    // Line 76.
    if (($context["rows"] ?? NULL)) {
      // Line 77.
      echo "    <tbody>
      ";
      // Line 78.
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? NULL));
      $context['loop'] = [
        'parent' => $context['_parent'],
        'index0' => 0,
        'index'  => 1,
        'first'  => TRUE,
      ];
      if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
        $length = count($context['_seq']);
        $context['loop']['revindex0'] = $length - 1;
        $context['loop']['revindex'] = $length;
        $context['loop']['length'] = $length;
        $context['loop']['last'] = 1 === $length;
      }
      foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
        // Line 79.
        echo "        ";
        // Line 80.
        $context["row_classes"] = [
        // Line 81.
          0 => ((!($context["no_striping"] ?? NULL)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", FALSE, FALSE, TRUE, 81), 81, $this->source))) : ("")),
        ];
        // Line 84.
        echo "        <tr";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", FALSE, FALSE, TRUE, 84), "addClass", [0 => ($context["row_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 84), 84, $this->source), "html", NULL, TRUE);
        echo ">
          ";
        // Line 85.
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", FALSE, FALSE, TRUE, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
          // Line 86.
          echo "            <";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 86), 86, $this->source), "html", NULL, TRUE);
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", FALSE, FALSE, TRUE, 86), 86, $this->source), "html", NULL, TRUE);
          echo ">";
          // Line 87.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", FALSE, FALSE, TRUE, 87), 87, $this->source), "html", NULL, TRUE);
          // Line 88.
          echo "</";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 88), 88, $this->source), "html", NULL, TRUE);
          echo ">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 90.
        echo "        </tr>
      ";
        ++$context['loop']['index0'];
        ++$context['loop']['index'];
        $context['loop']['first'] = FALSE;
        if (isset($context['loop']['length'])) {
          --$context['loop']['revindex0'];
          --$context['loop']['revindex'];
          $context['loop']['last'] = 0 === $context['loop']['revindex0'];
        }
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 92.
      echo "    </tbody>
  ";
      // Line 93.
    }
    elseif (
    ($context["empty"] ?? NULL)) {
      // Line 94.
      echo "    <tbody>
      <tr class=\"odd\">
        <td colspan=\"";
      // Line 96.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? NULL), 96, $this->source), "html", NULL, TRUE);
      echo "\" class=\"empty message\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? NULL), 96, $this->source), "html", NULL, TRUE);
      echo "</td>
      </tr>
    </tbody>
  ";
    }
    // Line 100.
    echo "  ";
    if (($context["footer"] ?? NULL)) {
      // Line 101.
      echo "    <tfoot>
      ";
      // Line 102.
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["footer"] ?? NULL));
      foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
        // Line 103.
        echo "        <tr";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", FALSE, FALSE, TRUE, 103), 103, $this->source), "html", NULL, TRUE);
        echo ">
          ";
        // Line 104.
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "cells", [], "any", FALSE, FALSE, TRUE, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
          // Line 105.
          echo "            <";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 105), 105, $this->source), "html", NULL, TRUE);
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "attributes", [], "any", FALSE, FALSE, TRUE, 105), 105, $this->source), "html", NULL, TRUE);
          echo ">";
          // Line 106.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "content", [], "any", FALSE, FALSE, TRUE, 106), 106, $this->source), "html", NULL, TRUE);
          // Line 107.
          echo "</";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cell"], "tag", [], "any", FALSE, FALSE, TRUE, 107), 107, $this->source), "html", NULL, TRUE);
          echo ">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 109.
        echo "        </tr>
      ";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 111.
      echo "    </tfoot>
  ";
    }
    // Line 113.
    echo "</table>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/classy/dataset/table.html.twig";
  }

  /**
   *
   */
  public function isTraitable() {
    return FALSE;
  }

  /**
   *
   */
  public function getDebugInfo() {
    return [269 => 113, 265 => 111, 258 => 109, 249 => 107, 247 => 106, 242 => 105, 238 => 104, 233 => 103, 229 => 102, 226 => 101, 223 => 100, 214 => 96, 210 => 94, 208 => 93, 205 => 92, 190 => 90, 181 => 88, 179 => 87, 174 => 86, 170 => 85, 165 => 84, 163 => 81, 162 => 80, 160 => 79, 143 => 78, 140 => 77, 138 => 76, 135 => 75, 130 => 72, 121 => 70, 119 => 69, 114 => 68, 112 => 65, 111 => 64, 109 => 63, 105 => 62, 101 => 60, 99 => 59, 96 => 58, 90 => 57, 84 => 55, 80 => 53, 71 => 51, 67 => 50, 62 => 49, 59 => 48, 55 => 47, 52 => 46, 46 => 44, 44 => 43, 39 => 42];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/classy/dataset/table.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/dataset/table.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 43, "for" => 47, "set" => 64];
    static $filters = ["escape" => 42];
    static $functions = ["cycle" => 81];

    try {
      $this->sandbox->checkSecurity(
            ['if', 'for', 'set'],
            ['escape'],
            ['cycle']
        );
    }
    catch (SecurityError $e) {
      $e->setSourceContext($this->source);

      if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
        $e->setTemplateLine($tags[$e->getTagName()]);
      }
      elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
        $e->setTemplateLine($filters[$e->getFilterName()]);
      }
      elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
        $e->setTemplateLine($functions[$e->getFunctionName()]);
      }

      throw $e;
    }

  }

}
