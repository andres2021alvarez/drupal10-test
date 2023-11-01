<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/modules/system/templates/off-canvas-page-wrapper.html.twig .
 */
class __TwigTemplate_8b44590195712a884c10c5a7784b4ef8 extends Template {
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
    // Line 22.
    if (($context["children"] ?? NULL)) {
      // Line 23.
      echo "  <div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
    ";
      // Line 24.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 24, $this->source), "html", NULL, TRUE);
      echo "
  </div>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/off-canvas-page-wrapper.html.twig";
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
    return [44 => 24, 41 => 23, 39 => 22];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/off-canvas-page-wrapper.html.twig", "/var/www/html/web/core/modules/system/templates/off-canvas-page-wrapper.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 22];
    static $filters = ["escape" => 24];
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
