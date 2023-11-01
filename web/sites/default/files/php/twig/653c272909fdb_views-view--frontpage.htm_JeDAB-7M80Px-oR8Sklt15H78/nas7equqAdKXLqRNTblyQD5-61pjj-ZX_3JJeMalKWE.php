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
 * Core/themes/olivero/templates/views/views-view--frontpage.html.twig .
 */
class __TwigTemplate_d4dd56913501a3608cbcd316dab29024 extends Template {
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
    // Line 35.
    echo "
";
    // Line 37.
    $context["classes"] = [
      0 => "view",
    // Line 39.
      1 => ("view-" . Html::getClass($this->sandbox->ensureToStringAllowed(
    ($context["id"] ?? NULL), 39, $this->source))),
    // Line 40.
      2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(
    ($context["id"] ?? NULL), 40, $this->source)),
    // Line 41.
      3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(
    ($context["display_id"] ?? NULL), 41, $this->source)),
      4 => "grid-full",
      5 => "layout--pass--content-narrow",
    ];
    // Line 46.
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 46), 46, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 47.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? NULL), 47, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 48.
    if (($context["title"] ?? NULL)) {
      // Line 49.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 49, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 51.
    echo "  ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? NULL), 51, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 52.
    if (($context["header"] ?? NULL)) {
      // Line 53.
      echo "    <div class=\"view-header\">
      ";
      // Line 54.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? NULL), 54, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 57.
    echo "  ";
    if (($context["exposed"] ?? NULL)) {
      // Line 58.
      echo "    <div class=\"view-filters\">
      ";
      // Line 59.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? NULL), 59, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 62.
    echo "  ";
    if (($context["attachment_before"] ?? NULL)) {
      // Line 63.
      echo "    <div class=\"attachment attachment-before\">
      ";
      // Line 64.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? NULL), 64, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 67.
    echo "
  ";
    // Line 68.
    if (($context["rows"] ?? NULL)) {
      // Line 69.
      echo "    <div class=\"view-content\">
      ";
      // Line 70.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? NULL), 70, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
      // Line 72.
    }
    elseif (
    ($context["empty"] ?? NULL)) {
      // Line 73.
      echo "    ";
      $this->loadTemplate("@olivero/includes/get-started.html.twig", "core/themes/olivero/templates/views/views-view--frontpage.html.twig", 73)->display($context);
      // Line 74.
      echo "  ";
    }
    // Line 75.
    echo "
  ";
    // Line 76.
    if (($context["pager"] ?? NULL)) {
      // Line 77.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? NULL), 77, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 79.
    echo "  ";
    if (($context["attachment_after"] ?? NULL)) {
      // Line 80.
      echo "    <div class=\"attachment attachment-after\">
      ";
      // Line 81.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? NULL), 81, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 84.
    echo "  ";
    if (($context["more"] ?? NULL)) {
      // Line 85.
      echo "    ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? NULL), 85, $this->source), "html", NULL, TRUE);
      echo "
  ";
    }
    // Line 87.
    echo "  ";
    if (($context["footer"] ?? NULL)) {
      // Line 88.
      echo "    <div class=\"view-footer\">
      ";
      // Line 89.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? NULL), 89, $this->source), "html", NULL, TRUE);
      echo "
    </div>
  ";
    }
    // Line 92.
    echo "
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/views/views-view--frontpage.html.twig";
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
    return [169 => 92, 163 => 89, 160 => 88, 157 => 87, 151 => 85, 148 => 84, 142 => 81, 139 => 80, 136 => 79, 130 => 77, 128 => 76, 125 => 75, 122 => 74, 119 => 73, 117 => 72, 112 => 70, 109 => 69, 107 => 68, 104 => 67, 98 => 64, 95 => 63, 92 => 62, 86 => 59, 83 => 58, 80 => 57, 74 => 54, 71 => 53, 69 => 52, 64 => 51, 58 => 49, 56 => 48, 52 => 47, 47 => 46, 45 => 41, 44 => 40, 43 => 39, 42 => 37, 39 => 35];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/views/views-view--frontpage.html.twig", "/var/www/html/web/core/themes/olivero/templates/views/views-view--frontpage.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 37, "if" => 48, "include" => 73];
    static $filters = ["clean_class" => 39, "escape" => 46];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'include'],
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
