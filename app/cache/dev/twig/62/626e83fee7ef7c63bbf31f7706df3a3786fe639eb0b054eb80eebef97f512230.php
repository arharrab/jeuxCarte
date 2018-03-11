<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f67eb61d7b0d163bf7e6489347f27fe3c78728df92bdfb573addbf412972dbb5 extends Twig_Template
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
        $__internal_944f1c0531ebd680b3df62edd2963fb66a2e66babb04319536669809f604724d = $this->env->getExtension("native_profiler");
        $__internal_944f1c0531ebd680b3df62edd2963fb66a2e66babb04319536669809f604724d->enter($__internal_944f1c0531ebd680b3df62edd2963fb66a2e66babb04319536669809f604724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_944f1c0531ebd680b3df62edd2963fb66a2e66babb04319536669809f604724d->leave($__internal_944f1c0531ebd680b3df62edd2963fb66a2e66babb04319536669809f604724d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
