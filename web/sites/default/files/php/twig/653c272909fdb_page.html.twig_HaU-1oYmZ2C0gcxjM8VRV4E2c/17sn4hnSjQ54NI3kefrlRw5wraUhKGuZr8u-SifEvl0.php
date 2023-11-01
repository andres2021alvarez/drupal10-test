<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/page.html.twig .
 */
class __TwigTemplate_977c4795b4b69fda94e973dfedaee4ec extends Template {
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
    // Line 42.
    echo "  <header class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
    // Line 44.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "breadcrumb", [], "any", FALSE, FALSE, TRUE, 44), 44, $this->source), "html", NULL, TRUE);
    echo "
      ";
    // Line 45.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "header", [], "any", FALSE, FALSE, TRUE, 45), 45, $this->source), "html", NULL, TRUE);
    echo "
    </div>
  </header>

  <div class=\"layout-container\">
    ";
    // Line 50.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "pre_content", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source), "html", NULL, TRUE);
    echo "
    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
    // Line 53.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "highlighted", [], "any", FALSE, FALSE, TRUE, 53), 53, $this->source), "html", NULL, TRUE);
    echo "
      ";
    // Line 54.
    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "help", [], "any", FALSE, FALSE, TRUE, 54)) {
      // Line 55.
      echo "        <div class=\"help\">
          ";
      // Line 56.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "help", [], "any", FALSE, FALSE, TRUE, 56), 56, $this->source), "html", NULL, TRUE);
      echo "
        </div>
      ";
    }
    // Line 59.
    echo "      ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 59), 59, $this->source), "html", NULL, TRUE);
    echo "
    </main>

  </div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/page.html.twig";
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
    return [76 => 59, 70 => 56, 67 => 55, 65 => 54, 61 => 53, 55 => 50, 47 => 45, 43 => 44, 39 => 42];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/page.html.twig", "/var/www/html/web/core/themes/claro/templates/page.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 54];
    static $filters = ["escape" => 44];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if'],
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
