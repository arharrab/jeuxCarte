<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b5d8612e0aaadc7d40b723bd181a3c6689ce43aee09bda0323996b8e86842e67 extends Twig_Template
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
        $__internal_2354172c961c18373aef6963bebafa64933965bf155af7ad16a4fda7c23a1cf2 = $this->env->getExtension("native_profiler");
        $__internal_2354172c961c18373aef6963bebafa64933965bf155af7ad16a4fda7c23a1cf2->enter($__internal_2354172c961c18373aef6963bebafa64933965bf155af7ad16a4fda7c23a1cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2354172c961c18373aef6963bebafa64933965bf155af7ad16a4fda7c23a1cf2->leave($__internal_2354172c961c18373aef6963bebafa64933965bf155af7ad16a4fda7c23a1cf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
