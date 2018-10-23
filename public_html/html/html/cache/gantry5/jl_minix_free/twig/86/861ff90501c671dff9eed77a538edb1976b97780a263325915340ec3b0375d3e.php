<?php

/* @particles/backtotop.html.twig */
class __TwigTemplate_5694a39ede5e5190c3fefd9935da60cf6aa72e766414a53866ba0010424d3aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/backtotop.html.twig", 1);
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

    // line 3
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 5
        echo "  <script>
  jQuery(function(\$) {
    var a = document.createElement('a');
    a.className += 'back-to-top';
    a.title = 'Back to top';
    a.innerHTML = '";
        // line 10
        if ($this->getAttribute(($context["particle"] ?? null), "icon", array())) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", array()), "html", null, true);
            echo "\"></i> ";
        } else {
            echo " &uarr; ";
        }
        echo "';

    document.getElementsByTagName('body')[0].appendChild(a);
      if (\$('.back-to-top').length) {
          var scrollTrigger = 100, // px
              backToTop = function() {
                  var scrollTop = \$(window).scrollTop();
                  if (scrollTop > scrollTrigger) {
                      \$('.back-to-top').removeClass('backHide');
                  } else {
                      \$('.back-to-top').addClass('backHide');
                  }
              };
          backToTop();
          \$(window).on('scroll', function() {
              backToTop();
          });
          \$('.back-to-top').on('click', function(e) {
              e.preventDefault();
              \$('html,body').animate({
                  scrollTop: 0
              }, 700);
          });
      }
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/backtotop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/backtotop.html.twig", "/var/www/html/templates/jl_minix_free/custom/particles/backtotop.html.twig");
    }
}
