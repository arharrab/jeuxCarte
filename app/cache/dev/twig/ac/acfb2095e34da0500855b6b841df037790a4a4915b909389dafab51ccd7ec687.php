<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_957c4adc2930744eedac411cf1e4149b1e4408890eb90664aa5a8e4cab349da1 extends Twig_Template
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
        $__internal_bc54f28c32c7de907f749f21d4325ffa8c3fb067a1330742e0c09b01738fc4fa = $this->env->getExtension("native_profiler");
        $__internal_bc54f28c32c7de907f749f21d4325ffa8c3fb067a1330742e0c09b01738fc4fa->enter($__internal_bc54f28c32c7de907f749f21d4325ffa8c3fb067a1330742e0c09b01738fc4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bc54f28c32c7de907f749f21d4325ffa8c3fb067a1330742e0c09b01738fc4fa->leave($__internal_bc54f28c32c7de907f749f21d4325ffa8c3fb067a1330742e0c09b01738fc4fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
