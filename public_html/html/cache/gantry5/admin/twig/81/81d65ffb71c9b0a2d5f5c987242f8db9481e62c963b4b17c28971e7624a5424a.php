<?php

/* ajax/filepicker/subfolders.html.twig */
class __TwigTemplate_886a75294dc631a63887371485d8221a40f899f56cca968bac6b2f0d3db68265 extends Twig_Template
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
        echo "<ul class=\"g-bookmark-folders fa-ul\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["folder"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["bookmarkFolder"]) {
            // line 3
            echo "        <li data-folder=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["bookmarkFolder"]), "html_attr");
            echo "\"";
            echo ((twig_in_filter($this->getAttribute($context["bookmarkFolder"], "pathname", array()), ($context["active"] ?? null))) ? (" class=\"active\"") : (""));
            echo ">
            <i class=\"fa-li fa fa-folder-o\" aria-hidden=\"true\"></i>
            <span class=\"path\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmarkFolder"], "filename", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookmarkFolder"], "filename", array()), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmarkFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "ajax/filepicker/subfolders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  34 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ajax/filepicker/subfolders.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/ajax/filepicker/subfolders.html.twig");
    }
}
