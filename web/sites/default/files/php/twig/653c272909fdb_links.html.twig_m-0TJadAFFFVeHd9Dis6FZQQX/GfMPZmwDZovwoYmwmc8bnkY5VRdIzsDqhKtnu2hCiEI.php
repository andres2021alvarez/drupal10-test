<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/modules/system/templates/links.html.twig .
 */
class __TwigTemplate_1251d3c40bf9b47fa0fc0bee8e3c9500 extends Template {
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
    // Line 36.
    if (($context["links"] ?? NULL)) {
      // Line 37.
      if (($context["heading"] ?? NULL)) {
        // Line 38.
        if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "level", [], "any", FALSE, FALSE, TRUE, 38)) {
          // Line 39.
          echo "<";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "level", [], "any", FALSE, FALSE, TRUE, 39), 39, $this->source), "html", NULL, TRUE);
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 39), 39, $this->source), "html", NULL, TRUE);
          echo ">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "text", [], "any", FALSE, FALSE, TRUE, 39), 39, $this->source), "html", NULL, TRUE);
          echo "</";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "level", [], "any", FALSE, FALSE, TRUE, 39), 39, $this->source), "html", NULL, TRUE);
          echo ">";
        }
        else {
          // Line 41.
          echo "<h2";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 41), 41, $this->source), "html", NULL, TRUE);
          echo ">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? NULL), "text", [], "any", FALSE, FALSE, TRUE, 41), 41, $this->source), "html", NULL, TRUE);
          echo "</h2>";
        }
      }
      // Line 44.
      echo "<ul";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 44, $this->source), "html", NULL, TRUE);
      echo ">";
      // Line 45.
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["links"] ?? NULL));
      foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
        // Line 46.
        echo "<li";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", FALSE, FALSE, TRUE, 46), 46, $this->source), "html", NULL, TRUE);
        echo ">";
        // Line 47.
        if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", FALSE, FALSE, TRUE, 47)) {
          // Line 48.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", FALSE, FALSE, TRUE, 48), 48, $this->source), "html", NULL, TRUE);
          // Line 49.
        }
        elseif (twig_get_attribute($this->env, $this->source,
        $context["item"], "text_attributes", [], "any", FALSE, FALSE, TRUE, 49)) {
          // Line 50.
          echo "<span";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source), "html", NULL, TRUE);
          echo ">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source), "html", NULL, TRUE);
          echo "</span>";
        }
        else {
          // Line 52.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", FALSE, FALSE, TRUE, 52), 52, $this->source), "html", NULL, TRUE);
        }
        // Line 54.
        echo "</li>";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 56.
      echo "</ul>";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/links.html.twig";
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
    return [97 => 56, 91 => 54, 88 => 52, 81 => 50, 79 => 49, 77 => 48, 75 => 47, 71 => 46, 67 => 45, 63 => 44, 55 => 41, 45 => 39, 43 => 38, 41 => 37, 39 => 36];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/links.html.twig", "/var/www/html/web/core/modules/system/templates/links.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 36, "for" => 45];
    static $filters = ["escape" => 39];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if', 'for'],
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
