<?php

/* @gantry-admin/partials/updates.html.twig */
class __TwigTemplate_35ad9c6931c7029c310753f2a64670e3720792a4851eccdb207a0a9d4831796c extends Twig_Template
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
        $context["updates"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "updates", array());
        // line 2
        if (($context["updates"] ?? null)) {
            // line 3
            $context["version"] = twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["updates"] ?? null), 0, array()), " "));
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block\">
        <div class=\"update-header clearfix\">
            <span class=\"update-text\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_UPDATES_AVAILABLE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter(($context["updates"] ?? null), ", "), "html", null, true);
            echo "</span>
            <div class=\"update-tools\">
                <a href=\"";
            // line 9
            echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "update", array());
            echo "\" class=\"button button-update\">
                    <i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_UPDATE"), "html", null, true);
            echo "</span>
                </a>
                <a href=\"#\" data-changelog=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "\" class=\"button button-update\">
                    <i class=\"fa fa-book\" aria-hidden=\"true\"></i> <span>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CHANGELOG"), "html", null, true);
            echo "</span>
                </a>
                <a href=\"#\" class=\"fa fa-close\" aria-hidden=\"true\" data-g-close=\".g-grid\"></a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  41 => 10,  37 => 9,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/updates.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/partials/updates.html.twig");
    }
}
