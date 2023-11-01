<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * __string_template__f708b51172140bd84a89cacc0ed43a92 .
 */
class __TwigTemplate_7a372e51448448526e493bb1a4c7eb98 extends Template {
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
    echo "<div class=\"permission\"><span class=\"title\">";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 1, $this->source), "html", NULL, TRUE);
    echo "</span>";
    if ((($context["description"] ?? NULL) || ($context["warning"] ?? NULL))) {
      echo "<div class=\"description\">";
      if (($context["warning"] ?? NULL)) {
        echo "<em class=\"permission-warning\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["warning"] ?? NULL), 1, $this->source), "html", NULL, TRUE);
        echo "</em> ";
      }
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? NULL), 1, $this->source), "html", NULL, TRUE);
      echo "</div>";
    }
    echo "</div>";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "__string_template__f708b51172140bd84a89cacc0ed43a92";
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
    return [39 => 1];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "__string_template__f708b51172140bd84a89cacc0ed43a92", "");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 1];
    static $filters = ["escape" => 1];
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
