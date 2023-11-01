<?php

use Twig\Environment;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Source;
use Twig\Template;

/**
 * Core/themes/claro/templates/misc/status-messages.html.twig .
 */
class __TwigTemplate_0104ae55bd326e68b9fdc029dee624dd extends Template {
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
    // Line 25.
    echo "<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages-list__wrapper\">
    ";
    // Line 27.
    $context['_parent'] = $context;
    $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? NULL));
    foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
      // Line 28.
      echo "      ";
      // Line 29.
      $context["classes"] = [
        0 => "messages-list__item",
        1 => "messages",
      // Line 32.
        2 => ("messages--" . $this->sandbox->ensureToStringAllowed(
      $context["type"], 32, $this->source)),
      ];
      // Line 35.
      echo "      ";
      // Line 36.
      $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? NULL)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? NULL) : NULL);
      // Line 38.
      echo "      ";
      // Line 39.
      $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
      // Line 41.
      echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
      // Line 42.
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? NULL)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? NULL) : NULL), 42, $this->source), "html", NULL, TRUE);
      echo "\"";
      echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "addClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 42), 42, $this->source), "role", "aria-label"), "html", NULL, TRUE);
      echo ">
        ";
      // Line 43.
      if (($context["type"] == "error")) {
        // Line 44.
        echo "          <div role=\"alert\">
        ";
      }
      // Line 46.
      echo "          ";
      if ((($context["is_message_with_title"] ?? NULL) || ($context["is_message_with_icon"] ?? NULL))) {
        // Line 47.
        echo "            <div class=\"messages__header\">
              ";
        // Line 48.
        if (($context["is_message_with_title"] ?? NULL)) {
          // Line 49.
          echo "                <h2 id=\"";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? NULL)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? NULL) : NULL), 49, $this->source), "html", NULL, TRUE);
          echo "\" class=\"messages__title\">
                  ";
          // Line 50.
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? NULL)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? NULL) : NULL), 50, $this->source), "html", NULL, TRUE);
          echo "
                </h2>
              ";
        }
        // Line 53.
        echo "            </div>
          ";
      }
      // Line 55.
      echo "          <div class=\"messages__content\">
            ";
      // Line 56.
      if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
        // Line 57.
        echo "              <ul class=\"messages__list\">
                ";
        // Line 58.
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["messages"]);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
          // Line 59.
          echo "                  <li class=\"messages__item\">";
          echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 59, $this->source), "html", NULL, TRUE);
          echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // Line 61.
        echo "              </ul>
            ";
      }
      else {
        // Line 63.
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 63, $this->source)), "html", NULL, TRUE);
        echo "
            ";
      }
      // Line 65.
      echo "          </div>
        ";
      // Line 66.
      if (($context["type"] == "error")) {
        // Line 67.
        echo "          </div>
        ";
      }
      // Line 69.
      echo "      </div>
      ";
      // Line 71.
      echo "      ";
      $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? NULL), "removeClass", [0 => ($context["classes"] ?? NULL)], "method", FALSE, FALSE, TRUE, 71);
      // Line 72.
      echo "    ";
    }
    $_parent = $context['_parent'];
    unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
    $context = array_intersect_key($context, $_parent) + $_parent;
    // Line 73.
    echo "  </div>
</div>
";
  }

  /**
   *
   */
  public function getTemplateName() {
    return "core/themes/claro/templates/misc/status-messages.html.twig";
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
    return [150 => 73, 144 => 72, 141 => 71, 138 => 69, 134 => 67, 132 => 66, 129 => 65, 123 => 63, 119 => 61, 110 => 59, 106 => 58, 103 => 57, 101 => 56, 98 => 55, 94 => 53, 88 => 50, 83 => 49, 81 => 48, 78 => 47, 75 => 46, 71 => 44, 69 => 43, 63 => 42, 60 => 41, 58 => 39, 56 => 38, 54 => 36, 52 => 35, 50 => 32, 49 => 29, 47 => 28, 43 => 27, 39 => 25];
  }

  /**
   *
   */
  public function getSourceContext() {
    return new Source("", "core/themes/claro/templates/misc/status-messages.html.twig", "/var/www/html/web/core/themes/claro/templates/misc/status-messages.html.twig");
  }

  /**
   *
   */
  public function checkSecurity() {
    static $tags = ["for" => 27, "set" => 29, "if" => 43];
    static $filters = ["escape" => 42, "without" => 42, "length" => 56, "first" => 63];
    static $functions = [];

    try {
      $this->sandbox->checkSecurity(
            ['for', 'set', 'if'],
            ['escape', 'without', 'length', 'first'],
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
