<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * __string_template__d3f931c33e2b74413c911a46e78e4a87 .
 */
class __TwigTemplate_cdb8a434a5fe364cec20ed1b49fc68e6 extends Template {
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
    // Line 1.
    echo "<code>/entity/field_config/{field_config}</code>: GET";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "__string_template__d3f931c33e2b74413c911a46e78e4a87";
  }

  /**
   *
   */
  public function getDebugInfo() {
    return [39 => 1];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "__string_template__d3f931c33e2b74413c911a46e78e4a87", "");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = [];
    static $filters = [];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            [],
            [],
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
