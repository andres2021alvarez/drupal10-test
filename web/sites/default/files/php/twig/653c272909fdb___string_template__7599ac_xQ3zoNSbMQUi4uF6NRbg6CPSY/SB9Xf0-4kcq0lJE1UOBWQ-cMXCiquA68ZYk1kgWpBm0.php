<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * __string_template__7599ac087993a226696dadff1b88d0c9 .
 */
class __TwigTemplate_6b4cfadd17590623047de9de5f0505fb extends Template {
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
    echo "<code>/entity/menu/{menu}</code>: GET";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "__string_template__7599ac087993a226696dadff1b88d0c9";
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
    return new Source("", "__string_template__7599ac087993a226696dadff1b88d0c9", "");
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