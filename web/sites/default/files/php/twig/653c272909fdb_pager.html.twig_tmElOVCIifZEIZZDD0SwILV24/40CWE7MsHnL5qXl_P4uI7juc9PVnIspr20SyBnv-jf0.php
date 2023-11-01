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
 * Core/themes/olivero/templates/navigation/pager.html.twig .
 */
class __TwigTemplate_0776c90c281907220d53a78013c960d3 extends Template {
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
    // Line 33.
    if (($context["items"] ?? NULL)) {
      // Line 34.
      echo "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? NULL), 34, $this->source), "html", NULL, TRUE);
      echo "\">
    <h4 id=\"";
      // Line 35.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? NULL), 35, $this->source), "html", NULL, TRUE);
      echo "\" class=\"visually-hidden\">";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
      echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
      // Line 38.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "first", [], "any", FALSE, FALSE, TRUE, 38)) {
        // Line 39.
        echo "        ";
        ob_start(function () {
          return '';
        });
        // Line 40.
        echo "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
        // Line 41.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "first", [], "any", FALSE, FALSE, TRUE, 41), "href", [], "any", FALSE, FALSE, TRUE, 41), 41, $this->source), "html", NULL, TRUE);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "first", [], "any", FALSE, FALSE, TRUE, 41), "attributes", [], "any", FALSE, FALSE, TRUE, 41), 41, $this->source), "href", "title"), "addClass", [0 => "pager__link"], "method", FALSE, FALSE, TRUE, 41), 41, $this->source), "html", NULL, TRUE);
        echo ">
              <span class=\"visually-hidden\">";
        // Line 42.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
        echo "</span>
              ";
        // Line 43.
        $this->loadTemplate("@olivero/../images/pager-first.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 43)->display($context);
        // Line 44.
        echo "            </a>
          </li>
        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // Line 39.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        // Line 47.
        echo "      ";
      }
      // Line 48.
      echo "
      ";
      // Line 50.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "previous", [], "any", FALSE, FALSE, TRUE, 50)) {
        // Line 51.
        echo "        ";
        ob_start(function () {
          return '';
        });
        // Line 52.
        echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
        // Line 53.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "previous", [], "any", FALSE, FALSE, TRUE, 53), "href", [], "any", FALSE, FALSE, TRUE, 53), 53, $this->source), "html", NULL, TRUE);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
        echo "\" rel=\"prev\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "previous", [], "any", FALSE, FALSE, TRUE, 53), "attributes", [], "any", FALSE, FALSE, TRUE, 53), 53, $this->source), "href", "title", "rel"), "addClass", [0 => "pager__link"], "method", FALSE, FALSE, TRUE, 53), 53, $this->source), "html", NULL, TRUE);
        echo ">
              <span class=\"visually-hidden\">";
        // Line 54.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
        echo "</span>
              ";
        // Line 55.
        $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 55)->display($context);
        // Line 56.
        echo "            </a>
          </li>
        ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // Line 51.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
        // Line 59.
        echo "      ";
      }
      // Line 60.
      echo "
      ";
      // Line 62.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? NULL), "previous", [], "any", FALSE, FALSE, TRUE, 62)) {
        // Line 63.
        echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
      }
      // Line 65.
      echo "
      ";
      // Line 67.
      echo "      ";
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "pages", [], "any", FALSE, FALSE, TRUE, 67));
      foreach ($context['_seq'] as $context["key"] => $context["item"]) {
        // Line 68.
        echo "        ";
        ob_start(function () {
          return '';
        });
        // Line 69.
        echo "          <li class=\"pager__item";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? NULL) == $context["key"])) ? (" pager__item--active") : ("")));
        echo " pager__item--number\">
            ";
        // Line 70.
        if ((($context["current"] ?? NULL) == $context["key"])) {
          // Line 71.
          echo "              ";
          $context["title"] = t("Current page");
          // Line 72.
          echo "            ";
        }
        else {
          // Line 73.
          echo "              ";
          $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
          // Line 74.
          echo "            ";
        }
        // Line 75.
        echo "            ";
        if ((($context["current"] ?? NULL) != $context["key"])) {
          // Line 76.
          echo "              <a href=\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", FALSE, FALSE, TRUE, 76), 76, $this->source), "html", NULL, TRUE);
          echo "\" title=\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? NULL), 76, $this->source), "html", NULL, TRUE);
          echo "\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", FALSE, FALSE, TRUE, 76), 76, $this->source), "href", "title"), "addClass", [0 => "pager__link", 1 => (((($context["current"] ?? NULL) == $context["key"])) ? (" is-active") : (""))], "method", FALSE, FALSE, TRUE, 76), 76, $this->source), "html", NULL, TRUE);
          echo ">
            ";
        }
        // Line 78.
        echo "            <span class=\"visually-hidden\">
              ";
        // Line 79.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? NULL) == $context["key"])) ? (t("Current page")) : (t("Page"))));
        echo "
            </span>
            ";
        // Line 81.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 81, $this->source), "html", NULL, TRUE);
        echo "
            ";
        // Line 82.
        if ((($context["current"] ?? NULL) != $context["key"])) {
          // Line 83.
          echo "              </a>
            ";
        }
        // Line 85.
        echo "          </li>
        ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // Line 68.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
        // Line 87.
        echo "      ";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
      // Line 88.
      echo "
      ";
      // Line 90.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? NULL), "next", [], "any", FALSE, FALSE, TRUE, 90)) {
        // Line 91.
        echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
      }
      // Line 93.
      echo "
      ";
      // Line 95.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "next", [], "any", FALSE, FALSE, TRUE, 95)) {
        // Line 96.
        echo "        ";
        ob_start(function () {
          return '';
        });
        // Line 97.
        echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
        // Line 98.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "next", [], "any", FALSE, FALSE, TRUE, 98), "href", [], "any", FALSE, FALSE, TRUE, 98), 98, $this->source), "html", NULL, TRUE);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
        echo "\" rel=\"next\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "next", [], "any", FALSE, FALSE, TRUE, 98), "attributes", [], "any", FALSE, FALSE, TRUE, 98), 98, $this->source), "href", "title", "rel"), "addClass", [0 => "pager__link"], "method", FALSE, FALSE, TRUE, 98), 98, $this->source), "html", NULL, TRUE);
        echo ">
              <span class=\"visually-hidden\">";
        // Line 99.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
        echo "</span>
              ";
        // Line 100.
        $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 100)->display($context);
        // Line 101.
        echo "            </a>
          </li>
        ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // Line 96.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
        // Line 104.
        echo "      ";
      }
      // Line 105.
      echo "
      ";
      // Line 107.
      echo "      ";
      if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "last", [], "any", FALSE, FALSE, TRUE, 107)) {
        // Line 108.
        echo "        ";
        ob_start(function () {
          return '';
        });
        // Line 109.
        echo "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
        // Line 110.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "last", [], "any", FALSE, FALSE, TRUE, 110), "href", [], "any", FALSE, FALSE, TRUE, 110), 110, $this->source), "html", NULL, TRUE);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? NULL), "last", [], "any", FALSE, FALSE, TRUE, 110), "attributes", [], "any", FALSE, FALSE, TRUE, 110), 110, $this->source), "href", "title"), "addClass", [0 => "pager__link"], "method", FALSE, FALSE, TRUE, 110), 110, $this->source), "html", NULL, TRUE);
        echo ">
              <span class=\"visually-hidden\">";
        // Line 111.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
        echo "</span>
              ";
        // Line 112.
        $this->loadTemplate("@olivero/../images/pager-first.svg", "core/themes/olivero/templates/navigation/pager.html.twig", 112)->display($context);
        // Line 113.
        echo "            </a>
          </li>
        ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // Line 108.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_4_));
        // Line 116.
        echo "      ";
      }
      // Line 117.
      echo "    </ul>
  </nav>
