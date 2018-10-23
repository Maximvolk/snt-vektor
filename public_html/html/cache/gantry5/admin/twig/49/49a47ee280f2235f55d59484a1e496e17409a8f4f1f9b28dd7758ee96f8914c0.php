<?php

/* ajax/filepicker/files.html.twig */
class __TwigTemplate_f709fc81c866ead1f383bdf61dba67531537b084b9866f463f47a5f8c9a15f9f extends Twig_Template
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
        // line 21
        echo "
";
        // line 22
        $context["macro"] = $this;
        // line 23
        echo "
<ul class=\"g-list-labels\">
    <li>
        <span class=\"g-file-thumb\"></span>
        <span class=\"g-file-name\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_NAME"), "html", null, true);
        echo "</span>
        <span class=\"g-file-size\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SIZE"), "html", null, true);
        echo "</span>
        <span class=\"g-file-mtime\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_LATEST_MODIFIED"), "html", null, true);
        echo "</span>
    </li>
</ul>
<ul>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["file"]) {
            // line 34
            echo "        <li data-file=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["file"]), "html_attr");
            echo "\" data-file-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "pathname", array()), "html", null, true);
            echo "\"";
            echo ((($this->getAttribute($context["file"], "pathname", array()) == ($context["value"] ?? null))) ? (" class=\"selected\"") : (""));
            echo "
            title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo " (";
            echo $context["macro"]->getbytesToSize($this->getAttribute($context["file"], "size", array()));
            echo ")\">
            ";
            // line 36
            if ($this->getAttribute($context["file"], "isInCustom", array())) {
                // line 37
                echo "                <span class=\"g-file-delete\" data-g-file-delete data-dz-remove title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILE_REMOVE"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-trash-o\" aria-hidden=\"true\"></i>
                </span>
            ";
            }
            // line 41
            echo "            ";
            if ($this->getAttribute($context["file"], "isImage", array())) {
                // line 42
                echo "                <span class=\"g-file-preview\" data-g-file-preview title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILE_PREVIEW"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-eye\" aria-hidden=\"true\"></i>
                </span>
                <div class=\"g-thumb g-image g-image-";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "extension", array()), "html", null, true);
                echo "\">
                    <div style=\"background-image: url('";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["file"], "pathname", array())), "html", null, true);
                echo "')\"></div>
                </div>
            ";
            } else {
                // line 49
                echo "                <div class=\"g-thumb\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "extension", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 51
            echo "
            <span class=\"g-file-name\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo "</span>
            <span class=\"g-file-size\">";
            // line 53
            echo $context["macro"]->getbytesToSize($this->getAttribute($context["file"], "size", array()));
            echo "</span>
            <span class=\"g-file-mtime\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "mtime", array()), "j M o"), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
    ";
        // line 58
        if ((twig_length_filter($this->env, ($context["files"] ?? null)) == 0)) {
            // line 59
            echo "        <li class=\"no-files-found\"><h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FOLDER_EMPTY"), "html", null, true);
            echo "</h2></li>
    ";
        }
        // line 61
        echo "</ul>
";
    }

    // line 1
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 4
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 5
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 6
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 7
            echo "
        ";
            // line 8
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 10
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 19
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "ajax/filepicker/files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 19,  194 => 17,  188 => 15,  186 => 14,  181 => 13,  179 => 12,  174 => 11,  172 => 10,  167 => 9,  165 => 8,  162 => 7,  159 => 6,  156 => 5,  153 => 4,  150 => 3,  148 => 2,  136 => 1,  131 => 61,  125 => 59,  123 => 58,  120 => 57,  111 => 54,  107 => 53,  103 => 52,  100 => 51,  94 => 49,  88 => 46,  84 => 45,  77 => 42,  74 => 41,  66 => 37,  64 => 36,  58 => 35,  49 => 34,  45 => 33,  38 => 29,  34 => 28,  30 => 27,  24 => 23,  22 => 22,  19 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ajax/filepicker/files.html.twig", "/var/www/html/administrator/components/com_gantry5/templates/ajax/filepicker/files.html.twig");
    }
}
