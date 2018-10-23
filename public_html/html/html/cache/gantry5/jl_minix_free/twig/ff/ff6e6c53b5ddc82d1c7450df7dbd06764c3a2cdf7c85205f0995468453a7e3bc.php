<?php

/* @particles/sticky.html.twig */
class __TwigTemplate_26e6486b3135f0dee4e4f10c1c1e9a544a278de782f7a40b3cb64ad34756c37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/sticky.html.twig", 1);
        $this->blocks = array(
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 6
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
  <script>
  jQuery( document ).ready(function( \$ ) {
    \$(\"#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "id", array()), "html", null, true);
        echo "\").sticky({ topSpacing :";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "spacing", array()), "html", null, true);
        echo ",zIndex: 999  });
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/sticky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/sticky.html.twig", "/var/www/html/templates/jl_minix_free/custom/particles/sticky.html.twig");
    }
}
