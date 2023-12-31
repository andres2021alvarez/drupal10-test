<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/form/input--submit--header-search.html.twig .
 */
class __TwigTemplate_8fb58ffb19e73c679849306e3616b17e extends Template {
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
    // Line 13.
    echo "<button";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 13, $this->source), "html", NULL, TRUE);
    echo ">
    <span class=\"icon--search\"></span>
    <span class=\"visually-hidden\">";
    // Line 15.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "value", [], "any", FALSE, FALSE, TRUE, 15), 15, $this->source), "html", NULL, TRUE);
    echo "</span>
</button>
";
    // Line 17.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 17, $this->source), "html", NULL, TRUE);
    echo "
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/form/input--submit--header-search.html.twig";
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
    return [50 => 17, 45 => 15, 39 => 13];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/form/input--submit--header-search.html.twig", "/var/www/html/web/core/themes/olivero/templates/form/input--submit--header-search.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = [];
    static $filters = ["escape" => 13];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            [],
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
