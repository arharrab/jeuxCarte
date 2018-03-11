<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_43a65678ba865c6e18927001c6535b6ad7908aa29e7c37e926389e326b75f508 extends Twig_Template
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
        $__internal_38908f95d5f9af6fc2061b1f17094ce8348a844013db964f1cb1872a9e5fdfe2 = $this->env->getExtension("native_profiler");
        $__internal_38908f95d5f9af6fc2061b1f17094ce8348a844013db964f1cb1872a9e5fdfe2->enter($__internal_38908f95d5f9af6fc2061b1f17094ce8348a844013db964f1cb1872a9e5fdfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_38908f95d5f9af6fc2061b1f17094ce8348a844013db964f1cb1872a9e5fdfe2->leave($__internal_38908f95d5f9af6fc2061b1f17094ce8348a844013db964f1cb1872a9e5fdfe2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