";
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/navigation/pager.html.twig";
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
    return [287 => 117, 284 => 116, 282 => 108, 277 => 113, 275 => 112, 271 => 111, 263 => 110, 260 => 109, 257 => 108, 254 => 107, 251 => 105, 248 => 104, 246 => 96, 241 => 101, 239 => 100, 235 => 99, 227 => 98, 224 => 97, 221 => 96, 218 => 95, 215 => 93, 211 => 91, 208 => 90, 205 => 88, 199 => 87, 197 => 68, 193 => 85, 189 => 83, 187 => 82, 183 => 81, 178 => 79, 175 => 78, 165 => 76, 162 => 75, 159 => 74, 156 => 73, 153 => 72, 150 => 71, 148 => 70, 143 => 69, 140 => 68, 135 => 67, 132 => 65, 128 => 63, 125 => 62, 122 => 60, 119 => 59, 117 => 51, 112 => 56, 110 => 55, 106 => 54, 98 => 53, 95 => 52, 92 => 51, 89 => 50, 86 => 48, 83 => 47, 81 => 39, 76 => 44, 74 => 43, 70 => 42, 62 => 41, 59 => 40, 56 => 39, 53 => 38, 46 => 35, 41 => 34, 39 => 33];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/navigation/pager.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/pager.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 33, "apply" => 39, "include" => 43, "for" => 67, "set" => 71];
    static $filters = ["escape" => 34, "t" => 35, "without" => 41, "spaceless" => 39];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if', 'apply', 'include', 'for', 'set'],
            ['escape', 't', 'without', 'spaceless'],
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
