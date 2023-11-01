<?php

use Drupal\Component\Utility\Html;
use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/classy/block/block.html.twig .
 */
class __TwigTemplate_e9bdce44fd68e0bfdba4633ac38c18af extends Template {
  private $source;
  private $macros = [];

  /**
   *
   */
  public function __construct(Environment $env) {
    parent::__construct($env);

    $this->source = $this->getSourceContext();

    $this->parent = FALSE;

    $this->blocks = [
      'content' => [$this, 'block_content'],
    ];
    $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
    $this->checkSecurity();
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = []) {
    $macros = $this->macros;
    // Line 30.
    $context["classes"] = [
      0 => "block",
    // Line 32.
      1 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,
    ($context["configuration"] ?? NULL), "provider", [], "any", FALSE, FALSE, TRUE, 32), 32, $this->source))),
    // Line 33.
      2 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["plugin_id"] ?? NULL), 33, $this->source))),
    ];
    // Line 36.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 36), 36, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 37.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 37, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 38.
    if (($context["label"] ?? NULL)) {
      // Line 39.
      echo "    <h2";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? NULL), 39, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 39, $this->source), "html", NULL, TRUE);
      echo "</h2>
  ";
    }
    // Line 41.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 41, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 42.
    $this->displayBlock('content', $context, $blocks);
    // Line 45.
    echo "</div>
";
  }

  /**
   * Line 42.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 43.
    echo "    ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 43, $this->source), "html", NULL, TRUE);
    echo "
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/classy/block/block.html.twig";
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
    return [79 => 43, 75 => 42, 70 => 45, 68 => 42, 63 => 41, 55 => 39, 53 => 38, 49 => 37, 44 => 36, 42 => 33, 41 => 32, 40 => 30];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/classy/block/block.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/block/block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 30, "if" => 38, "block" => 42];
    static $filters = ["clean_class" => 32, "escape" => 36];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'block'],
            ['clean_class', 'escape'],
            []
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
