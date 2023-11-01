<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/fieldset.html.twig .
 */
class __TwigTemplate_285000fb79afebe28c806d5b41d91756 extends Template {
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
    // Line 30.
    $context["classes"] = [
      0 => "fieldset",
    // Line 32.
      1 => ((twig_get_attribute($this->env, $this->source,
    ($context["attributes"] ?? NULL), "hasClass", [0 => "fieldgroup"], "method", FALSE, FALSE, TRUE, 32)) ? ("fieldset--group") : ("")),
      2 => "js-form-item",
      3 => "form-item",
      4 => "js-form-wrapper",
      5 => "form-wrapper",
    ];
    // Line 40.
    $context["wrapper_classes"] = [
      0 => "fieldset__wrapper",
    // Line 42.
      1 => ((twig_get_attribute($this->env, $this->source,
    ($context["attributes"] ?? NULL), "hasClass", [0 => "fieldgroup"], "method", FALSE, FALSE, TRUE, 42)) ? ("fieldset__wrapper--group") : ("")),
    ];
    // Line 46.
    $context["legend_span_classes"] = [
      0 => "fieldset__label",
    // Line 48.
      1 => ((twig_get_attribute($this->env, $this->source,
    ($context["attributes"] ?? NULL), "hasClass", [0 => "fieldgroup"], "method", FALSE, FALSE, TRUE, 48)) ? ("fieldset__label--group") : ("")),
    // Line 49.
      2 => ((
    ($context["required"] ?? NULL)) ? ("js-form-required") : ("")),
    // Line 50.
      3 => ((
    ($context["required"] ?? NULL)) ? ("form-required") : ("")),
    ];
    // Line 54.
    $context["legend_classes"] = [
      0 => "fieldset__legend",
    // Line 56.
      1 => (((twig_get_attribute($this->env, $this->source,
    ($context["attributes"] ?? NULL), "hasClass", [0 => "fieldgroup"], "method", FALSE, FALSE, TRUE, 56) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "hasClass", [0 => "form-composite"], "method", FALSE, FALSE, TRUE, 56))) ? ("fieldset__legend--group") : ("")),
    // Line 57.
      2 => ((twig_get_attribute($this->env, $this->source,
    ($context["attributes"] ?? NULL), "hasClass", [0 => "form-composite"], "method", FALSE, FALSE, TRUE, 57)) ? ("fieldset__legend--composite") : ("")),
    // Line 58.
      3 => (((
    ($context["title_display"] ?? NULL) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible")),
    ];
    // Line 62.
    $context["description_classes"] = [0 => "fieldset__description"];
    // Line 66.
    echo "
<fieldset";
    // Line 67.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 67), 67, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 69.
    echo "  ";
    if (twig_get_attribute($this->env, $this->source, ($context["legend"] ?? NULL), "title", [], "any", FALSE, FALSE, TRUE, 69)) {
      // Line 70.
      echo "  <legend";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 70), "addClass", [0 => ($context["legend_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 70), 70, $this->source), "html", NULL, TRUE);
      echo ">
    <span";
      // Line 71.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 71), "addClass", [0 => ($context["legend_span_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 71), 71, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? NULL), "title", [], "any", FALSE, FALSE, TRUE, 71), 71, $this->source), "html", NULL, TRUE);
      echo "</span>
  </legend>
  ";
    }
    // Line 74.
    echo "
  <div";
    // Line 75.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? NULL), "addClass", [0 => ($context["wrapper_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 75), 75, $this->source), "html", NULL, TRUE);
    echo ">
    ";
    // Line 76.
    if (((($context["description_display"] ?? NULL) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 76))) {
      // Line 77.
      echo "      <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 77), "addClass", [0 => ($context["description_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 77), 77, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 77), 77, $this->source), "html", NULL, TRUE);
      echo "</div>
    ";
    }
    // Line 79.
    echo "    ";
    if (($context["inline_items"] ?? NULL)) {
      // Line 80.
      echo "      <div class=\"container-inline\">
    ";
    }
    // Line 82.
    echo "
    ";
    // Line 83.
    if (($context["prefix"] ?? NULL)) {
      // Line 84.
      echo "      <span class=\"fieldset__prefix\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? NULL), 84, $this->source), "html", NULL, TRUE);
      echo "</span>
    ";
    }
    // Line 86.
    echo "    ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 86, $this->source), "html", NULL, TRUE);
    echo "
    ";
    // Line 87.
    if (($context["suffix"] ?? NULL)) {
      // Line 88.
      echo "      <span class=\"fieldset__suffix\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? NULL), 88, $this->source), "html", NULL, TRUE);
      echo "</span>
    ";
    }
    // Line 90.
    echo "    ";
    if (($context["errors"] ?? NULL)) {
      // Line 91.
      echo "      <div class=\"fieldset__error-message\">
        ";
      // Line 92.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? NULL), 92, $this->source), "html", NULL, TRUE);
      echo "
      </div>
    ";
    }
    // Line 95.
    echo "    ";
    if ((twig_in_filter(($context["description_display"] ?? NULL), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 95))) {
      // Line 96.
      echo "      <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 96), "addClass", [0 => ($context["description_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 96), 96, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 96), 96, $this->source), "html", NULL, TRUE);
      echo "</div>
    ";
    }
    // Line 98.
    echo "
    ";
    // Line 99.
    if (($context["inline_items"] ?? NULL)) {
      // Line 100.
      echo "      </div>
    ";
    }
    // Line 102.
    echo "  </div>
</fieldset>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/fieldset.html.twig";
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
    return [160 => 102, 156 => 100, 154 => 99, 151 => 98, 143 => 96, 140 => 95, 134 => 92, 131 => 91, 128 => 90, 122 => 88, 120 => 87, 115 => 86, 109 => 84, 107 => 83, 104 => 82, 100 => 80, 97 => 79, 89 => 77, 87 => 76, 83 => 75, 80 => 74, 72 => 71, 67 => 70, 64 => 69, 60 => 67, 57 => 66, 55 => 62, 53 => 58, 52 => 57, 51 => 56, 50 => 54, 48 => 50, 47 => 49, 46 => 48, 45 => 46, 43 => 42, 42 => 40, 40 => 32, 39 => 30];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/fieldset.html.twig", "/var/www/html/web/core/themes/claro/templates/fieldset.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 30, "if" => 69];
    static $filters = ["escape" => 67];
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
