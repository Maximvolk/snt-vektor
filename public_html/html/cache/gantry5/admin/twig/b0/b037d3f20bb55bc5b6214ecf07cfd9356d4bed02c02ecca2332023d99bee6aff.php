<?php

/* menu/item.html.twig */
class __TwigTemplate_26986daa9e1294078641e063370abe68ed64efc467900dab1c158988ce254928 extends Twig_Template
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
        $context["ajaxTarget"] = ((($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)) ? ("data-g5-ajaxify-target-parent=\".submenu-column\"") : ("data-g5-ajaxify-target=\"[data-g5-menu-columns]\""));
        // line 2
        echo "
";
        // line 3
        $context["attributes"] = ((("data-g5-ajaxify=\"\" data-g5-ajaxify-params=\"" . twig_escape_filter($this->env, "{\"inline\":1}", "html_attr")) . "\" ") . ($context["ajaxTarget"] ?? null));
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["item"] ?? null), "path", array())) {
            // line 6
            echo "<a ";
            echo ($context["attributes"] ?? null);
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu", 1 => ($context["id"] ?? null), 2 => $this->getAttribute(($context["item"] ?? null), "path", array())), "method"), "html", null, true);
            echo "\" class=\"menu-item\">
";
        } else {
            // line 8
            echo "<span class=\"menu-item\">
";
        }
        // line 10
        if (($this->getAttribute(($context["item"] ?? null), "type", array()) == "particle")) {
            // line 11
            echo "    <span class=\"menu-item-content\">
        <span class=\"menu-item-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()), "html", null, true);
            echo "</span>
        ";
            // line 13
            if ($this->getAttribute(($context["item"] ?? null), "subtitle", array())) {
                echo "<span class=\"menu-item-subtitle\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", array()), "html", null, true);
                echo "</span>";
            }
            // line 14
            echo "    </span>
    <span class=\"badge menu-item-type\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "particle", array()), "html", null, true);
            echo "</span>
";
        } else {
            // line 17
            echo "    ";
            if ($this->getAttribute(($context["item"] ?? null), "image", array())) {
                // line 18
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", array())), "html", null, true);
                echo "\" />
    ";
            } elseif ($this->getAttribute(            // line 19
($context["item"] ?? null), "icon", array())) {
                // line 20
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", array()), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 22
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", array()) ||  !($this->getAttribute(($context["item"] ?? null), "image", array()) || $this->getAttribute(($context["item"] ?? null), "icon", array())))) {
                // line 23
                echo "        <span class=\"menu-item-content\">
            <span class=\"menu-item-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()), "html", null, true);
                echo "</span>
                ";
                // line 25
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", array())) {
                    echo "<span class=\"menu-item-subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", array()), "html", null, true);
                    echo "</span>";
                }
                // line 26
                echo "        </span>
    ";
            }
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["item"] ?? null), "children", array())) {
                // line 29
                echo "<span class=\"parent-indicator\"></span>";
            }
        }
        // line 32
        if ( !$this->getAttribute(($context["item"] ?? null), "path", array())) {
            // line 33
            echo "</span>
";
        } else {
            // line 35
            echo "</a>
";
        }
        // line 37
        echo "<a class=\"config-cog\" href=\"";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["item"] ?? null), "type", array()) == "particle")) ? ($this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu/particle"), "method")) : ($this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => $this->getAttribute(($context["item"] ?? null), "path", array())), "method"))), "html", null, true);
        echo "\">
    <i aria-label=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_MENU_ITEM_SETTINGS"), "html", null, true);
        echo "\" class=\"fa fa-cog\" aria-hidden=\"true\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "menu/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  119 => 37,  115 => 35,  111 => 33,  109 => 32,  105 => 29,  102 => 28,  98 => 26,  92 => 25,  88 => 24,  85 => 23,  82 => 22,  76 => 20,  74 => 19,  69 => 18,  66 => 17,  61 => 15,  58 => 14,  52 => 13,  48 => 12,  45 => 11,  43 => 10,  39 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/item.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/menu/item.html.twig");
    }
}
