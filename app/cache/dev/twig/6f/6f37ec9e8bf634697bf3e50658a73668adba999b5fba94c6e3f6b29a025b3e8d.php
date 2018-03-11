<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ff964a0e94063981a4faa86c011fd6a55d4c0c2878fe1cf147afe6634240cc04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0c0d7085fc06147b3391fab9227395416228216ad272a8d9b95b2f3f92ff216a = $this->env->getExtension("native_profiler");
        $__internal_0c0d7085fc06147b3391fab9227395416228216ad272a8d9b95b2f3f92ff216a->enter($__internal_0c0d7085fc06147b3391fab9227395416228216ad272a8d9b95b2f3f92ff216a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0d7085fc06147b3391fab9227395416228216ad272a8d9b95b2f3f92ff216a->leave($__internal_0c0d7085fc06147b3391fab9227395416228216ad272a8d9b95b2f3f92ff216a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aff0ed34ee1743800af855eabe7e1889a7330e623bc25e973617cb6e96f272c1 = $this->env->getExtension("native_profiler");
        $__internal_aff0ed34ee1743800af855eabe7e1889a7330e623bc25e973617cb6e96f272c1->enter($__internal_aff0ed34ee1743800af855eabe7e1889a7330e623bc25e973617cb6e96f272c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aff0ed34ee1743800af855eabe7e1889a7330e623bc25e973617cb6e96f272c1->leave($__internal_aff0ed34ee1743800af855eabe7e1889a7330e623bc25e973617cb6e96f272c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32dcecf8de19735be0b7269ee13b21b0360bbf4962c3a1637b4918b4af79c3cb = $this->env->getExtension("native_profiler");
        $__internal_32dcecf8de19735be0b7269ee13b21b0360bbf4962c3a1637b4918b4af79c3cb->enter($__internal_32dcecf8de19735be0b7269ee13b21b0360bbf4962c3a1637b4918b4af79c3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32dcecf8de19735be0b7269ee13b21b0360bbf4962c3a1637b4918b4af79c3cb->leave($__internal_32dcecf8de19735be0b7269ee13b21b0360bbf4962c3a1637b4918b4af79c3cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e551199e62dc2fdcae469ad77db54ff6831607c8e52346f3d48f891fb1897508 = $this->env->getExtension("native_profiler");
        $__internal_e551199e62dc2fdcae469ad77db54ff6831607c8e52346f3d48f891fb1897508->enter($__internal_e551199e62dc2fdcae469ad77db54ff6831607c8e52346f3d48f891fb1897508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e551199e62dc2fdcae469ad77db54ff6831607c8e52346f3d48f891fb1897508->leave($__internal_e551199e62dc2fdcae469ad77db54ff6831607c8e52346f3d48f891fb1897508_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
