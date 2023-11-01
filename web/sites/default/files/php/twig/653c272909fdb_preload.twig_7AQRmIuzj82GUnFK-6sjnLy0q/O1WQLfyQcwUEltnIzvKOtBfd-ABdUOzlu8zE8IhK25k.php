<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * @olivero/includes/preload.twig
 */
class __TwigTemplate_795c4d8878c0bc3afd5df0a724b39b74 extends Template {
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
    // Line 10.
    echo "
<link rel=\"preload\" href=\"";
    // Line 11.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["olivero_path"] ?? NULL), 11, $this->source), "html", NULL, TRUE);
    echo "/fonts/metropolis/Metropolis-Regular.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"";
    // Line 12.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["olivero_path"] ?? NULL), 12, $this->source), "html", NULL, TRUE);
    echo "/fonts/metropolis/Metropolis-SemiBold.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"";
    // Line 13.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["olivero_path"] ?? NULL), 13, $this->source), "html", NULL, TRUE);
    echo "/fonts/metropolis/Metropolis-Bold.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"";
    // Line 14.
    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["olivero_path"] ?? NULL), 14, $this->source), "html", NULL, TRUE);
    echo "/fonts/lora/lora-v14-latin-regular.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "@olivero/includes/preload.twig";
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
    return [54 => 14, 50 => 13, 46 => 12, 42 => 11, 39 => 10];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "@olivero/includes/preload.twig", "/var/www/html/web/core/themes/olivero/templates/includes/preload.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = [];
    static $filters = ["escape" => 11];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            [],
            ['escape'],
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
