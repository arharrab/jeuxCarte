<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_158542e06290160b1aa22d04b336fe385e590a4bd26c4b8c6eedaf5dc13a589c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_826ec85390ff920ead54f36e1a30185742a317d03cefeb7a80353314ddc9a957 = $this->env->getExtension("native_profiler");
        $__internal_826ec85390ff920ead54f36e1a30185742a317d03cefeb7a80353314ddc9a957->enter($__internal_826ec85390ff920ead54f36e1a30185742a317d03cefeb7a80353314ddc9a957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826ec85390ff920ead54f36e1a30185742a317d03cefeb7a80353314ddc9a957->leave($__internal_826ec85390ff920ead54f36e1a30185742a317d03cefeb7a80353314ddc9a957_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97ac99d752ce089f3afb9e3aa4cef6f304023198b88e2f95321d613f70d94af7 = $this->env->getExtension("native_profiler");
        $__internal_97ac99d752ce089f3afb9e3aa4cef6f304023198b88e2f95321d613f70d94af7->enter($__internal_97ac99d752ce089f3afb9e3aa4cef6f304023198b88e2f95321d613f70d94af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97ac99d752ce089f3afb9e3aa4cef6f304023198b88e2f95321d613f70d94af7->leave($__internal_97ac99d752ce089f3afb9e3aa4cef6f304023198b88e2f95321d613f70d94af7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0764c8882fc705f4d9a8a1c80de6b24f3df6f45af1ee215b90b16aff6775153f = $this->env->getExtension("native_profiler");
        $__internal_0764c8882fc705f4d9a8a1c80de6b24f3df6f45af1ee215b90b16aff6775153f->enter($__internal_0764c8882fc705f4d9a8a1c80de6b24f3df6f45af1ee215b90b16aff6775153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0764c8882fc705f4d9a8a1c80de6b24f3df6f45af1ee215b90b16aff6775153f->leave($__internal_0764c8882fc705f4d9a8a1c80de6b24f3df6f45af1ee215b90b16aff6775153f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64103b66a3212f38656e9b4ddff3059008f65ee513b236fad649e6a465cba812 = $this->env->getExtension("native_profiler");
        $__internal_64103b66a3212f38656e9b4ddff3059008f65ee513b236fad649e6a465cba812->enter($__internal_64103b66a3212f38656e9b4ddff3059008f65ee513b236fad649e6a465cba812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64103b66a3212f38656e9b4ddff3059008f65ee513b236fad649e6a465cba812->leave($__internal_64103b66a3212f38656e9b4ddff3059008f65ee513b236fad649e6a465cba812_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
