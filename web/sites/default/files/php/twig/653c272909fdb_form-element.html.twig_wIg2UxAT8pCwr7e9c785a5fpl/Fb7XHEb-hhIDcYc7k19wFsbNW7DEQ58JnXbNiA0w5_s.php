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
 * Core/themes/claro/templates/form-element.html.twig .
 */
class __TwigTemplate_1defac5442d71541bcb480a59998108b extends Template {
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
    // Line 14.
    $context["classes"] = [
      0 => "js-form-item",
      1 => "form-item",
    // Line 17.
      2 => ("js-form-type-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["type"] ?? NULL), 17, $this->source))),
    // Line 18.
      3 => ("form-type--" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["type"] ?? NULL), 18, $this->source))),
    // Line 19.
      4 => ((twig_in_filter(
    ($context["type"] ?? NULL), [0 => "checkbox", 1 => "radio"])) ? ("form-type--boolean") : ("")),
    // Line 20.
      5 => ("js-form-item-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["name"] ?? NULL), 20, $this->source))),
    // Line 21.
      6 => ("form-item--" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["name"] ?? NULL), 21, $this->source))),
    // Line 22.
      7 => ((!twig_in_filter(
    ($context["title_display"] ?? NULL), [0 => "after", 1 => "before"])) ? ("form-item--no-label") : ("")),
    // Line 23.
      8 => (((
    ($context["disabled"] ?? NULL) == "disabled")) ? ("form-item--disabled") : ("")),
    // Line 24.
      9 => ((
    ($context["errors"] ?? NULL)) ? ("form-item--error") : ("")),
    ];
    // Line 28.
    $context["description_classes"] = [
      0 => "form-item__description",
    // Line 30.
      1 => (((
    ($context["description_display"] ?? NULL) == "invisible")) ? ("visually-hidden") : ("")),
    ];
    // Line 33.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 33), 33, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 34.
    if (twig_in_filter(($context["label_display"] ?? NULL), [0 => "before", 1 => "invisible"])) {
      // Line 35.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 35, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 37.
    echo "  ";
    if (!twig_test_empty(($context["prefix"] ?? NULL))) {
      // Line 38.
      echo "    <span class=\"form-item__prefix";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? NULL) == "disabled")) ? (" is-disabled") : ("")));
      echo "\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? NULL), 38, $this->source), "html", NULL, TRUE);
      echo "</span>
  ";
    }
    // Line 40.
    echo "  ";
    if (((($context["description_display"] ?? NULL) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 40))) {
      // Line 41.
      echo "    <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 41), "addClass", [0 => ($context["description_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 41), 41, $this->source), "html", NULL, TRUE);
      echo ">
      ";
      // Line 42.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 42), 42, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 45.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 45, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 46.
    if (!twig_test_empty(($context["suffix"] ?? NULL))) {
      // Line 47.
      echo "    <span class=\"form-item__suffix";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? NULL) == "disabled")) ? (" is-disabled") : ("")));
      echo "\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? NULL), 47, $this->source), "html", NULL, TRUE);
      echo "</span>
  ";
    }
    // Line 49.
    echo "  ";
    if ((($context["label_display"] ?? NULL) == "after")) {
      // Line 50.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 50, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 52.
    echo "  ";
    if (($context["errors"] ?? NULL)) {
      // Line 53.
      echo "    <div class=\"form-item__error-message\">
      ";
      // Line 54.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? NULL), 54, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 57.
    echo "  ";
    if ((twig_in_filter(($context["description_display"] ?? NULL), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 57))) {
      // Line 58.
      echo "    <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 58), "addClass", [0 => ($context["description_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 58), 58, $this->source), "html", NULL, TRUE);
      echo ">
      ";
      // Line 59.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 59), 59, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 62.
    echo "</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/form-element.html.twig";
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
    return [140 => 62, 134 => 59, 129 => 58, 126 => 57, 120 => 54, 117 => 53, 114 => 52, 108 => 50, 105 => 49, 97 => 47, 95 => 46, 90 => 45, 84 => 42, 79 => 41, 76 => 40, 68 => 38, 65 => 37, 59 => 35, 57 => 34, 52 => 33, 50 => 30, 49 => 28, 47 => 24, 46 => 23, 45 => 22, 44 => 21, 43 => 20, 42 => 19, 41 => 18, 40 => 17, 39 => 14];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/form-element.html.twig", "/var/www/html/web/core/themes/claro/templates/form-element.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 14, "if" => 34];
    static $filters = ["clean_class" => 17, "escape" => 33];
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
