<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/menu-local-tasks.html.twig .
 */
class __TwigTemplate_70d57a63cc763efc9fb1adf85d320235 extends Template {
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
    if (($context["primary"] ?? NULL)) {
      // Line 17.
      echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
      echo "</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper is-horizontal is-collapsible\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs tabs--primary clearfix\" data-drupal-nav-tabs-target>";
      // Line 19.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? NULL), 19, $this->source), "html", NULL, TRUE);
      echo "</ul>
  </nav>
";
    }
    // Line 22.
    if (($context["secondary"] ?? NULL)) {
      // Line 23.
      echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
      echo "</h2>
  <nav role=\"navigation\" class=\"tabs-wrapper tabs-wrapper--secondary is-horizontal is-collapsible\" aria-labelledby=\"secondary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs tabs--secondary clearfix\" data-drupal-nav-tabs-target>";
      // Line 25.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? NULL), 25, $this->source), "html", NULL, TRUE);
      echo "</ul>
  </nav>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/menu-local-tasks.html.twig";
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
    return [61 => 25, 55 => 23, 53 => 22, 47 => 19, 41 => 17, 39 => 16];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/menu-local-tasks.html.twig", "/var/www/html/web/core/themes/claro/templates/menu-local-tasks.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 16];
    static $filters = ["t" => 17, "escape" => 19];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if'],
            ['t', 'escape'],
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
