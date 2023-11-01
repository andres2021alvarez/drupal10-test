<?php

use Drupal\Component\Utility\Html;
use Twig\Environment;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/navigation/menu--primary-menu.html.twig .
 */
class __TwigTemplate_7b246a29d408b8b73b3b18ffdeb809a6 extends Template {
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
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-primary"), "html", NULL, TRUE);
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
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? NULL), ($context["attributes"] ?? NULL), 0, "primary-menu-item-"], 32, $context, $this->getSourceContext()));
    echo "

";
  }

  /**
   * Line 34.
   */
  public function macro_menu_links($__items__ = NULL, $__attributes__ = NULL, $__menu_level__ = NULL, $__aria_id__ = NULL, ...$__varargs__) {
    $macros = $this->macros;
    $context = $this->env->mergeGlobals([
      "items" => $__items__,
      "attributes" => $__attributes__,
      "menu_level" => $__menu_level__,
      "aria_id" => $__aria_id__,
      "varargs" => $__varargs__,
    ]);

    $blocks = [];

    ob_start(function () {
      return '';
    });
    try {
      // Line 35.
      echo "  ";
      $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? NULL) + 1));
      // Line 36.
      echo "  ";
      $context["drupal_selector_primary_nav_level"] = (((($context["menu_level"] ?? NULL) <= 1)) ? (("primary-nav-menu--level-" . (($context["menu_level"] ?? NULL) + 1))) : (FALSE));
      // Line 37.
      echo "  ";
      $context["is_top_level_menu"] = (($context["menu_level"] ?? NULL) == 0);
      // Line 38.
      echo "  ";
      $macros["menus"] = $this;
      // Line 39.
      echo "  ";
      if (($context["items"] ?? NULL)) {
        // Line 40.
        echo "
    ";
        // Line 45.
        echo "    ";
        if ((($context["menu_level"] ?? NULL) == 1)) {
          // Line 46.
          echo "      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
        }
        // Line 48.
        echo "
    <ul ";
        // Line 49.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "primary-nav__menu", 1 => ($context["primary_nav_level"] ?? NULL)], "method", FALSE, FALSE, TRUE, 49), "setAttribute", [0 => "data-drupal-selector", 1 => ($context["drupal_selector_primary_nav_level"] ?? NULL)], "method", FALSE, FALSE, TRUE, 49), 49, $this->source), "html", NULL, TRUE);
        echo ">
      ";
        // Line 50.
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "removeClass", [0 => ($context["primary_nav_level"] ?? NULL)], "method", FALSE, FALSE, TRUE, 50);
        // Line 51.
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? NULL));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => TRUE,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
          $length = count($context['_seq']);
          $context['loop']['revindex0'] = $length - 1;
          $context['loop']['revindex'] = $length;
          $context['loop']['length'] = $length;
          $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
          // Line 52.
          echo "
        ";
          // Line 53.
          if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 53), "isRouted", [], "any", FALSE, FALSE, TRUE, 53) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 53), "routeName", [], "any", FALSE, FALSE, TRUE, 53) == "<nolink>"))) {
            // Line 54.
            echo "          ";
            $context["menu_item_type"] = "nolink";
            // Line 55.
            echo "        ";
          }
          elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 55), "isRouted", [], "any", FALSE, FALSE, TRUE, 55) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 55), "routeName", [], "any", FALSE, FALSE, TRUE, 55) == "<button>"))) {
            // Line 56.
            echo "          ";
            $context["menu_item_type"] = "button";
            // Line 57.
            echo "        ";
          }
          else {
            // Line 58.
            echo "          ";
            $context["menu_item_type"] = "link";
            // Line 59.
            echo "        ";
          }
          // Line 60.
          echo "
        ";
          // Line 61.
          $context["item_classes"] = [
            0 => "primary-nav__menu-item",
          // Line 63.
            1 => ("primary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(
          ($context["menu_item_type"] ?? NULL), 63, $this->source)),
          // Line 64.
            2 => ("primary-nav__menu-item--level-" . (
          ($context["menu_level"] ?? NULL) + 1)),
          // Line 65.
            3 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "in_active_trail", [], "any", FALSE, FALSE, TRUE, 65)) ? ("primary-nav__menu-item--active-trail") : ("")),
          // Line 66.
            4 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 66)) ? ("primary-nav__menu-item--has-children") : ("")),
          ];
          // Line 69.
          echo "
        ";
          // Line 70.
          $context["link_classes"] = [
            0 => "primary-nav__menu-link",
          // Line 72.
            1 => ("primary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(
          ($context["menu_item_type"] ?? NULL), 72, $this->source)),
          // Line 73.
            2 => ("primary-nav__menu-link--level-" . (
          ($context["menu_level"] ?? NULL) + 1)),
          // Line 74.
            3 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "in_active_trail", [], "any", FALSE, FALSE, TRUE, 74)) ? ("primary-nav__menu-link--active-trail") : ("")),
          // Line 75.
            4 => ((twig_get_attribute($this->env, $this->source,
          $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 75)) ? ("primary-nav__menu-link--has-children") : ("")),
          ];
          // Line 78.
          echo "
        <li";
          // Line 79.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", FALSE, FALSE, TRUE, 79), "addClass", [0 => ($context["item_classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 79), "setAttribute", [0 => "data-drupal-selector", 1 => (((($context["is_top_level_menu"] ?? NULL) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 79))) ? ("primary-nav-menu-item-has-children") : (FALSE))], "method", FALSE, FALSE, TRUE, 79), 79, $this->source), "html", NULL, TRUE);
          echo ">
          ";
          // Line 85.
          echo "          ";
          $context["aria_id"] = Html::getId(($this->sandbox->ensureToStringAllowed(($context["aria_id"] ?? NULL), 85, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", FALSE, FALSE, TRUE, 85), 85, $this->source)));
          // Line 86.
          echo "          ";
          ob_start(function () {
            return '';
          });
          // Line 87.
          echo "            <span class=\"primary-nav__menu-link-inner primary-nav__menu-link-inner--level-";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? NULL) + 1), "html", NULL, TRUE);
          echo "\">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", FALSE, FALSE, TRUE, 87), 87, $this->source), "html", NULL, TRUE);
          echo "</span>
          ";
          $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
          // Line 89.
          echo "
          ";
          // Line 90.
          if (((($context["menu_item_type"] ?? NULL) == "link") || (($context["menu_item_type"] ?? NULL) == "nolink"))) {
            // Line 91.
            echo "            ";
            // Line 92.
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? NULL) == "link")) ? (($context["link_title"] ?? NULL)) : (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", FALSE, FALSE, TRUE, 91))), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 91), 91, $this->source), [
              "class" =>
              ($context["link_classes"] ?? NULL),
            // Line 93.
              "data-drupal-selector" => ((
            ($context["is_top_level_menu"] ?? NULL)) ? ("primary-nav-menu-link-has-children") : (FALSE)),
            ]), "html", NULL, TRUE);
            // Line 95.
            echo "

            ";
            // Line 97.
            if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 97)) {
              // Line 98.
              echo "              ";
              // Line 103.
              echo "              ";
              if (($context["is_top_level_menu"] ?? NULL)) {
                // Line 104.
                echo "                ";
                // Line 107.
                $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute([
                  "class" => "primary-nav__button-toggle",
                  "data-drupal-selector" => "primary-nav-submenu-toggle-button",
                  "aria-controls" =>
                  ($context["aria_id"] ?? NULL),
                  "aria-expanded" => "false",
                  "aria-hidden" => "true",
                  "tabindex" => "-1",
                ]);
                // Line 112.
                echo "
                <button";
                // Line 113.
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggle_button_attributes"] ?? NULL), 113, $this->source), "html", NULL, TRUE);
                echo ">
                  <span class=\"visually-hidden\">";
                // Line 114.
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", FALSE, FALSE, TRUE, 114)]));
                echo "</span>
                  <span class=\"icon--menu-toggle\"></span>
                </button>
              ";
              }
              // Line 118.
              echo "
              ";
              // Line 119.
              $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 119);
              // Line 120.
              echo "              ";
              echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 120), ($context["attributes"] ?? NULL), (($context["menu_level"] ?? NULL) + 1), ($context["aria_id"] ?? NULL)], 120, $context, $this->getSourceContext()));
              echo "
            ";
            }
            // Line 122.
            echo "
          ";
            // Line 123.
          }
          elseif ((
          ($context["menu_item_type"] ?? NULL) == "button")) {
            // Line 124.
            echo "
            ";
            // Line 125.
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? NULL), 125, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", FALSE, FALSE, TRUE, 125), 125, $this->source), [
            // Line 126.
              "class" =>
              ($context["link_classes"] ?? NULL),
            // Line 127.
              "aria-controls" => (((
            ($context["is_top_level_menu"] ?? NULL) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 127))) ? (($context["aria_id"] ?? NULL)) : (FALSE)),
            // Line 128.
              "aria-expanded" => (((
            ($context["is_top_level_menu"] ?? NULL) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 128))) ? ("false") : (FALSE)),
            // Line 129.
              "data-drupal-selector" => (((
            ($context["is_top_level_menu"] ?? NULL) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 129))) ? ("primary-nav-submenu-toggle-button") : (FALSE)),
            ]), "html", NULL, TRUE);
            // Line 130.
            echo "

            ";
            // Line 132.
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? NULL)], "method", FALSE, FALSE, TRUE, 132);
            // Line 133.
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", FALSE, FALSE, TRUE, 133), ($context["attributes"] ?? NULL), (($context["menu_level"] ?? NULL) + 1), ($context["aria_id"] ?? NULL)], 133, $context, $this->getSourceContext()));
            echo "
          ";
          }
          // Line 135.
          echo "        </li>
      ";
          ++$context['loop']['index0'];
          ++$context['loop']['index'];
          $context['loop']['first'] = FALSE;
          if (isset($context['loop']['length'])) {
            --$context['loop']['revindex0'];
            --$context['loop']['revindex'];
            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
          }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 137.
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
    return "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig";
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
    return [279 => 137, 264 => 135, 258 => 133, 256 => 132, 252 => 130, 250 => 129, 249 => 128, 248 => 127, 247 => 126, 246 => 125, 243 => 124, 241 => 123, 238 => 122, 232 => 120, 230 => 119, 227 => 118, 220 => 114, 216 => 113, 213 => 112, 211 => 107, 209 => 104, 206 => 103, 204 => 98, 202 => 97, 198 => 95, 196 => 93, 195 => 92, 193 => 91, 191 => 90, 188 => 89, 180 => 87, 177 => 86, 174 => 85, 170 => 79, 167 => 78, 165 => 75, 164 => 74, 163 => 73, 162 => 72, 161 => 70, 158 => 69, 156 => 66, 155 => 65, 154 => 64, 153 => 63, 152 => 61, 149 => 60, 146 => 59, 143 => 58, 140 => 57, 137 => 56, 134 => 55, 131 => 54, 129 => 53, 126 => 52, 108 => 51, 106 => 50, 102 => 49, 99 => 48, 95 => 46, 92 => 45, 89 => 40, 86 => 39, 83 => 38, 80 => 37, 77 => 36, 74 => 35, 58 => 34, 51 => 32, 49 => 31, 46 => 26, 44 => 25, 39 => 23];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--primary-menu.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["import" => 25, "set" => 31, "macro" => 34, "if" => 39, "for" => 51];
    static $filters = ["escape" => 23, "clean_id" => 85, "t" => 114];
    static $functions = ["attach_library" => 23, "link" => 91, "create_attribute" => 104];

    try {
      $this->sandbox->checkSecurity(
            ['import', 'set', 'macro', 'if', 'for'],
            ['escape', 'clean_id', 't'],
            ['attach_library', 'link', 'create_attribute']
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
