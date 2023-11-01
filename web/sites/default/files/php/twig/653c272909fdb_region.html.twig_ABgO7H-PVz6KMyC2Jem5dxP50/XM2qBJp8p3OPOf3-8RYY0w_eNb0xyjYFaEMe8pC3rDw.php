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
 * Core/themes/claro/templates/classy/layout/region.html.twig .
 */
class __TwigTemplate_5a057a4d0e283a9312eeaa60a5a2e588 extends Template {
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
    // Line 16.
    $context["classes"] = [
      0 => "region",
    // Line 18.
      1 => ("region-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["region"] ?? NULL), 18, $this->source))),
    ];
    // Line 21.
    if (($context["content"] ?? NULL)) {
      // Line 22.
      echo "  <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 22), 22, $this->source), "html", NULL, TRUE);
      echo ">
    ";
      // Line 23.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 23, $this->source), "html", NULL, TRUE);
      echo "
  </div>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/classy/layout/region.html.twig";
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
    return [49 => 23, 44 => 22, 42 => 21, 40 => 18, 39 => 16];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/classy/layout/region.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/layout/region.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 16, "if" => 21];
    static $filters = ["clean_class" => 18, "escape" => 22];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if'],
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
