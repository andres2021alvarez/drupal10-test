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
 * Core/themes/olivero/templates/block/block--system-menu-block.html.twig .
 */
class __TwigTemplate_8eae32eec8f4a616c63f257ae62883fd extends Template {
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
    ];
    // Line 43.
    $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "id", [], "any", FALSE, FALSE, TRUE, 43), 43, $this->source) . Html::getId("-menu"));
    // Line 44.
    echo "<nav ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 44), "setAttribute", [0 => "aria-labelledby", 1 => ($context["heading_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 44), "setAttribute", [0 => "role", 1 => "navigation"], "method", FALSE, FALSE, TRUE, 44), 44, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 46.
    echo "  ";
    if (!twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "label_display", [], "any", FALSE, FALSE, TRUE, 46)) {
      // Line 47.
      echo "    ";
      $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "addClass", [0 => "visually-hidden"], "method", FALSE, FALSE, TRUE, 47);
      // Line 48.
      echo "  ";
    }
    // Line 49.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 49, $this->source), "html", NULL, TRUE);
    echo "
  <h2";
    // Line 50.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "addClass", [0 => "block__title"], "method", FALSE, FALSE, TRUE, 50), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 50), 50, $this->source), "html", NULL, TRUE);
    echo ">";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "label", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source), "html", NULL, TRUE);
    echo "</h2>
  ";
    // Line 51.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 51, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 53.
    echo "  ";
    $this->displayBlock('content', $context, $blocks);
    // Line 56.
    echo "</nav>
";
  }

  /**
   * Line 53.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 54.
    echo "    ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 54, $this->source), "html", NULL, TRUE);
    echo "
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--system-menu-block.html.twig";
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
    return [86 => 54, 82 => 53, 77 => 56, 74 => 53, 70 => 51, 64 => 50, 59 => 49, 56 => 48, 53 => 47, 50 => 46, 45 => 44, 43 => 43, 41 => 40, 40 => 36];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--system-menu-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--system-menu-block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 36, "if" => 46, "block" => 53];
    static $filters = ["clean_class" => 40, "clean_id" => 43, "escape" => 44];
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
