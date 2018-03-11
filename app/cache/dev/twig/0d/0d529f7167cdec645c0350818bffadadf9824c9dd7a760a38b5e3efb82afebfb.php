<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a9aab2df9fbd0b8784fd3dcf5010170359eeaaaa45f4df1049d8be2e1109f21f extends Twig_Template
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
        $__internal_a8d23034f81d05bff8733e0ef174a67a9ba068009726e9ef414835b7d0996daa = $this->env->getExtension("native_profiler");
        $__internal_a8d23034f81d05bff8733e0ef174a67a9ba068009726e9ef414835b7d0996daa->enter($__internal_a8d23034f81d05bff8733e0ef174a67a9ba068009726e9ef414835b7d0996daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a8d23034f81d05bff8733e0ef174a67a9ba068009726e9ef414835b7d0996daa->leave($__internal_a8d23034f81d05bff8733e0ef174a67a9ba068009726e9ef414835b7d0996daa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
