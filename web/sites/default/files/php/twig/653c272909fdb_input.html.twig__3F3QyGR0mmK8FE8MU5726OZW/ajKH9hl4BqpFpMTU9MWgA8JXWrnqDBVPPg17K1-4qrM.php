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
 * Core/themes/claro/templates/form/input.html.twig .
 */
class __TwigTemplate_51e5a5d2710e2096cff319b243ccb8b0 extends Template {
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
    ob_start(function () {
      return '';
    });
    // Line 15.
    if (($context["autocomplete_message"] ?? NULL)) {
      // Line 16.
      echo "  <div class=\"claro-autocomplete\">
    <input";
      // Line 17.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 17, $this->source), "html", NULL, TRUE);
      echo "/>
    <div class=\"claro-autocomplete__message hidden\" data-drupal-selector=\"autocomplete-message\">";
      // Line 18.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["autocomplete_message"] ?? NULL), 18, $this->source), "html", NULL, TRUE);
      echo "</div>
  </div>
  ";
      // Line 20.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 20, $this->source), "html", NULL, TRUE);
      echo "
";
    }
    else {
      // Line 22.
      echo "  <input";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? NULL), 22, $this->source), "html", NULL, TRUE);
      echo "/>";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? NULL), 22, $this->source), "html", NULL, TRUE);
      echo "
";
    }
    $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    // Line 14.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/form/input.html.twig";
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
    return [69 => 14, 60 => 22, 55 => 20, 50 => 18, 46 => 17, 43 => 16, 41 => 15, 39 => 14];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/form/input.html.twig", "/var/www/html/web/core/themes/claro/templates/form/input.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["apply" => 14, "if" => 15];
    static $filters = ["escape" => 17, "spaceless" => 14];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['apply', 'if'],
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
