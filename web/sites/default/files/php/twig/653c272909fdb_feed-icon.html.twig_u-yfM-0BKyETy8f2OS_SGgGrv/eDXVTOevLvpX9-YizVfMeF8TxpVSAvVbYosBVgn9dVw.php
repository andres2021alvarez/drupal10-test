<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/misc/feed-icon.html.twig .
 */
class __TwigTemplate_c33dc3d37e944c8a11cbaa0df9bda60e extends Template {
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
    // Line 14.
    echo "
";
    // Line 15.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/feed"), "html", NULL, TRUE);
    echo "

<a href=\"";
    // Line 17.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? NULL), 17, $this->source), "html", NULL, TRUE);
    echo "\"";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "feed-icon"], "method", FALSE, FALSE, TRUE, 17), 17, $this->source), "html", NULL, TRUE);
    echo ">
  <span class=\"feed-icon__label\">
    ";
    // Line 19.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 19, $this->source), "html", NULL, TRUE);
    echo "
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
    ";
    // Line 22.
    $this->loadTemplate("@olivero/../images/rss.svg", "core/themes/olivero/templates/misc/feed-icon.html.twig", 22)->display($context);
    // Line 23.
    echo "  </span>
</a>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/misc/feed-icon.html.twig";
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
    return [62 => 23, 60 => 22, 54 => 19, 47 => 17, 42 => 15, 39 => 14];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/misc/feed-icon.html.twig", "/var/www/html/web/core/themes/olivero/templates/misc/feed-icon.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["include" => 22];
    static $filters = ["escape" => 15];
    static $functions = ["attach_library" => 15];

    try {
      $this->sandbox->checkSecurity(
            ['include'],
            ['escape'],
            ['attach_library']
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
