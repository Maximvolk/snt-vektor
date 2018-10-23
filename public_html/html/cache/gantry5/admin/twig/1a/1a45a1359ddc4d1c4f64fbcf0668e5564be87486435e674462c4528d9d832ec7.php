<?php

/* @gantry-admin/pages/menu/edit.html.twig */
class __TwigTemplate_175758fb1e494ad6b039cc5063273b7e431f680344f2d59b63b2f5c0a40f186f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => "validate"), "method"), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", array()), "title", array()), "html", null, true);
        echo "\" class=\"title\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", array()), "title", array()), "html", null, true);
        echo "
            </span>
            <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute($this->getAttribute(($context["data"] ?? null), "settings", array()), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", array()), "fields", array()), "enabled", array())) {
            // line 12
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 12)->display(array_merge($context, array("default" => true, "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute(($context["data"] ?? null), "enabled", array()))));
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </h4>
        <div class=\"inner-params\">
            ";
        // line 16
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/edit.html.twig", 16)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["blueprints"] ?? null), "form", array()), "data" => ($context["data"] ?? null), "skip" => array(0 => "enabled", 1 => "settings.title"))));
        // line 17
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 20
        if ($this->getAttribute(($context["gantry"] ?? null), "authorize", array(0 => "menu.edit", 1 => ($context["id"] ?? null)), "method")) {
            // line 21
            echo "        ";
            // line 22
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 25
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  78 => 23,  73 => 22,  71 => 21,  69 => 20,  64 => 17,  62 => 16,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/menu/edit.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/pages/menu/edit.html.twig");
    }
}
