<?php

/* menu/base.html.twig */
class __TwigTemplate_7a60c9d3e948da211597467dddfe936e8e729c1a0a977caf195927c45f6a96a6 extends Twig_Template
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
        echo "<section";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "id", array()), "html", null, true);
            echo "\"";
        }
        echo " class=\"menu-selector-bar";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array()), "html", null, true);
        }
        echo "\" role=\"navigation\">
    <ul class=\"g-grid g-toplevel menu-selector\" data-mm-id=\"\" data-mm-base=\"\" data-mm-base-level=\"1\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["item"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "            ";
            $context["active"] = (((twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($context["child"], "path", array()), "/")) == twig_first($this->env, twig_split_filter($this->env, ($context["path"] ?? null), "/")))) ? (" active") : (""));
            // line 6
            echo "            <li data-mm-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "path", array()), "html", null, true);
            echo "\"
                data-mm-level=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "level", array()), "html", null, true);
            echo "\"
                ";
            // line 8
            if ((($this->getAttribute($context["child"], "type", array()) == "particle") || ($this->getAttribute($context["child"], "type", array()) == "module"))) {
                // line 9
                echo "                class=\"g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "options", array()), "particle", array()), "enabled", array()) == false)) {
                    echo " g-menu-item-disabled";
                }
                echo "\"
                data-mm-original-type=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 12
                echo "                class=\"";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                if (($this->getAttribute($context["child"], "enabled", array()) == false)) {
                    echo " g-menu-item-disabled";
                }
                echo "\"
                ";
            }
            // line 14
            echo "            >
                ";
            // line 15
            $this->loadTemplate("menu/item.html.twig", "menu/base.html.twig", 15)->display(array_merge($context, array("item" => $context["child"], "target" => "columns")));
            // line 16
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    <a class=\"global-menu-settings\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu/edit", 1 => ($context["id"] ?? null)), "method"), "html", null, true);
        echo "\">
        <i aria-label=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_MENU_GLOBAL_SETTINGS"), "html", null, true);
        echo "\" class=\"fa fa-cog\" aria-hidden=\"true\"></i>
    </a>
</section>
<div class=\"column-container\" data-g5-menu-columns=\"\">
    ";
        // line 24
        if (($context["columns"] ?? null)) {
            // line 25
            echo "        ";
            $this->loadTemplate("menu/columns.html.twig", "menu/base.html.twig", 25)->display(array_merge($context, array("item" => ($context["columns"] ?? null))));
            // line 26
            echo "    ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "menu/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  128 => 26,  125 => 25,  123 => 24,  116 => 20,  112 => 19,  109 => 18,  94 => 16,  92 => 15,  89 => 14,  80 => 12,  75 => 10,  66 => 9,  64 => 8,  60 => 7,  55 => 6,  52 => 5,  35 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/base.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/menu/base.html.twig");
    }
}
