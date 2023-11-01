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
 * Core/modules/system/templates/form-element.html.twig .
 */
class __TwigTemplate_b34e0f856499b64e7eec384e2a9d00da extends Template {
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
    // Line 50.
    $context["classes"] = [
      0 => "js-form-item",
      1 => "form-item",
    // Line 53.
      2 => ("js-form-type-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["type"] ?? NULL), 53, $this->source))),
    // Line 54.
      3 => ("form-item-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["name"] ?? NULL), 54, $this->source))),
    // Line 55.
      4 => ("js-form-item-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["name"] ?? NULL), 55, $this->source))),
    // Line 56.
      5 => ((!twig_in_filter(
    ($context["title_display"] ?? NULL), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")),
    // Line 57.
      6 => (((
    ($context["disabled"] ?? NULL) == "disabled")) ? ("form-disabled") : ("")),
    // Line 58.
      7 => ((
    ($context["errors"] ?? NULL)) ? ("form-item--error") : ("")),
    ];
    // Line 62.
    $context["description_classes"] = [
      0 => "description",
    // Line 64.
      1 => (((
    ($context["description_display"] ?? NULL) == "invisible")) ? ("visually-hidden") : ("")),
    ];
    // Line 67.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 67), 67, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 68.
    if (twig_in_filter(($context["label_display"] ?? NULL), [0 => "before", 1 => "invisible"])) {
      // Line 69.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 69, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 71.
    echo "  ";
    if (!twig_test_empty(($context["prefix"] ?? NULL))) {
      // Line 72.
      echo "    <span class=\"field-prefix\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? NULL), 72, $this->source), "html", NULL, TRUE);
      echo "</span>
  ";
    }
    // Line 74.
    echo "  ";
    if (((($context["description_display"] ?? NULL) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 74))) {
      // Line 75.
      echo "    <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 75), 75, $this->source), "html", NULL, TRUE);
      echo ">
      ";
      // Line 76.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 76), 76, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 79.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 79, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 80.
    if (!twig_test_empty(($context["suffix"] ?? NULL))) {
      // Line 81.
      echo "    <span class=\"field-suffix\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? NULL), 81, $this->source), "html", NULL, TRUE);
      echo "</span>
  ";
    }
    // Line 83.
    echo "  ";
    if ((($context["label_display"] ?? NULL) == "after")) {
      // Line 84.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 84, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 86.
    echo "  ";
    if (($context["errors"] ?? NULL)) {
      // Line 87.
      echo "    <div class=\"form-item--error-message\">
      ";
      // Line 88.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? NULL), 88, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 91.
    echo "  ";
    if ((twig_in_filter(($context["description_display"] ?? NULL), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 91))) {
      // Line 92.
      echo "    <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 92), "addClass", [0 => ($context["description_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 92), 92, $this->source), "html", NULL, TRUE);
      echo ">
      ";
      // Line 93.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 93), 93, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 96.
    echo "</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/form-element.html.twig";
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
    return [134 => 96, 128 => 93, 123 => 92, 120 => 91, 114 => 88, 111 => 87, 108 => 86, 102 => 84, 99 => 83, 93 => 81, 91 => 80, 86 => 79, 80 => 76, 75 => 75, 72 => 74, 66 => 72, 63 => 71, 57 => 69, 55 => 68, 50 => 67, 48 => 64, 47 => 62, 45 => 58, 44 => 57, 43 => 56, 42 => 55, 41 => 54, 40 => 53, 39 => 50];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/form-element.html.twig", "/var/www/html/web/core/modules/system/templates/form-element.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 50, "if" => 68];
    static $filters = ["clean_class" => 53, "escape" => 67];
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
