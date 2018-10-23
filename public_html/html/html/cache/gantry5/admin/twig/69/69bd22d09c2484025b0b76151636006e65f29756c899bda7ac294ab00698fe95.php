<?php

/* @gantry-admin/pages/menu/menuitem.html.twig */
class __TwigTemplate_0bbee5809094f0e7f7909c0b0f4d296aca0cc041f3a676508896b9d0a9e08b9f extends Twig_Template
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
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/menu/menuitem.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu/edit", 1 => ($context["id"] ?? null), 2 => ($context["path"] ?? null), 3 => "validate"), "method"), "html", null, true);
        echo "\">
    <div class=\"card settings-block\">
        <h4>
            <span data-title-editable=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array()), "html", null, true);
        echo "</span>
            <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["data"] ?? null), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", array()), ".enabled", array(), "array")) {
            // line 10
            echo "            ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 10)->display(array_merge($context, array("default" => true, "name" => "enabled", "field" => $this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", array()), ".enabled", array(), "array"), "value" => $this->getAttribute(($context["data"] ?? null), "enabled", array()))));
            // line 11
            echo "            ";
        }
        // line 12
        echo "            <span class=\"g-menuitem-path font-small\">/";
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "</span>
        </h4>
        <div class=\"inner-params\">
            ";
        // line 15
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/menu/menuitem.html.twig", 15)->display(array_merge($context, array("skip" => array(0 => "enabled", 1 => "title", 2 => ((($this->getAttribute(($context["data"] ?? null), "level", array()) > 1)) ? ("dropdown") : ("-noitem-"))))));
        // line 16
        echo "        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 19
        if ($this->getAttribute(($context["gantry"] ?? null), "authorize", array(0 => "menu.edit", 1 => ($context["id"] ?? null)), "method")) {
            // line 20
            echo "        ";
            // line 21
            echo "        <button class=\"button button-primary\" type=\"submit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
            echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
            echo "</button>
        ";
        }
        // line 24
        echo "        <button class=\"button g5-dialog-close\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/menu/menuitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  73 => 21,  71 => 20,  69 => 19,  64 => 16,  62 => 15,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  37 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/menu/menuitem.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/pages/menu/menuitem.html.twig");
    }
}
