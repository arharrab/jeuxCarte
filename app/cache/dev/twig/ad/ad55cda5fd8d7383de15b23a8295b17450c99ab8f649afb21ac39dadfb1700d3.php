<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3974cc6ca7e1f0356e78818dc86da4005dce0bb62de1a0ae11c83c50178cd790 extends Twig_Template
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
        $__internal_627fd7fb4d009453d298db79d6432a73cfa536b7483b22a0ec0834a73debe4b7 = $this->env->getExtension("native_profiler");
        $__internal_627fd7fb4d009453d298db79d6432a73cfa536b7483b22a0ec0834a73debe4b7->enter($__internal_627fd7fb4d009453d298db79d6432a73cfa536b7483b22a0ec0834a73debe4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_627fd7fb4d009453d298db79d6432a73cfa536b7483b22a0ec0834a73debe4b7->leave($__internal_627fd7fb4d009453d298db79d6432a73cfa536b7483b22a0ec0834a73debe4b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
