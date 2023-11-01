<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/content/page-title.html.twig .
 */
class __TwigTemplate_e3d4054bace1d6efe1d3615cdc9bc28d extends Template {
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
    $context["classes"] = [0 => "title", 1 => "page-title"];
    // Line 21.
    echo "
";
    // Line 22.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 22, $this->source), "html", NULL, TRUE);
    echo "
";
    // Line 23.
    if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["title"] ?? NULL))))) {
      // Line 24.
      echo "  <h1";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 24), 24, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 24, $this->source), "html", NULL, TRUE);
      echo "</h1>
";
    }
    // Line 26.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 26, $this->source), "html", NULL, TRUE);
    echo "
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/content/page-title.html.twig";
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
    return [58 => 26, 50 => 24, 48 => 23, 44 => 22, 41 => 21, 39 => 16];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/content/page-title.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/page-title.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 16, "if" => 23];
    static $filters = ["escape" => 22, "trim" => 23, "striptags" => 23, "render" => 23];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if'],
            ['escape', 'trim', 'striptags', 'render'],
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
