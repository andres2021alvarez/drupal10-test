<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/block/block--system-branding-block.html.twig .
 */
class __TwigTemplate_5732941ccf7d68bffb79ef08ee5d7136 extends Template {
  private $source;
  private $macros = [];

  /**
   *
   */
  public function __construct(Environment $env) {
    parent::__construct($env);

    $this->source = $this->getSourceContext();

    $this->blocks = [
      'content' => [$this, 'block_content'],
    ];
    $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
    $this->checkSecurity();
  }

  /**
   *
   */
  protected function doGetParent(array $context) {
    // Line 1.
    return "block.html.twig";
  }

  /**
   *
   */
  protected function doDisplay(array $context, array $blocks = []) {
    $macros = $this->macros;
    // Line 16.
    $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "site-branding"], "method", FALSE, FALSE, TRUE, 16);
    // Line 1.
    $this->parent = $this->loadTemplate("block.html.twig", "core/themes/olivero/templates/block/block--system-branding-block.html.twig", 1);
    $this->parent->display($context, array_merge($this->blocks, $blocks));
  }

  /**
   * Line 17.
   */
  public function block_content($context, array $blocks = []) {
    $macros = $this->macros;
    // Line 18.
    echo "  <div class=\"site-branding__inner\">
    ";
    // Line 19.
    if (($context["site_logo"] ?? NULL)) {
      // Line 20.
      echo "      <a href=\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
      echo "\" rel=\"home\" class=\"site-branding__logo\">
        <img src=\"";
      // Line 21.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? NULL), 21, $this->source), "html", NULL, TRUE);
      echo "\" alt=\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
      echo "\" />
      </a>
    ";
    }
    // Line 24.
    echo "    ";
    if (($context["site_name"] ?? NULL)) {
      // Line 25.
      echo "      <div class=\"site-branding__text\">
        <div class=\"site-branding__name\">
          <a href=\"";
      // Line 27.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
      echo "\" title=\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
      echo "\" rel=\"home\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? NULL), 27, $this->source), "html", NULL, TRUE);
      echo "</a>
        </div>
      </div>
    ";
    }
    // Line 31.
    echo "  </div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/block/block--system-branding-block.html.twig";
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
    return [91 => 31, 80 => 27, 76 => 25, 73 => 24, 65 => 21, 60 => 20, 58 => 19, 55 => 18, 51 => 17, 46 => 1, 44 => 16, 37 => 1];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--system-branding-block.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 16, "if" => 19];
    static $filters = ["escape" => 21, "t" => 21];
    static $functions = ["path" => 20];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if'],
            ['escape', 't'],
            ['path']
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
