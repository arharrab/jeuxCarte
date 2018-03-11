<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_eed728a9fae07b2cdede3ab04797709b6b8bf72bc732e1b6f8c42b50313a4e1b extends Twig_Template
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
        $__internal_3e7758abbf3c3f542ba422e2542156e9defd9cb0aaff8e79067dbd9c4a9a713e = $this->env->getExtension("native_profiler");
        $__internal_3e7758abbf3c3f542ba422e2542156e9defd9cb0aaff8e79067dbd9c4a9a713e->enter($__internal_3e7758abbf3c3f542ba422e2542156e9defd9cb0aaff8e79067dbd9c4a9a713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3e7758abbf3c3f542ba422e2542156e9defd9cb0aaff8e79067dbd9c4a9a713e->leave($__internal_3e7758abbf3c3f542ba422e2542156e9defd9cb0aaff8e79067dbd9c4a9a713e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
