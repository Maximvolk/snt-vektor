<?php

/* forms/fields/separator/note.html.twig */
class __TwigTemplate_2955a30e6cedd67abdd3e2db13ddfbdb6ea3f45a3359c42bdb55ef6ff5698d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . (((isset($context["layout"]) || array_key_exists("layout", $context))) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/separator/note.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "class", array()), "alert alert-warning")) : ("alert alert-warning")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter($this->getAttribute(($context["field"] ?? null), "content", array()));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/separator/note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/separator/note.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/forms/fields/separator/note.html.twig");
    }
}
