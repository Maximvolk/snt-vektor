<?php

/* forms/fields/input/colorpicker.html.twig */
class __TwigTemplate_c72a1736bf72c56d6f301ca5e58fac814bf1fd6ee8279c06c1aab002ba0070d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/group/group.html.twig", "forms/fields/input/colorpicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/group/group.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), array("style" => ("background-color: " . ($context["value"] ?? null)), "pattern" => "^#([a-fA-F0-9]{6})|(rgba\\(\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*((0.[0-9]+)|[01])\\s*\\))\$"));
        // line 5
        echo "    <div class=\"g-colorpicker ";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->colorContrastFunc(twig_lower_filter($this->env, ($context["value"] ?? null)))) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->colorContrastFunc(twig_lower_filter($this->env, ($context["value"] ?? null)))) : ("light-text")), "html", null, true);
        echo "\">
        <input
                ";
        // line 8
        echo "                type=\"text\"
                name=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["name"] ?? null))), "html", null, true);
        echo "\"
                value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter(($context["value"] ?? null), ", ")), "html", null, true);
        echo "\"
                ";
        // line 12
        echo "                ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
                ";
        // line 14
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "pattern", array(), "any", true, true)) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "pattern", array()), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 18
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "list", array(), "any", true, true)) {
            echo "list=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "list", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        />
        <i class=\"fa fa-tint\" aria-hidden=\"true\"></i>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/colorpicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  80 => 18,  75 => 17,  68 => 16,  63 => 15,  56 => 14,  51 => 12,  47 => 10,  43 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/colorpicker.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/forms/fields/input/colorpicker.html.twig");
    }
}
