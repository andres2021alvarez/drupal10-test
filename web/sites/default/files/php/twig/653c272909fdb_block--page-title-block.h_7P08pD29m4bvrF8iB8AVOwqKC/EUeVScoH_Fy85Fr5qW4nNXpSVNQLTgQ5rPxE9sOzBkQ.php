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
 * Core/themes/olivero/templates/block/block--page-title-block.html.twig .
 */
class __TwigTemplate_9c0f7c972cfae19270ffe801db838d49 extends Template {
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
    // Line 34.
    echo "
";
    // Line 36.
    $context["classes"] = [
      0 => "block",
    // Line 38.
      1 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,
    ($context["configuration"] ?? NULL), "provider", [], "any", FALSE, FALSE, TRUE, 38), 38, $this->source))),
    // Line 39.
      2 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["plugin_id"] ?? NULL), 39, $this->source))),
    // Line 40.
      3 => ((
    ($context["layout"] ?? NULL)) ? (("layout--" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? NULL), 40, $this->source)))) : ("")),
    ];
    // Line 43.
    echo "

<div";
    // Line 45.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 45), 45, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 46.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 46, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 47.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 47, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 48.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 48, $this->source), "html", NULL, TRUE);
    echo "
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--page-title-block.html.twig";
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
    return [63 => 48, 59 => 47, 55 => 46, 51 => 45, 47 => 43, 45 => 40, 44 => 39, 43 => 38, 42 => 36, 39 => 34];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--page-title-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--page-title-block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 36];
    static $filters = ["clean_class" => 38, "escape" => 45];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set'],
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
