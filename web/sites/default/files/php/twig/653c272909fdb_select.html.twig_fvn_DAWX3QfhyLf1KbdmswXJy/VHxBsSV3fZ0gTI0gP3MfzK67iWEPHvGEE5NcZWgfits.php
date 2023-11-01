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
 * Core/modules/system/templates/select.html.twig .
 */
class __TwigTemplate_aa14cf5fb8e5bd79efcfe0399d48c2d0 extends Template {
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
    // Line 15.
    ob_start(function () {
      return '';
    });
    // Line 16.
    echo "  <select";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 16, $this->source), "html", NULL, TRUE);
    echo ">
    ";
    // Line 17.
    $context['_parent'] = $context;
    $context['_seq'] = twig_ensure_traversable(($context["options"] ?? NULL));
    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
      // Line 18.
      echo "      ";
      if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", FALSE, FALSE, TRUE, 18) == "optgroup")) {
        // Line 19.
        echo "        <optgroup label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", FALSE, FALSE, TRUE, 19), 19, $this->source), "html", NULL, TRUE);
        echo "\">
          ";
        // Line 20.
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", FALSE, FALSE, TRUE, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
          // Line 21.
          echo "            <option value=\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", FALSE, FALSE, TRUE, 21), 21, $this->source), "html", NULL, TRUE);
          echo "\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", FALSE, FALSE, TRUE, 21)) ? (" selected=\"selected\"") : ("")));
          echo ">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", FALSE, FALSE, TRUE, 21), 21, $this->source), "html", NULL, TRUE);
          echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 23.
        echo "        </optgroup>
      ";
        // Line 24.
      }
      elseif ((twig_get_attribute($this->env, $this->source,
      $context["option"], "type", [], "any", FALSE, FALSE, TRUE, 24) == "option")) {
        // Line 25.
        echo "        <option value=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", FALSE, FALSE, TRUE, 25), 25, $this->source), "html", NULL, TRUE);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", FALSE, FALSE, TRUE, 25)) ? (" selected=\"selected\"") : ("")));
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", FALSE, FALSE, TRUE, 25), 25, $this->source), "html", NULL, TRUE);
        echo "</option>
      ";
      }
      // Line 27.
      echo "    ";
    }
    $_parent = $context['_parent'];
    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
    $context = array_intersect_key($context, $_parent) + $_parent;
    // Line 28.
    echo "  </select>
";
    $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    // Line 15.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/modules/system/templates/select.html.twig";
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
    return [100 => 15, 96 => 28, 90 => 27, 80 => 25, 78 => 24, 75 => 23, 62 => 21, 58 => 20, 53 => 19, 50 => 18, 46 => 17, 41 => 16, 39 => 15];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/modules/system/templates/select.html.twig", "/var/www/html/web/core/modules/system/templates/select.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["apply" => 15, "for" => 17, "if" => 18];
    static $filters = ["escape" => 16, "spaceless" => 15];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['apply', 'for', 'if'],
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
