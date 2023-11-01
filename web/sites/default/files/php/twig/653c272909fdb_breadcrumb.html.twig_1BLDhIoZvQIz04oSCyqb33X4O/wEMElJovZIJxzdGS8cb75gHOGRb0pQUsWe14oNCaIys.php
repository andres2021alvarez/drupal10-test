<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/navigation/breadcrumb.html.twig .
 */
class __TwigTemplate_84f9f55810ec053233d22d03612ad323 extends Template {
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
    // Line 10.
    if (($context["breadcrumb"] ?? NULL)) {
      // Line 11.
      echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
      // Line 12.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
      echo "</h2>
    <div class=\"breadcrumb__content\">
      <ol class=\"breadcrumb__list\">
        ";
      // Line 15.
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? NULL));
      foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
        // Line 16.
        echo "          <li class=\"breadcrumb__item\">
            ";
        // Line 17.
        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 17)) {
          // Line 18.
          echo "              <a href=\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 18), 18, $this->source), "html", NULL, TRUE);
          echo "\" class=\"breadcrumb__link\">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", FALSE, FALSE, TRUE, 18), 18, $this->source), "html", NULL, TRUE);
          echo "</a>
            ";
        }
        else {
          // Line 20.
          echo "              ";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", FALSE, FALSE, TRUE, 20), 20, $this->source), "html", NULL, TRUE);
          echo "
            ";
        }
        // Line 22.
        echo "          </li>
        ";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 24.
      echo "      </ol>
    </div>
  </nav>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/navigation/breadcrumb.html.twig";
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
    return [80 => 24, 73 => 22, 67 => 20, 59 => 18, 57 => 17, 54 => 16, 50 => 15, 44 => 12, 41 => 11, 39 => 10];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/breadcrumb.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 10, "for" => 15];
    static $filters = ["t" => 12, "escape" => 18];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if', 'for'],
            ['t', 'escape'],
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
