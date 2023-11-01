<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/modules/system/templates/form-element-label.html.twig .
 */
class __TwigTemplate_3b94ca22d14ca541c07d206d72888e60 extends Template {
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
    // Line 18.
    $context["classes"] = [
    // Line 19.
      0 => (((
    ($context["title_display"] ?? NULL) == "after")) ? ("option") : ("")),
    // Line 20.
      1 => (((
    ($context["title_display"] ?? NULL) == "invisible")) ? ("visually-hidden") : ("")),
    // Line 21.
      2 => ((
    ($context["required"] ?? NULL)) ? ("js-form-required") : ("")),
    // Line 22.
      3 => ((
    ($context["required"] ?? NULL)) ? ("form-required") : ("")),
    ];
    // Line 25.
    if ((!twig_test_empty(($context["title"] ?? NULL)) || ($context["required"] ?? NULL))) {
      // Line 26.
      echo "<label";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 26), 26, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 26, $this->source), "html", NULL, TRUE);
      echo "</label>";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/form-element-label.html.twig";
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
    return [47 => 26, 45 => 25, 43 => 22, 42 => 21, 41 => 20, 40 => 19, 39 => 18];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/form-element-label.html.twig", "/var/www/html/web/core/modules/system/templates/form-element-label.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 18, "if" => 25];
    static $filters = ["escape" => 26];
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
