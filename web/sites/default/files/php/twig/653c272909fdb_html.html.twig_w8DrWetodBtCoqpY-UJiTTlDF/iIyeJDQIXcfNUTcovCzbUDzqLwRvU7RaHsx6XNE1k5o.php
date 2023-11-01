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
 * Core/themes/olivero/templates/layout/html.html.twig .
 */
class __TwigTemplate_70a02092721b37e59a3f82beed4828fe extends Template {
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
    // Line 29.
    $context["body_classes"] = [
    // Line 30.
      0 => ((
    ($context["logged_in"] ?? NULL)) ? ("user-logged-in") : ("")),
    // Line 31.
      1 => ((!($context["root_path"] ?? NULL)) ? ("path-frontpage") : (("path-" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? NULL), 31, $this->source))))),
    // Line 32.
      2 => ((
    ($context["node_type"] ?? NULL)) ? (("page-node-type-" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? NULL), 32, $this->source)))) : ("")),
    // Line 33.
      3 => ((
    ($context["db_offline"] ?? NULL)) ? ("db-offline") : ("")),
    ];
    // Line 36.
    echo "<!DOCTYPE html>
<html";
    // Line 37.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? NULL), 37, $this->source), "html", NULL, TRUE);
    echo ">
  <head>
    <head-placeholder token=\"";
    // Line 39.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 39, $this->source), "html", NULL, TRUE);
    echo "\">
    <title>";
    // Line 40.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? NULL), 40, $this->source), " | "));
    echo "</title>
    <css-placeholder token=\"";
    // Line 41.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 41, $this->source), "html", NULL, TRUE);
    echo "\">
    <js-placeholder token=\"";
    // Line 42.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 42, $this->source), "html", NULL, TRUE);
    echo "\">
    ";
    // Line 43.
    $this->loadTemplate("@olivero/includes/preload.twig", "core/themes/olivero/templates/layout/html.html.twig", 43)->display(twig_to_array(["olivero_path" => ($context["olivero_path"] ?? NULL)]));
    // Line 44.
    echo "    ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["noscript_styles"] ?? NULL), 44, $this->source), "html", NULL, TRUE);
    echo "
  </head>
  <body";
    // Line 46.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["body_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 46), 46, $this->source), "html", NULL, TRUE);
    echo ">
    ";
    // Line 51.
    echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
    // Line 52.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
    echo "
    </a>
    ";
    // Line 54.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? NULL), 54, $this->source), "html", NULL, TRUE);
    echo "
    ";
    // Line 55.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? NULL), 55, $this->source), "html", NULL, TRUE);
    echo "
    ";
    // Line 56.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? NULL), 56, $this->source), "html", NULL, TRUE);
    echo "
    <js-bottom-placeholder token=\"";
    // Line 57.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 57, $this->source), "html", NULL, TRUE);
    echo "\">
  </body>
</html>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/layout/html.html.twig";
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
    return [101 => 57, 97 => 56, 93 => 55, 89 => 54, 84 => 52, 81 => 51, 77 => 46, 71 => 44, 69 => 43, 65 => 42, 61 => 41, 57 => 40, 53 => 39, 48 => 37, 45 => 36, 43 => 33, 42 => 32, 41 => 31, 40 => 30, 39 => 29];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/layout/html.html.twig", "/var/www/html/web/core/themes/olivero/templates/layout/html.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 29, "include" => 43];
    static $filters = ["clean_class" => 31, "escape" => 37, "safe_join" => 40, "t" => 52];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'include'],
            ['clean_class', 'escape', 'safe_join', 't'],
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
