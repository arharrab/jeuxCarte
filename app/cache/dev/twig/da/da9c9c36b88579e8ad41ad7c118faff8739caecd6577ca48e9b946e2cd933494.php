<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2b7baa82156f21ed8cfced46748dc51d67b59453f8527e42b2ee9503c10f2545 extends Twig_Template
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
        $__internal_6d935bfcd47d7b035d7decf5c9b94cec4354cb3afea789190cea4ac5b18756d9 = $this->env->getExtension("native_profiler");
        $__internal_6d935bfcd47d7b035d7decf5c9b94cec4354cb3afea789190cea4ac5b18756d9->enter($__internal_6d935bfcd47d7b035d7decf5c9b94cec4354cb3afea789190cea4ac5b18756d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6d935bfcd47d7b035d7decf5c9b94cec4354cb3afea789190cea4ac5b18756d9->leave($__internal_6d935bfcd47d7b035d7decf5c9b94cec4354cb3afea789190cea4ac5b18756d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
