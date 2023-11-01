<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/navigation/menu-local-task.html.twig .
 */
class __TwigTemplate_b94a45c88944dce2ea9f7646ff604a46 extends Template {
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
    // Line 19.
    $context["classes"] = [
      0 => "tabs__tab",
    // Line 21.
      1 => (((
    ($context["level"] ?? NULL) == "primary")) ? ("js-tab") : ("")),
    // Line 22.
      2 => ((
    ($context["is_active"] ?? NULL)) ? ("is-active") : ("")),
    // Line 23.
      3 => ((
    ($context["is_active"] ?? NULL)) ? ("js-active-tab") : ("")),
    ];
    // Line 26.
    echo "<li";
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 26), 26, $this->source), "html", NULL, TRUE);
    echo ">
  ";
    // Line 27.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? NULL), 27, $this->source), "html", NULL, TRUE);
    echo "
  ";
    // Line 28.
    if ((($context["is_active"] ?? NULL) && (($context["level"] ?? NULL) == "primary"))) {
      // Line 29.
      echo "    <button class=\"reset-appearance tabs__trigger\" aria-label=\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs display toggle"));
      echo "\" data-drupal-nav-tabs-trigger>
      ";
      // Line 30.
      $this->loadTemplate("@claro/../images/src/hamburger-menu.svg", "core/themes/claro/templates/navigation/menu-local-task.html.twig", 30)->display($context);
      // Line 31.
      echo "    </button>
  ";
    }
    // Line 33.
    echo "</li>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/navigation/menu-local-task.html.twig";
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
    return [66 => 33, 62 => 31, 60 => 30, 55 => 29, 53 => 28, 49 => 27, 44 => 26, 42 => 23, 41 => 22, 40 => 21, 39 => 19];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/navigation/menu-local-task.html.twig", "/var/www/html/web/core/themes/claro/templates/navigation/menu-local-task.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["set" => 19, "if" => 28, "include" => 30];
    static $filters = ["escape" => 26, "t" => 29];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['set', 'if', 'include'],
            ['escape', 't'],
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
