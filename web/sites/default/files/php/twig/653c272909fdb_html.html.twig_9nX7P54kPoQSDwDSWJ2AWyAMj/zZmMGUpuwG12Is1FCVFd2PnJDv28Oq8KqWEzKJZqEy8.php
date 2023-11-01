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
 * Core/themes/claro/templates/classy/layout/html.html.twig .
 */
class __TwigTemplate_42bdefe175c3c1544177838175fb81e0 extends Template {
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
    // Line 27.
    $context["body_classes"] = [
    // Line 28.
      0 => ((
    ($context["logged_in"] ?? NULL)) ? ("user-logged-in") : ("")),
    // Line 29.
      1 => ((!($context["root_path"] ?? NULL)) ? ("path-frontpage") : (("path-" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? NULL), 29, $this->source))))),
    // Line 30.
      2 => ((
    ($context["node_type"] ?? NULL)) ? (("page-node-type-" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? NULL), 30, $this->source)))) : ("")),
    // Line 31.
      3 => ((
    ($context["db_offline"] ?? NULL)) ? ("db-offline") : ("")),
    ];
    // Line 34.
    echo "<!DOCTYPE html>
<html";
    // Line 35.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? NULL), 35, $this->source), "html", NULL, TRUE);
    echo ">
  <head>
    <head-placeholder token=\"";
    // Line 37.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 37, $this->source), "html", NULL, TRUE);
    echo "\">
    <title>";
    // Line 38.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? NULL), 38, $this->source), " | "));
    echo "</title>
    <css-placeholder token=\"";
    // Line 39.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 39, $this->source), "html", NULL, TRUE);
    echo "\">
    <js-placeholder token=\"";
    // Line 40.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 40, $this->source), "html", NULL, TRUE);
    echo "\">
  </head>
  <body";
    // Line 42.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["body_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 42), 42, $this->source), "html", NULL, TRUE);
    echo ">
    ";
    // Line 47.
    echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
    // Line 48.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
    echo "
    </a>
    ";
    // Line 50.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? NULL), 50, $this->source), "html", NULL, TRUE);
    echo "
    ";
    // Line 51.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? NULL), 51, $this->source), "html", NULL, TRUE);
    echo "
    ";
    // Line 52.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? NULL), 52, $this->source), "html", NULL, TRUE);
    echo "
    <js-bottom-placeholder token=\"";
    // Line 53.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? NULL), 53, $this->source), "html", NULL, TRUE);
    echo "\">
  </body>
</html>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/classy/layout/html.html.twig";
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
    return [94 => 53, 90 => 52, 86 => 51, 82 => 50, 77 => 48, 74 => 47, 70 => 42, 65 => 40, 61 => 39, 57 => 38, 53 => 37, 48 => 35, 45 => 34, 43 => 31, 42 => 30, 41 => 29, 40 => 28, 39 => 27];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/classy/layout/html.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/layout/html.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 27];
    static $filters = ["clean_class" => 29, "escape" => 35, "safe_join" => 38, "t" => 48];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set'],
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
