<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig .
 */
class __TwigTemplate_1f5de38e3f2bb9842fe451ec046b806f extends Template {
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
    // Line 26.
    $context["classes"] = [0 => "block", 1 => "block-search-wide"];
    // Line 31.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 31), 31, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 32.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 32, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 33.
    if (($context["label"] ?? NULL)) {
      // Line 34.
      echo "    <h2";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? NULL), 34, $this->source), "html", NULL, TRUE);
      echo ">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? NULL), 34, $this->source), "html", NULL, TRUE);
      echo "</h2>
  ";
    }
    // Line 36.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 36, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 37.
    $this->displayBlock('content', $context, $blocks);
    // Line 56.
    echo "</div>
";
  }

  /**
   * Line 37.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 38.
    echo "    <button class=\"block-search-wide__button\" aria-label=\"";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Form"));
    echo "\" data-drupal-selector=\"block-search-wide-button\">
      ";
    // Line 39.
    $this->loadTemplate("@olivero/../images/search.svg", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", 39)->display($context);
    // Line 40.
    echo "      <span class=\"block-search-wide__button-close\"></span>
    </button>

    ";
    // Line 48.
    echo "    <div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? NULL), "addClass", [0 => "block-search-wide__wrapper"], "method", FALSE, FALSE, TRUE, 48), "setAttribute", [0 => "data-drupal-selector", 1 => "block-search-wide-wrapper"], "method", FALSE, FALSE, TRUE, 48), "setAttribute", [0 => "tabindex", 1 => "-1"], "method", FALSE, FALSE, TRUE, 48), 48, $this->source), "html", NULL, TRUE);
    echo ">
      <div class=\"block-search-wide__container\">
        <div class=\"block-search-wide__grid\">
          ";
    // Line 51.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? NULL), 51, $this->source), "html", NULL, TRUE);
    echo "
        </div>
      </div>
    </div>
  ";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig";
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
    return [96 => 51, 89 => 48, 84 => 40, 82 => 39, 77 => 38, 73 => 37, 68 => 56, 66 => 37, 61 => 36, 53 => 34, 51 => 33, 47 => 32, 42 => 31, 40 => 26];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 26, "if" => 33, "block" => 37, "include" => 39];
    static $filters = ["escape" => 31, "t" => 38];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'block', 'include'],
            ['escape', 't'],
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
