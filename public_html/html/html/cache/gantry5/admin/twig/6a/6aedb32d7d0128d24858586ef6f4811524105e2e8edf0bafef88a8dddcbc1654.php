<?php

/* @gantry-admin/pages/configurations/layouts/section.html.twig */
class __TwigTemplate_27d5e7cd38c1387b1d8f4a03a51f1b9603994009a2ba98a7c23dfd1f84f08363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gantry-admin/pages/configurations/layouts/particle.html.twig", "@gantry-admin/pages/configurations/layouts/section.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gantry-admin/pages/configurations/layouts/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["particle"] ?? null), "name", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/configurations/layouts/section.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/pages/configurations/layouts/section.html.twig");
    }
}
