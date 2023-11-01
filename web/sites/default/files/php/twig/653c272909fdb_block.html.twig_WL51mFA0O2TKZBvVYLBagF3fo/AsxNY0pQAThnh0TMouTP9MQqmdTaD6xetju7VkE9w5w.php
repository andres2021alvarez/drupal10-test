<?php

use Drupal\Component\Utility\Html;
use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Block.html.twig .
 */
class __TwigTemplate_d1731b982d08fea58c1650bd7940916b extends Template {
  private $source;
  private $macros = [];

  /**
   *
   */
  public function __construct(Environment $env) {
    parent::__construct($env);

    $this->source = $this->getSourceContext();

    $this->parent = FALSE;

    $this->blocks = [
      'content' => [$this, 'block_content'],
    ];
    $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
    $this->checkSecurity();
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = []) {
    $macros = $this->macros;
    // Line 34.
    echo "
";
    // Line 36.
    $context["classes"] = [
      0 => "block",
    // Line 38.
      1 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,
    ($context["configuration"] ?? NULL), "provider", [], "any", FALSE, FALSE, TRUE, 38), 38, $this->source))),
    // Line 39.
      2 => ("block-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["plugin_id"] ?? NULL), 39, $this->source))),
    // Line 40.
      3 => ((
    ($context["layout"] ?? NULL)) ? (("layout--" . Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? NULL), 40, $this->source)))) : ("")),
    ];
    // Line 43.
    echo "
<div";
    // Line 44.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 44), 44, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 45.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 45, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 46.
    if (($context["label"] ?? NULL)) {
      // Line 47.
      echo "    <h2";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? NULL), "addClass", [0 => "block__title"], "method", FALSE, FALSE, TRUE, 47), 47, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 47, $this->source), "html", NULL, TRUE);
      echo "</h2>
  ";
    }
    // Line 49.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 49, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 50.
    $this->displayBlock('content', $context, $blocks);
    // Line 55.
    echo "</div>
";
  }

  /**
   * Line 50.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 51.
    echo "    <div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? NULL), "addClass", [0 => "block__content"], "method", FALSE, FALSE, TRUE, 51), 51, $this->source), "html", NULL, TRUE);
    echo ">
      ";
    // Line 52.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 52, $this->source), "html", NULL, TRUE);
    echo "
    </div>
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "block.html.twig";
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
    return [90 => 52, 85 => 51, 81 => 50, 76 => 55, 74 => 50, 69 => 49, 61 => 47, 59 => 46, 55 => 45, 51 => 44, 48 => 43, 46 => 40, 45 => 39, 44 => 38, 43 => 36, 40 => 34];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "block.html.twig", "core/themes/olivero/templates/block/block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 36, "if" => 46, "block" => 50];
    static $filters = ["clean_class" => 38, "escape" => 44];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'block'],
            ['clean_class', 'escape'],
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
