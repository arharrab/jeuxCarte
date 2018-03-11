<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_98b7844c8f407a6a6a29bc8e9a2e458a33ee694ba25b2bca6384ae3f4679637c extends Twig_Template
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
        $__internal_0a8f2269b052056e10ba7138164b9675b27f8acd0c91c228532546e1c4d79b79 = $this->env->getExtension("native_profiler");
        $__internal_0a8f2269b052056e10ba7138164b9675b27f8acd0c91c228532546e1c4d79b79->enter($__internal_0a8f2269b052056e10ba7138164b9675b27f8acd0c91c228532546e1c4d79b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0a8f2269b052056e10ba7138164b9675b27f8acd0c91c228532546e1c4d79b79->leave($__internal_0a8f2269b052056e10ba7138164b9675b27f8acd0c91c228532546e1c4d79b79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
