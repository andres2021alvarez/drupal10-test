<?php

use Twig\Environment;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/navigation/menu--toolbar.html.twig .
 */
class __TwigTemplate_09f2f6fe2ba11a9807aa89e62a5d885a extends Template {
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
    // Line 24.
    $macros["menus"] = $this->macros["menus"] = $this;
    // Line 25.
    echo "
";
    // Line 30.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? NULL), ($context["attributes"] ?? NULL), 0], 30, $context, $this->getSourceContext()));
    echo "

";
  }

  /**
   * Line 32.
   */
  public function macro_menu_links($__items__ = NULL, $__attributes__ = NULL, $__menu_level__ = NULL, ...$__varargs__) {
    $macros = $this->macros;
    $context = $this->env->mergeGlobals([
      "items" => $__items__,
      "attributes" => $__attributes__,
      "menu_level" => $__menu_level__,
      "varargs" => $__varargs__,
    ]);

    $blocks = [];

    ob_start(function () {
      return '';
    });
    try {
      // Line 33.
      echo "  ";
      $macros["menus"] = $this;
      // Line 34.
      echo "  ";
      if (($context["items"] ?? NULL)) {
        // Line 35.
        echo "    ";
        if ((($context["menu_level"] ?? NULL) == 0)) {
          // Line 36.
          echo "      <ul";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "toolbar-menu", 1 => "claro-toolbar-menu"], "method", FALSE, FALSE, TRUE, 36), 36, $this->source), "html", NULL, TRUE);
          echo ">
    ";
        }
        else {
          // Line 38.
          echo "      <ul class=\"toolbar-menu\">
    ";
        }
        // Line 40.
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? NULL));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
          // Line 41.
          echo "      ";
          // Line 42.
          $context["classes"] = [
            0 => "menu-item",
          // Line 44.
            1 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "is_expanded", [], "any", FALSE, FALSE, TRUE, 44)) ? ("menu-item--expanded") : ("")),
          // Line 45.
            2 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "is_collapsed", [], "any", FALSE, FALSE, TRUE, 45)) ? ("menu-item--collapsed") : ("")),
          // Line 46.
            3 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "in_active_trail", [], "any", FALSE, FALSE, TRUE, 46)) ? ("menu-item--active-trail") : ("")),
          ];
          // Line 49.
          echo "      <li";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", FALSE, FALSE, TRUE, 49), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 49), 49, $this->source), "html", NULL, TRUE);
          echo ">
        ";
          // Line 50.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 50), 50, $this->source)), "html", NULL, TRUE);
          echo "
        ";
          // Line 51.
          if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 51)) {
            // Line 52.
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 52), ($context["attributes"] ?? NULL), (($context["menu_level"] ?? NULL) + 1)], 52, $context, $this->getSourceContext()));
            echo "
        ";
          }
          // Line 54.
          echo "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 56.
        echo "    </ul>
  ";
      }

      return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
    } finally {
      ob_end_clean();
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/navigation/menu--toolbar.html.twig";
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
    return [121 => 56, 114 => 54, 108 => 52, 106 => 51, 102 => 50, 97 => 49, 95 => 46, 94 => 45, 93 => 44, 92 => 42, 90 => 41, 85 => 40, 81 => 38, 75 => 36, 72 => 35, 69 => 34, 66 => 33, 51 => 32, 44 => 30, 41 => 25, 39 => 24];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/navigation/menu--toolbar.html.twig", "/var/www/html/web/core/themes/claro/templates/navigation/menu--toolbar.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["import" => 24, "macro" => 32, "if" => 34, "for" => 40, "set" => 42];
    static $filters = ["escape" => 36];
    static $functions = ["link" => 50];

    try {
      $this->sandbox->checkSecurity(
            ['import', 'macro', 'if', 'for', 'set'],
            ['escape'],
            ['link']
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
