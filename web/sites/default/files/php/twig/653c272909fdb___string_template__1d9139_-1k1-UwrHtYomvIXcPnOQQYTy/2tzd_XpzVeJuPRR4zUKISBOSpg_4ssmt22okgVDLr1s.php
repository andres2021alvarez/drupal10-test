<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * __string_template__1d9139ae183500a61668494ea20531cf .
 */
class __TwigTemplate_9fc904c0e215727e8854ede6d2be4ddb extends Template {
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
    echo "<code>/file/upload/{entity_type_id}/{bundle}/{field_name}</code>: POST";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "__string_template__1d9139ae183500a61668494ea20531cf";
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
    return new Source("", "__string_template__1d9139ae183500a61668494ea20531cf", "");
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
