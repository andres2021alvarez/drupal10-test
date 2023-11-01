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
 * Core/themes/claro/templates/classy/navigation/toolbar.html.twig .
 */
class __TwigTemplate_db75150adb741f785a4f058b6fb3f4e6 extends Template {
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
    echo "<div";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => "toolbar"], "method", FALSE, FALSE, TRUE, 23), 23, $this->source), "html", NULL, TRUE);
    echo ">
  <nav";
    // Line 24.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? NULL), "addClass", [0 => "toolbar-bar", 1 => "clearfix"], "method", FALSE, FALSE, TRUE, 24), 24, $this->source), "html", NULL, TRUE);
    echo ">
    <h2 class=\"visually-hidden\">";
    // Line 25.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? NULL), 25, $this->source), "html", NULL, TRUE);
    echo "</h2>
    ";
    // Line 26.
    $context['_parent'] = $context;
    $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? NULL));
    foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
      // Line 27.
      echo "      ";
      $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? NULL)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? NULL) : NULL);
      // Line 28.
      echo "      <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", FALSE, FALSE, TRUE, 28), "addClass", [0 => "toolbar-tab"], "method", FALSE, FALSE, TRUE, 28), 28, $this->source), "html", NULL, TRUE);
      echo ">
        ";
      // Line 29.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", FALSE, FALSE, TRUE, 29), 29, $this->source), "html", NULL, TRUE);
      echo "
        ";
      // Line 30.
      ob_start(function () {
        return '';
      });
      // Line 31.
      echo "          <div";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? NULL), "attributes", [], "any", FALSE, FALSE, TRUE, 31), 31, $this->source), "html", NULL, TRUE);
      echo ">
            ";
      // Line 32.
      if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? NULL), "label", [], "any", FALSE, FALSE, TRUE, 32)) {
        // Line 33.
        echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? NULL), "label", [], "any", FALSE, FALSE, TRUE, 33), 33, $this->source), "html", NULL, TRUE);
        echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
        // Line 34.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? NULL), "label", [], "any", FALSE, FALSE, TRUE, 34), 34, $this->source), "html", NULL, TRUE);
        echo "</h3>
            ";
      }
      else {
        // Line 36.
        echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
      }
      // Line 38.
      echo "            ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? NULL), "links", [], "any", FALSE, FALSE, TRUE, 38), 38, $this->source), "html", NULL, TRUE);
      echo "
            </nav>
          </div>
        ";
      $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
      // Line 30.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_2_));
      // Line 42.
      echo "      </div>
    ";
    }
    $_parent = $context['_parent'];
    unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
    $context = array_intersect_key($context, $_parent) + $_parent;
    // Line 44.
    echo "  </nav>
  ";
    // Line 45.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? NULL), 45, $this->source), "html", NULL, TRUE);
    echo "
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/classy/navigation/toolbar.html.twig";
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
    return [111 => 45, 108 => 44, 101 => 42, 99 => 30, 91 => 38, 87 => 36, 82 => 34, 77 => 33, 75 => 32, 70 => 31, 68 => 30, 64 => 29, 59 => 28, 56 => 27, 52 => 26, 48 => 25, 44 => 24, 39 => 23];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/classy/navigation/toolbar.html.twig", "/var/www/html/web/core/themes/claro/templates/classy/navigation/toolbar.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["for" => 26, "set" => 27, "apply" => 30, "if" => 32];
    static $filters = ["escape" => 23, "spaceless" => 30];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['for', 'set', 'apply', 'if'],
            ['escape', 'spaceless'],
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
