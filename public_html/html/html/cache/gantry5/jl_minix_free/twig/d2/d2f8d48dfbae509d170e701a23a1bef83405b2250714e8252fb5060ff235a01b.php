<?php

/* @particles/assets.html.twig */
class __TwigTemplate_e08c252022204e1f0fe0cc5c1ea01b4196f37ea5db0b22a0d629f01f4a4ee94d extends Twig_Template
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
        ob_start();
        // line 2
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", array())) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "css", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 4
                echo "        ";
                $context["params"] = array();
                // line 5
                echo "        ";
                if ($this->getAttribute($context["css"], "extra", array())) {
                    // line 6
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["css"], "extra", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                        // line 7
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 8
                            echo "                    ";
                            $context["params"] = twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array($context["key"] => $context["value"]));
                            // line 9
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 10
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "
        ";
                // line 13
                if ($this->getAttribute($context["css"], "location", array())) {
                    // line 14
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addStyle", array(0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("href" => $this->getAttribute($context["css"], "location", array()))), 1 => $this->getAttribute($context["css"], "priority", array())), "method");
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        ";
                // line 17
                if ($this->getAttribute($context["css"], "inline", array())) {
                    // line 18
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addInlineStyle", array(0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("content" => $this->getAttribute($context["css"], "inline", array()))), 1 => $this->getAttribute($context["css"], "priority", array())), "method");
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "javascript", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 23
                echo "        ";
                $context["params"] = array();
                // line 24
                echo "        ";
                if ($this->getAttribute($context["script"], "extra", array())) {
                    // line 25
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["script"], "extra", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                        // line 26
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 27
                            echo "                    ";
                            $context["params"] = twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array($context["key"] => $context["value"]));
                            // line 28
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        ";
                // line 32
                if ($this->getAttribute($context["script"], "location", array())) {
                    // line 33
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("src" => $this->getAttribute($context["script"], "location", array()))), 1 => $this->getAttribute($context["script"], "priority", array()), 2 => ((($this->getAttribute($context["script"], "in_footer", array()) == true)) ? ("footer") : ("head"))), "method");
                    // line 34
                    echo "        ";
                }
                // line 35
                echo "
        ";
                // line 36
                if ($this->getAttribute($context["script"], "inline", array())) {
                    // line 37
                    echo "            ";
                    $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addInlineScript", array(0 => twig_array_merge((((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("content" => $this->getAttribute($context["script"], "inline", array()))), 1 => $this->getAttribute($context["script"], "priority", array()), 2 => ((($this->getAttribute($context["script"], "in_footer", array()) == true)) ? ("footer") : ("head"))), "method");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@particles/assets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 39,  150 => 38,  147 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  134 => 32,  131 => 31,  128 => 30,  122 => 29,  116 => 28,  113 => 27,  108 => 26,  103 => 25,  100 => 24,  97 => 23,  93 => 22,  90 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  59 => 11,  53 => 10,  47 => 9,  44 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/assets.html.twig", "/var/www/html/media/gantry5/engines/nucleus/particles/assets.html.twig");
    }
}
