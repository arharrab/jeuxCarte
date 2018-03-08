<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c4c56bcbf94df632cbf926ffe9084ed27e3771299b7a83bbf97bd554b54e36d extends Twig_Template
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
        $__internal_3884d435adab22a0f2789bba9ec701d5884179a6df5c13a4fb9528e94375020b = $this->env->getExtension("native_profiler");
        $__internal_3884d435adab22a0f2789bba9ec701d5884179a6df5c13a4fb9528e94375020b->enter($__internal_3884d435adab22a0f2789bba9ec701d5884179a6df5c13a4fb9528e94375020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3884d435adab22a0f2789bba9ec701d5884179a6df5c13a4fb9528e94375020b->leave($__internal_3884d435adab22a0f2789bba9ec701d5884179a6df5c13a4fb9528e94375020b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3008c73575f343a76989a0755d8d379d6c7c5c4e51de623f28aec2a2387455a8 = $this->env->getExtension("native_profiler");
        $__internal_3008c73575f343a76989a0755d8d379d6c7c5c4e51de623f28aec2a2387455a8->enter($__internal_3008c73575f343a76989a0755d8d379d6c7c5c4e51de623f28aec2a2387455a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3008c73575f343a76989a0755d8d379d6c7c5c4e51de623f28aec2a2387455a8->leave($__internal_3008c73575f343a76989a0755d8d379d6c7c5c4e51de623f28aec2a2387455a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17721ffce46c0d0f85e518c5da4beb398b6fa7088925cb2f7753895aafb79f8f = $this->env->getExtension("native_profiler");
        $__internal_17721ffce46c0d0f85e518c5da4beb398b6fa7088925cb2f7753895aafb79f8f->enter($__internal_17721ffce46c0d0f85e518c5da4beb398b6fa7088925cb2f7753895aafb79f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17721ffce46c0d0f85e518c5da4beb398b6fa7088925cb2f7753895aafb79f8f->leave($__internal_17721ffce46c0d0f85e518c5da4beb398b6fa7088925cb2f7753895aafb79f8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_705ca06d93951a6f7f1da7f1c79684ce37d8b495d0e312f8ca4a32173518439a = $this->env->getExtension("native_profiler");
        $__internal_705ca06d93951a6f7f1da7f1c79684ce37d8b495d0e312f8ca4a32173518439a->enter($__internal_705ca06d93951a6f7f1da7f1c79684ce37d8b495d0e312f8ca4a32173518439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_705ca06d93951a6f7f1da7f1c79684ce37d8b495d0e312f8ca4a32173518439a->leave($__internal_705ca06d93951a6f7f1da7f1c79684ce37d8b495d0e312f8ca4a32173518439a_prof);

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
