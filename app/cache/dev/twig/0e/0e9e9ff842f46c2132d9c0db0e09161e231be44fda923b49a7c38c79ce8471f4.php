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
        $__internal_4e72833875d642cdd3325b6e61ea1509ae7839381b05268e9b08044f367aa89f = $this->env->getExtension("native_profiler");
        $__internal_4e72833875d642cdd3325b6e61ea1509ae7839381b05268e9b08044f367aa89f->enter($__internal_4e72833875d642cdd3325b6e61ea1509ae7839381b05268e9b08044f367aa89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e72833875d642cdd3325b6e61ea1509ae7839381b05268e9b08044f367aa89f->leave($__internal_4e72833875d642cdd3325b6e61ea1509ae7839381b05268e9b08044f367aa89f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a70427f0c7d6727919badd02168c5e3fcbcc4b87b1cfa851a7fd8473c3028743 = $this->env->getExtension("native_profiler");
        $__internal_a70427f0c7d6727919badd02168c5e3fcbcc4b87b1cfa851a7fd8473c3028743->enter($__internal_a70427f0c7d6727919badd02168c5e3fcbcc4b87b1cfa851a7fd8473c3028743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a70427f0c7d6727919badd02168c5e3fcbcc4b87b1cfa851a7fd8473c3028743->leave($__internal_a70427f0c7d6727919badd02168c5e3fcbcc4b87b1cfa851a7fd8473c3028743_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fe96406da9d9faf221665ce25b53d039e130f47749ddb263d69ebb1407835dc = $this->env->getExtension("native_profiler");
        $__internal_7fe96406da9d9faf221665ce25b53d039e130f47749ddb263d69ebb1407835dc->enter($__internal_7fe96406da9d9faf221665ce25b53d039e130f47749ddb263d69ebb1407835dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fe96406da9d9faf221665ce25b53d039e130f47749ddb263d69ebb1407835dc->leave($__internal_7fe96406da9d9faf221665ce25b53d039e130f47749ddb263d69ebb1407835dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_141db8851db1251ce3c40282198a383c5cc8d05ed6158bdd091cd3a9dcf6c7e3 = $this->env->getExtension("native_profiler");
        $__internal_141db8851db1251ce3c40282198a383c5cc8d05ed6158bdd091cd3a9dcf6c7e3->enter($__internal_141db8851db1251ce3c40282198a383c5cc8d05ed6158bdd091cd3a9dcf6c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_141db8851db1251ce3c40282198a383c5cc8d05ed6158bdd091cd3a9dcf6c7e3->leave($__internal_141db8851db1251ce3c40282198a383c5cc8d05ed6158bdd091cd3a9dcf6c7e3_prof);

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
