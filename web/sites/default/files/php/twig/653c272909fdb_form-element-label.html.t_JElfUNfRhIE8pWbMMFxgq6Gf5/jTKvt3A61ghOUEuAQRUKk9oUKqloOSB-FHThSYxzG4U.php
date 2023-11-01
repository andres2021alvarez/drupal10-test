<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/form-element-label.html.twig .
 */
class __TwigTemplate_55993afa6d9068585cfd10e7bcedada9 extends Template {
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
      0 => "form-item__label",
    // Line 18.
      1 => (((
    ($context["title_display"] ?? NULL) == "after")) ? ("option") : ("")),
    // Line 19.
      2 => (((
    ($context["title_display"] ?? NULL) == "invisible")) ? ("visually-hidden") : ("")),
    // Line 20.
      3 => ((
    ($context["required"] ?? NULL)) ? ("js-form-required") : ("")),
    // Line 21.
      4 => ((
    ($context["required"] ?? NULL)) ? ("form-required") : ("")),
    ];
    // Line 24.
    if ((!twig_test_empty(($context["title"] ?? NULL)) || ($context["required"] ?? NULL))) {
      // Line 25.
      echo "<label";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 25), 25, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 25, $this->source), "html", NULL, TRUE);
      echo "</label>";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/form-element-label.html.twig";
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
    return [47 => 25, 45 => 24, 43 => 21, 42 => 20, 41 => 19, 40 => 18, 39 => 16];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/form-element-label.html.twig", "/var/www/html/web/core/themes/claro/templates/form-element-label.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 16, "if" => 24];
    static $filters = ["escape" => 25];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if'],
            ['escape'],
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
