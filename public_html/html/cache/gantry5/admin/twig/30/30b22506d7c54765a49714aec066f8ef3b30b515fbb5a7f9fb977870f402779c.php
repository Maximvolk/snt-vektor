<?php

/* forms/fields/gantry/outlines.html.twig */
class __TwigTemplate_eb278164f4e9d148c0d1414911c6bc39241434be533c621bd2c97e6ce1927d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/select/selectize.html.twig", "forms/fields/gantry/outlines.html.twig", 1);
        $this->blocks = array(
            'options' => array($this, 'block_options'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_options($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("options", $context, $blocks);
        echo "
    ";
        // line 5
        if (( !$this->getAttribute(($context["field"] ?? null), "filter", array()) || twig_in_filter("default", $this->getAttribute(($context["field"] ?? null), "filter", array())))) {
            // line 6
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_GLOBAL_DEFAULTS"), "html", null, true);
            echo "\">
        <option value=\"default\"";
            // line 7
            if (("default" == ($context["value"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
            echo "
        </option>
    </optgroup>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["user_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "user", array()), "filter", array(0 => $this->getAttribute(($context["field"] ?? null), "filter", array())), "method");
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["user_conf"] ?? null), "count", array())) {
            // line 15
            echo "    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_THEME_OUTLINES"), "html", null, true);
            echo "\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["user_conf"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"";
                if (($context["name"] == ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 18
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </optgroup>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["system_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "system", array()), "filter", array(0 => $this->getAttribute(($context["field"] ?? null), "filter", array())), "method");
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["system_conf"] ?? null), "count", array())) {
            // line 26
            echo "    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SYSTEM_OUTLINES"), "html", null, true);
            echo "\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["system_conf"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 28
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"";
                if (($context["name"] == ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 29
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </optgroup>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/outlines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  121 => 29,  112 => 28,  108 => 27,  103 => 26,  100 => 25,  98 => 24,  95 => 23,  91 => 21,  82 => 18,  73 => 17,  69 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  49 => 8,  43 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/gantry/outlines.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/forms/fields/gantry/outlines.html.twig");
    }
}
