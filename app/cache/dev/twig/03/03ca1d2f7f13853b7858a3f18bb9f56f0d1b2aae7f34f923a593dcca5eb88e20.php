<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_dea4034085aa686a85f6410d8d62ebc447f51bf4aa68cdf860119cf6f98d0789 extends Twig_Template
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
        $__internal_87b7d1f5f11ec4ce4cc348feb1bb57fe577c974d0231b82ba11568013d95be31 = $this->env->getExtension("native_profiler");
        $__internal_87b7d1f5f11ec4ce4cc348feb1bb57fe577c974d0231b82ba11568013d95be31->enter($__internal_87b7d1f5f11ec4ce4cc348feb1bb57fe577c974d0231b82ba11568013d95be31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_87b7d1f5f11ec4ce4cc348feb1bb57fe577c974d0231b82ba11568013d95be31->leave($__internal_87b7d1f5f11ec4ce4cc348feb1bb57fe577c974d0231b82ba11568013d95be31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
