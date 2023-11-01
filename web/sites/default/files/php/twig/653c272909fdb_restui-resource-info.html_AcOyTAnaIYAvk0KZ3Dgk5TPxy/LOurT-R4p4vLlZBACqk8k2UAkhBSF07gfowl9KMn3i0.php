<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Modules/contrib/restui/templates/restui-resource-info.html.twig .
 */
class __TwigTemplate_9135a032964b7547dcdee1e6d08d168f extends Template {
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
    if ((($context["granularity"] ?? NULL) == "resource")) {
      // Line 16.
      echo "    <p>methods: ";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "methods", [], "any", FALSE, FALSE, TRUE, 16), 16, $this->source), ", "), "html", NULL, TRUE);
      echo "<br>
        formats: ";
      // Line 17.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "formats", [], "any", FALSE, FALSE, TRUE, 17), 17, $this->source), ", "), "html", NULL, TRUE);
      echo "<br>
        authentication: ";
      // Line 18.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? NULL), "authentication", [], "any", FALSE, FALSE, TRUE, 18), 18, $this->source), ", "), "html", NULL, TRUE);
      echo "
    </p>
";
    }
    else {
      // Line 21.
      echo "    ";
      $context['_parent'] = $context;
      $context['_seq'] = twig_ensure_traversable(($context["configuration"] ?? NULL));
      foreach ($context['_seq'] as $context["method"] => $context["properties"]) {
        // Line 22.
        echo "        <p>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["method"], 22, $this->source), "html", NULL, TRUE);
        echo "<br>
            formats: ";
        // Line 23.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["properties"], "supported_formats", [], "any", FALSE, FALSE, TRUE, 23), 23, $this->source), ", "), "html", NULL, TRUE);
        echo "<br>
            authentication: ";
        // Line 24.
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["properties"], "supported_auth", [], "any", FALSE, FALSE, TRUE, 24), 24, $this->source), ", "), "html", NULL, TRUE);
        echo "
        </p>
    ";
      }
      $_parent = $context['_parent'];
      unset($context['_seq'], $context['_iterated'], $context['method'], $context['properties'], $context['_parent'], $context['loop']);
      $context = array_intersect_key($context, $_parent) + $_parent;
    }
  }

  /**
   *
   */
  public function getTemplateName() {
    return "modules/contrib/restui/templates/restui-resource-info.html.twig";
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
    return [70 => 24, 66 => 23, 61 => 22, 56 => 21, 50 => 18, 46 => 17, 41 => 16, 39 => 15];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "modules/contrib/restui/templates/restui-resource-info.html.twig", "/var/www/html/web/modules/contrib/restui/templates/restui-resource-info.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["if" => 15, "for" => 21];
    static $filters = ["escape" => 16, "join" => 16];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['if', 'for'],
            ['escape', 'join'],
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
