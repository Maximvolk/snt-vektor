<?php

/* forms/fields/input/group/group.html.twig */
class __TwigTemplate_f1cf9c7dc3dae7069ec7e8febc647ce8485cdf2d8e3219bd9e763b28f067ad9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((($context["default"] ?? null)) ? ("partials/field.html.twig") : ((("forms/" . (((isset($context["layout"]) || array_key_exists("layout", $context))) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/input/group/group.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["macro"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_group($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"input-group
        ";
        // line 22
        if ($this->getAttribute(($context["field"] ?? null), "prepend", array())) {
            echo "prepend
        ";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "append", array())) {
            echo "append
        ";
        }
        // line 26
        echo "    \">


        ";
        // line 29
        if ($this->getAttribute(($context["field"] ?? null), "prepend", array())) {
            // line 30
            echo "            ";
            echo $context["macro"]->getpend($this->getAttribute(($context["field"] ?? null), "prepend", array()));
            echo "
        ";
        }
        // line 32
        echo "        ";
        $this->displayBlock('input', $context, $blocks);
        // line 34
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "append", array())) {
            // line 35
            echo "            ";
            echo $context["macro"]->getpend($this->getAttribute(($context["field"] ?? null), "append", array()));
            echo "
        ";
        }
        // line 37
        echo "        ";
        $this->displayBlock('reset_field', $context, $blocks);
        // line 38
        echo "    </div>
";
    }

    // line 32
    public function block_input($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 37
    public function block_reset_field($context, array $blocks = array())
    {
        $this->displayParentBlock("reset_field", $context, $blocks);
    }

    // line 3
    public function getpend($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? null), "type", array()) == "text")) {
                // line 5
                echo "        <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "text", array()));
                echo "</span>
    ";
            } elseif (($this->getAttribute(            // line 6
($context["item"] ?? null), "type", array()) == "list")) {
                // line 7
                echo "        ";
                if ($this->getAttribute(($context["item"] ?? null), "options", array())) {
                    // line 8
                    echo "            ";
                    $this->loadTemplate("forms/fields/select/selectize.html.twig", "forms/fields/input/group/group.html.twig", 8)->display(array_merge($context, array("field.options" => $this->getAttribute(($context["item"] ?? null), "options", array()))));
                    // line 9
                    echo "        ";
                }
                // line 10
                echo "    ";
            } elseif (($this->getAttribute(($context["item"] ?? null), "type", array()) == "button")) {
                // line 11
                echo "        <span class=\"input-group-btn\">
            ";
                // line 12
                $this->loadTemplate("forms/fields/button", "forms/fields/input/group/group.html.twig", 12)->display($context);
                // line 13
                echo "        </span>
    ";
            } elseif (($this->getAttribute(            // line 14
($context["item"] ?? null), "type", array()) == "actions")) {
                // line 15
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/input/group/group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 15,  137 => 14,  134 => 13,  132 => 12,  129 => 11,  126 => 10,  123 => 9,  120 => 8,  117 => 7,  115 => 6,  110 => 5,  107 => 4,  95 => 3,  89 => 37,  85 => 33,  82 => 32,  77 => 38,  74 => 37,  68 => 35,  65 => 34,  62 => 32,  56 => 30,  54 => 29,  49 => 26,  43 => 24,  38 => 22,  35 => 21,  32 => 20,  28 => 1,  26 => 18,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/group/group.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/forms/fields/input/group/group.html.twig");
    }
}
