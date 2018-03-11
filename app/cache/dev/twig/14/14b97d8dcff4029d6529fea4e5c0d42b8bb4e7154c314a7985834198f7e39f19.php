<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11adbbce0bd7eb920de05f8fafd39836ee0b2f8d573cbb09fcddb76a3cedf84e extends Twig_Template
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
        $__internal_689f0adf960cc0e69df7ced347f8827da62f1ef4ec2887182a98c889a2bd80a1 = $this->env->getExtension("native_profiler");
        $__internal_689f0adf960cc0e69df7ced347f8827da62f1ef4ec2887182a98c889a2bd80a1->enter($__internal_689f0adf960cc0e69df7ced347f8827da62f1ef4ec2887182a98c889a2bd80a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_689f0adf960cc0e69df7ced347f8827da62f1ef4ec2887182a98c889a2bd80a1->leave($__internal_689f0adf960cc0e69df7ced347f8827da62f1ef4ec2887182a98c889a2bd80a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
