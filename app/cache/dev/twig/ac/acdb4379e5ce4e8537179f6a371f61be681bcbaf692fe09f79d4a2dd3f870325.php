<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e20c3da82a8735abdc20690015feb2e81680affe1ebb6a639acff683d51db003 extends Twig_Template
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
        $__internal_742e041842abcae7919456d5231cfb23a54612f695343a1260a3da83b02cd07e = $this->env->getExtension("native_profiler");
        $__internal_742e041842abcae7919456d5231cfb23a54612f695343a1260a3da83b02cd07e->enter($__internal_742e041842abcae7919456d5231cfb23a54612f695343a1260a3da83b02cd07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_742e041842abcae7919456d5231cfb23a54612f695343a1260a3da83b02cd07e->leave($__internal_742e041842abcae7919456d5231cfb23a54612f695343a1260a3da83b02cd07e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
