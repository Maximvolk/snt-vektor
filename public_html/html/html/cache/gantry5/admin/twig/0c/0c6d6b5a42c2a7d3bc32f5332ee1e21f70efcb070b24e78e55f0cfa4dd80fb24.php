<?php

/* @gantry-admin/layouts/switcher.html.twig */
class __TwigTemplate_a868db1bb886b3b38fbc495ca0e75311c197172559804eac0a22fc69dcad0621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"g-tabs\" role=\"tablist\">
    <ul>
        <li class=\"active\">
            <a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">
                ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRESETS"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#\" id=\"g-switcher-platforms-outlines\" role=\"presentation\" aria-controls=\"g-switcher-outlines\" role=\"tab\" aria-expanded=\"false\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OUTLINES"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>

<div class=\"g-panes\">
    <div class=\"g-pane clearfix active\" role=\"tabpanel\" id=\"g-switcher-platforms\" aria-labelledby=\"g-switcher-platforms-tab\" aria-expanded=\"true\">
        <div class=\"g-preserve-particles\">
            <label>
                <input data-g-preserve=\"preset\" type=\"checkbox\" checked=\"checked\" />
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_PRESET_DESC"), "html", null, true);
        echo "
            </label>
        </div>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["group"]) {
            // line 27
            echo "        <ul class=\"g-switch-presets";
            if (($context["name"] == "user")) {
                echo " float-left";
            } else {
                echo " float-right";
            }
            echo "\" role=\"tablist\">
            <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">
                ";
            // line 29
            echo twig_escape_filter($this->env, ((($context["name"] == "user")) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_USER")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_PLATFORM"))), "html", null, true);
            echo "
            </li>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            foreach ($context['_seq'] as $context["key"] => $context["current"]) {
                // line 32
                echo "            <li tabindex=\"0\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_PRESET", $context["current"]), "html", null, true);
                echo "\" role=\"button\"
                data-switch=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/preset/") . $context["key"])), "method"), "html", null, true);
                echo "\"
                class=\"g-switch-preset\"
            >
                ";
                // line 36
                echo twig_escape_filter($this->env, $context["current"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>

    <div class=\"g-pane clearfix\" role=\"tabpanel\" id=\"g-switcher-outlines\" aria-labelledby=\"g-switcher-outlines-tab\" aria-expanded=\"false\">
        ";
        // line 44
        $context["user_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "copy", array()), "user", array());
        // line 45
        echo "        ";
        $context["system_conf"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", array()), "system", array());
        // line 46
        echo "
        <div class=\"g-preserve-particles\">
            <label>
                <input data-g-preserve=\"outline\" type=\"checkbox\" />
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_OUTLINE_DESC"), "html", null, true);
        echo "
            </label>
            ";
        // line 52
        if ((($context["configuration"] ?? null) != "default")) {
            // line 53
            echo "            <label>
                <input data-g-inherit=\"outline\" type=\"checkbox\" checked=\"checked\" />
                ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SWITCH_OUTLINE_INHERIT_DESC"), "html", null, true);
            echo "
            </label>
            ";
        }
        // line 58
        echo "        </div>
        <ul class=\"g-switch-conf-user";
        // line 59
        if ($this->getAttribute(($context["system_conf"] ?? null), "count", array())) {
            echo " float-left";
        }
        echo "\" role=\"tablist\">
            <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_USER"), "html", null, true);
        echo "</li>
            <li tabindex=\"0\"
                aria-label=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE")), "html", null, true);
        echo "\"
                role=\"button\"
                data-switch=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => (("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/default")), "method"), "html", null, true);
        echo "\"
                class=\"g-switch-configuration\"
            >
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
        echo "
            </li>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_conf"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["current"]) {
            if (($context["key"] != ($context["configuration"] ?? null))) {
                // line 70
                echo "                ";
                $context["label"] = twig_title_string_filter($this->env, twig_trim_filter(twig_replace_filter($context["current"], array("_" => " "))));
                // line 71
                echo "                <li tabindex=\"0\"
                    aria-label=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", ($context["label"] ?? null)), "html", null, true);
                echo "\"
                    role=\"button\"
                    data-switch=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/") . $context["key"])), "method"), "html", null, true);
                echo "\"
                    class=\"g-switch-configuration\"
                >
                    ";
                // line 77
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </ul>

        ";
        // line 82
        if ($this->getAttribute(($context["system_conf"] ?? null), "count", array())) {
            // line 83
            echo "            <ul class=\"g-switch-conf-systems float-right\">
                <li tabindex=\"0\" class=\"g-switch-title\" role=\"presentation\">";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LM_SWITCHER_SYSTEM"), "html", null, true);
            echo "</li>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["system_conf"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["current"]) {
                // line 86
                echo "                    ";
                $context["label"] = twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_trim_filter(twig_replace_filter($context["current"], array("_" => " ")))));
                // line 87
                echo "                    <li tabindex=\"0\"
                        aria-label=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_X_OUTLINE", ($context["label"] ?? null)), "html", null, true);
                echo "\"
                        role=\"button\"
                        data-switch=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => ((("configurations/" . ($context["configuration"] ?? null)) . "/layout/switch/") . $context["key"])), "method"), "html", null, true);
                echo "\"
                        class=\"g-switch-configuration\"
                    >
                        ";
                // line 93
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['current'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </ul>
        ";
        }
        // line 98
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/layouts/switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 98,  243 => 96,  234 => 93,  228 => 90,  223 => 88,  220 => 87,  217 => 86,  213 => 85,  209 => 84,  206 => 83,  204 => 82,  200 => 80,  190 => 77,  184 => 74,  179 => 72,  176 => 71,  173 => 70,  168 => 69,  163 => 67,  157 => 64,  152 => 62,  147 => 60,  141 => 59,  138 => 58,  132 => 55,  128 => 53,  126 => 52,  121 => 50,  115 => 46,  112 => 45,  110 => 44,  105 => 41,  98 => 39,  89 => 36,  83 => 33,  78 => 32,  74 => 31,  69 => 29,  59 => 27,  55 => 26,  48 => 22,  34 => 11,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/layouts/switcher.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/layouts/switcher.html.twig");
    }
}
