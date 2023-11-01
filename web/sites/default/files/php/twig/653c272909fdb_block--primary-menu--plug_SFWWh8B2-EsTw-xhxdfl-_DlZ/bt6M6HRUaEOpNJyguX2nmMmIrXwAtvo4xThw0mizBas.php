<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/block/block--primary-menu--plugin-id--search-form-block.html.twig .
 */
class __TwigTemplate_75f16e7f6b9e24e9ebdee9f54bb731b1 extends Template {
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
    // Line 32.
    $context["classes"] = [0 => "block", 1 => "block-search-narrow"];
    // Line 37.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 37), 37, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 38.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 38, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 39.
    if (($context["label"] ?? NULL)) {
      // Line 40.
      echo "    <h2";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? NULL), 40, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 40, $this->source), "html", NULL, TRUE);
      echo "</h2>
  ";
    }
    // Line 42.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 42, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 43.
    $this->displayBlock('content', $context, $blocks);
    // Line 48.
    echo "</div>
";
  }

  /**
   * Line 43.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 44.
    echo "    <div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? NULL), "addClass", [0 => "content"], "method", FALSE, FALSE, TRUE, 44), 44, $this->source), "html", NULL, TRUE);
    echo ">
      ";
    // Line 45.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 45, $this->source), "html", NULL, TRUE);
    echo "
    </div>
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--primary-menu--plugin-id--search-form-block.html.twig";
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
    return [82 => 45, 77 => 44, 73 => 43, 68 => 48, 66 => 43, 61 => 42, 53 => 40, 51 => 39, 47 => 38, 42 => 37, 40 => 32];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--primary-menu--plugin-id--search-form-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--primary-menu--plugin-id--search-form-block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 32, "if" => 39, "block" => 43];
    static $filters = ["escape" => 37];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'block'],
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
