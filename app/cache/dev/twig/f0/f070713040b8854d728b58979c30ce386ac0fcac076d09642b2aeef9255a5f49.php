<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f179a4e1c1e663f110e9f56057a55b21171b72ae50cebdef504f5f33d4456f80 extends Twig_Template
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
        $__internal_95d92dec3c571da086024d17bf088ad6f6f34da83c68900f2f6f67ac03514ba0 = $this->env->getExtension("native_profiler");
        $__internal_95d92dec3c571da086024d17bf088ad6f6f34da83c68900f2f6f67ac03514ba0->enter($__internal_95d92dec3c571da086024d17bf088ad6f6f34da83c68900f2f6f67ac03514ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_95d92dec3c571da086024d17bf088ad6f6f34da83c68900f2f6f67ac03514ba0->leave($__internal_95d92dec3c571da086024d17bf088ad6f6f34da83c68900f2f6f67ac03514ba0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
