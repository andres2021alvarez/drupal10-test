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
 * Core/themes/olivero/templates/block/block--secondary-menu.html.twig .
 */
class __TwigTemplate_e60e831f6b4e6969d04cc77b8eb1c7e3 extends Template {
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
    // Line 36.
    $context["classes"] = [
      0 => "block",
      1 => "block-menu",
      2 => "navigation",
    // Line 40.
      3 => ("menu--" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["derivative_plugin_id"] ?? NULL), 40, $this->source))),
      4 => "secondary-nav",
    ];
    // Line 44.
    $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "id", [], "any", FALSE, FALSE, TRUE, 44), 44, $this->source) . Html::getId("-menu"));
    // Line 45.
    echo "<nav ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 45), "setAttribute", [0 => "aria-labelledby", 1 => ($context["heading_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 45), "setAttribute", [0 => "role", 1 => "navigation"], "method", FALSE, FALSE, TRUE, 45), 45, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 47.
    echo "  ";
    if (!twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "label_display", [], "any", FALSE, FALSE, TRUE, 47)) {
      // Line 48.
      echo "    ";
      $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "addClass", [0 => "visually-hidden"], "method", FALSE, FALSE, TRUE, 48);
      // Line 49.
      echo "  ";
    }
    // Line 50.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 50, $this->source), "html", NULL, TRUE);
    echo "
  <span";
    // Line 51.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 51), 51, $this->source), "html", NULL, TRUE);
    echo ">";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "label", [], "any", FALSE, FALSE, TRUE, 51), 51, $this->source), "html", NULL, TRUE);
    echo "</span>
  ";
    // Line 52.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 52, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 54.
    echo "  ";
    $this->displayBlock('content', $context, $blocks);
    // Line 57.
    echo "</nav>
";
  }

  /**
   * Line 54.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 55.
    echo "    ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 55, $this->source), "html", NULL, TRUE);
    echo "
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--secondary-menu.html.twig";
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
    return [86 => 55, 82 => 54, 77 => 57, 74 => 54, 70 => 52, 64 => 51, 59 => 50, 56 => 49, 53 => 48, 50 => 47, 45 => 45, 43 => 44, 41 => 40, 40 => 36];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--secondary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--secondary-menu.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 36, "if" => 47, "block" => 54];
    static $filters = ["clean_class" => 40, "clean_id" => 44, "escape" => 45];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'block'],
            ['clean_class', 'clean_id', 'escape'],
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
