<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/modules/big_pipe/templates/big-pipe-interface-preview.html.twig .
 */
class __TwigTemplate_8914119eea125d8f6837f2451442bd2b extends Template {
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
    // Line 9.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["preview"] ?? NULL), 9, $this->source), "html", NULL, TRUE);
    echo "
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/big_pipe/templates/big-pipe-interface-preview.html.twig";
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
    return [39 => 9];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/big_pipe/templates/big-pipe-interface-preview.html.twig", "/var/www/html/web/core/modules/big_pipe/templates/big-pipe-interface-preview.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = [];
    static $filters = ["escape" => 9];
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
