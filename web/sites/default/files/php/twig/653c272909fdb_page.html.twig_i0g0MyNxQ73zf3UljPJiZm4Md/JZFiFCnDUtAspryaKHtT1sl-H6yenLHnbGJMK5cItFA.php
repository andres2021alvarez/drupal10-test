<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/olivero/templates/layout/page.html.twig .
 */
class __TwigTemplate_421e2c49b82c005693398eac1d302f3e extends Template {
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
    // Line 48.
    echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
    // Line 52.
    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "header", [], "any", FALSE, FALSE, TRUE, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "primary_menu", [], "any", FALSE, FALSE, TRUE, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "secondary_menu", [], "any", FALSE, FALSE, TRUE, 52))) {
      // Line 53.
      echo "      <header id=\"header\" class=\"site-header\" data-drupal-selector=\"site-header\" role=\"banner\">

        ";
      // Line 56.
      echo "        <div class=\"site-header__fixable\" data-drupal-selector=\"site-header-fixable\">
          <div class=\"site-header__initial\">
            <button class=\"sticky-header-toggle\" data-drupal-selector=\"sticky-header-toggle\" role=\"switch\" aria-controls=\"site-header__inner\" aria-label=\"";
      // Line 58.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sticky header"));
      echo "\" aria-checked=\"false\">
              <span class=\"sticky-header-toggle__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
      // Line 68.
      echo "          <div id=\"site-header__inner\" class=\"site-header__inner\" data-drupal-selector=\"site-header-inner\">
            <div class=\"container site-header__inner__container\">

              ";
      // Line 71.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "header", [], "any", FALSE, FALSE, TRUE, 71), 71, $this->source), "html", NULL, TRUE);
      echo "

              ";
      // Line 73.
      if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "primary_menu", [], "any", FALSE, FALSE, TRUE, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "secondary_menu", [], "any", FALSE, FALSE, TRUE, 73))) {
        // Line 74.
        echo "                <div class=\"mobile-buttons\" data-drupal-selector=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" data-drupal-selector=\"mobile-nav-button\" aria-label=\"";
        // Line 75.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Menu"));
        echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
        // Line 76.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        echo "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-drupal-selector=\"header-nav\">
                  ";
        // Line 82.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "primary_menu", [], "any", FALSE, FALSE, TRUE, 82), 82, $this->source), "html", NULL, TRUE);
        echo "
                  ";
        // Line 83.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "secondary_menu", [], "any", FALSE, FALSE, TRUE, 83), 83, $this->source), "html", NULL, TRUE);
        echo "
                </div>
              ";
      }
      // Line 86.
      echo "            </div>
          </div>
        </div>
      </header>
    ";
    }
    // Line 91.
    echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <div class=\"main-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
    // Line 96.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "hero", [], "any", FALSE, FALSE, TRUE, 96), 96, $this->source), "html", NULL, TRUE);
    echo "
          <div class=\"main-content__container container\">
            ";
    // Line 98.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "highlighted", [], "any", FALSE, FALSE, TRUE, 98), 98, $this->source), "html", NULL, TRUE);
    echo "
            ";
    // Line 99.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "breadcrumb", [], "any", FALSE, FALSE, TRUE, 99), 99, $this->source), "html", NULL, TRUE);
    echo "

            ";
    // Line 101.
    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "sidebar", [], "any", FALSE, FALSE, TRUE, 101)) {
      // Line 102.
      echo "              <div class=\"sidebar-grid grid-full\">
                <main role=\"main\" class=\"site-main\">
                  ";
      // Line 104.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content_above", [], "any", FALSE, FALSE, TRUE, 104), 104, $this->source), "html", NULL, TRUE);
      echo "
                  ";
      // Line 105.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 105), 105, $this->source), "html", NULL, TRUE);
      echo "
                </main>

                ";
      // Line 108.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "sidebar", [], "any", FALSE, FALSE, TRUE, 108), 108, $this->source), "html", NULL, TRUE);
      echo "
              </div>
            ";
    }
    else {
      // Line 111.
      echo "              <main role=\"main\">
                ";
      // Line 112.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content_above", [], "any", FALSE, FALSE, TRUE, 112), 112, $this->source), "html", NULL, TRUE);
      echo "
                ";
      // Line 113.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content", [], "any", FALSE, FALSE, TRUE, 113), 113, $this->source), "html", NULL, TRUE);
      echo "
              </main>
            ";
    }
    // Line 116.
    echo "            ";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "content_below", [], "any", FALSE, FALSE, TRUE, 116), 116, $this->source), "html", NULL, TRUE);
    echo "
          </div>
        </div>
        <div class=\"social-bar\">
          ";
    // Line 120.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "social", [], "any", FALSE, FALSE, TRUE, 120), 120, $this->source), "html", NULL, TRUE);
    echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
    // Line 127.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "footer_top", [], "any", FALSE, FALSE, TRUE, 127), 127, $this->source), "html", NULL, TRUE);
    echo "
        ";
    // Line 128.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? NULL), "footer_bottom", [], "any", FALSE, FALSE, TRUE, 128), 128, $this->source), "html", NULL, TRUE);
    echo "
      </div>
    </footer>

    <div class=\"overlay\" data-drupal-selector=\"overlay\"></div>

  </div>
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/olivero/templates/layout/page.html.twig";
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
    return [190 => 128, 186 => 127, 176 => 120, 168 => 116, 162 => 113, 158 => 112, 155 => 111, 149 => 108, 143 => 105, 139 => 104, 135 => 102, 133 => 101, 128 => 99, 124 => 98, 119 => 96, 112 => 91, 105 => 86, 99 => 83, 95 => 82, 86 => 76, 82 => 75, 79 => 74, 77 => 73, 72 => 71, 67 => 68, 55 => 58, 51 => 56, 47 => 53, 45 => 52, 39 => 48];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/olivero/templates/layout/page.html.twig", "/var/www/html/web/core/themes/olivero/templates/layout/page.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 52];
    static $filters = ["t" => 58, "escape" => 71];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if'],
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
