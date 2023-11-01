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
 * Core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig .
 */
class __TwigTemplate_cdd434d3babe4feea3da18b93e98e90b extends Template {
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
    // Line 23.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-secondary"), "html", NULL, TRUE);
    echo "

";
    // Line 25.
    $macros["menus"] = $this->macros["menus"] = $this;
    // Line 26.
    echo "
";
    // Line 31.
    $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "menu"], "method", FALSE, FALSE, TRUE, 31);
    // Line 32.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? NULL), ($context["attributes"] ?? NULL), 0], 32, $context, $this->getSourceContext()));
    echo "

";
  }

  /**
   * Line 34.
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
      // Line 35.
      echo "  ";
      $context["secondary_nav_level"] = ("secondary-nav__menu--level-" . (($context["menu_level"] ?? NULL) + 1));
      // Line 36.
      echo "  ";
      $macros["menus"] = $this;
      // Line 37.
      echo "  ";
      if (($context["items"] ?? NULL)) {
        // Line 38.
        echo "    <ul";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "secondary-nav__menu", 1 => ($context["secondary_nav_level"] ?? NULL)], "method", FALSE, FALSE, TRUE, 38), 38, $this->source), "html", NULL, TRUE);
        echo ">
      ";
        // Line 39.
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "removeClass", [0 => ($context["secondary_nav_level"] ?? NULL)], "method", FALSE, FALSE, TRUE, 39);
        // Line 40.
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? NULL));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
          // Line 41.
          echo "
        ";
          // Line 42.
          if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 42), "isRouted", [], "any", FALSE, FALSE, TRUE, 42) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 42), "routeName", [], "any", FALSE, FALSE, TRUE, 42) == "<nolink>"))) {
            // Line 43.
            echo "          ";
            $context["menu_item_type"] = "nolink";
            // Line 44.
            echo "        ";
          }
          elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 44), "isRouted", [], "any", FALSE, FALSE, TRUE, 44) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 44), "routeName", [], "any", FALSE, FALSE, TRUE, 44) == "<button>"))) {
            // Line 45.
            echo "          ";
            $context["menu_item_type"] = "button";
            // Line 46.
            echo "        ";
          }
          else {
            // Line 47.
            echo "          ";
            $context["menu_item_type"] = "link";
            // Line 48.
            echo "        ";
          }
          // Line 49.
          echo "
        ";
          // Line 50.
          $context["item_classes"] = [
            0 => "secondary-nav__menu-item",
          // Line 52.
            1 => ("secondary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(
          ($context["menu_item_type"] ?? NULL), 52, $this->source)),
          // Line 53.
            2 => ("secondary-nav__menu-item--level-" . (
          ($context["menu_level"] ?? NULL) + 1)),
          // Line 54.
            3 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "in_active_trail", [], "any", FALSE, FALSE, TRUE, 54)) ? ("secondary-nav__menu-item--active-trail") : ("")),
          // Line 55.
            4 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 55)) ? ("secondary-nav__menu-item--has-children") : ("")),
          ];
          // Line 58.
          echo "
        ";
          // Line 59.
          $context["link_classes"] = [
            0 => "secondary-nav__menu-link",
          // Line 61.
            1 => ("secondary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(
          ($context["menu_item_type"] ?? NULL), 61, $this->source)),
          // Line 62.
            2 => ("secondary-nav__menu-link--level-" . (
          ($context["menu_level"] ?? NULL) + 1)),
          // Line 63.
            3 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "in_active_trail", [], "any", FALSE, FALSE, TRUE, 63)) ? ("secondary-nav__menu-link--active-trail") : ("")),
          // Line 64.
            4 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 64)) ? ("secondary-nav__menu-link--has-children") : ("")),
          ];
          // Line 67.
          echo "
        <li";
          // Line 68.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", FALSE, FALSE, TRUE, 68), "addClass", [0 => ($context["item_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 68), 68, $this->source), "html", NULL, TRUE);
          echo ">
          ";
          // Line 69.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", FALSE, FALSE, TRUE, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 69), 69, $this->source), ["class" => ($context["link_classes"] ?? NULL)]), "html", NULL, TRUE);
          echo "

          ";
          // Line 71.
          if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 71)) {
            // Line 72.
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 72), ($context["attributes"] ?? NULL), (($context["menu_level"] ?? NULL) + 1)], 72, $context, $this->getSourceContext()));
            echo "
          ";
          }
          // Line 74.
          echo "        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 76.
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
    return "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig";
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
    return [162 => 76, 155 => 74, 149 => 72, 147 => 71, 142 => 69, 138 => 68, 135 => 67, 133 => 64, 132 => 63, 131 => 62, 130 => 61, 129 => 59, 126 => 58, 124 => 55, 123 => 54, 122 => 53, 121 => 52, 120 => 50, 117 => 49, 114 => 48, 111 => 47, 108 => 46, 105 => 45, 102 => 44, 99 => 43, 97 => 42, 94 => 41, 89 => 40, 87 => 39, 82 => 38, 79 => 37, 76 => 36, 73 => 35, 58 => 34, 51 => 32, 49 => 31, 46 => 26, 44 => 25, 39 => 23];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["import" => 25, "set" => 31, "macro" => 34, "if" => 37, "for" => 40];
    static $filters = ["escape" => 23];
    static $functions = ["attach_library" => 23, "link" => 69];

    try {
      $this->sandbox->checkSecurity(
            ['import', 'set', 'macro', 'if', 'for'],
            ['escape'],
            ['attach_library', 'link']
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
