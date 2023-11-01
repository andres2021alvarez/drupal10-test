<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/modules/system/templates/container.html.twig .
 */
class __TwigTemplate_e209e54112f19e7f4cb9b6f52ac25a3b extends Template {
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
    // Line 25.
    $context["classes"] = [
    // Line 26.
      0 => ((
    ($context["has_parent"] ?? NULL)) ? ("js-form-wrapper") : ("")),
    // Line 27.
      1 => ((
    ($context["has_parent"] ?? NULL)) ? ("form-wrapper") : ("")),
    ];
    // Line 30.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 30), 30, $this->source), "html", NULL, TRUE);
    echo ">";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 30, $this->source), "html", NULL, TRUE);
    echo "</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/container.html.twig";
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
    return [43 => 30, 41 => 27, 40 => 26, 39 => 25];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/container.html.twig", "/var/www/html/web/core/modules/system/templates/container.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 25];
    static $filters = ["escape" => 30];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set'],
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
