<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_684b7ca0c08bc4bd8a1d509031994cd82cc7926eed799adec7532060225a1fed extends Twig_Template
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
        $__internal_9bf812e1e1b52f16dbc7bc9d5fe2f82b94691cdef4131d9e7a0ae166d9051fbf = $this->env->getExtension("native_profiler");
        $__internal_9bf812e1e1b52f16dbc7bc9d5fe2f82b94691cdef4131d9e7a0ae166d9051fbf->enter($__internal_9bf812e1e1b52f16dbc7bc9d5fe2f82b94691cdef4131d9e7a0ae166d9051fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9bf812e1e1b52f16dbc7bc9d5fe2f82b94691cdef4131d9e7a0ae166d9051fbf->leave($__internal_9bf812e1e1b52f16dbc7bc9d5fe2f82b94691cdef4131d9e7a0ae166d9051fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
