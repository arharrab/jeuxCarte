<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b7e0dc74a27f4cd94e5201325fcde6294815321f28db8edc116425173481f26c extends Twig_Template
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
        $__internal_eca88e4ed6c00f9055efd560018302948b7927092f2e7928287fec210af191c7 = $this->env->getExtension("native_profiler");
        $__internal_eca88e4ed6c00f9055efd560018302948b7927092f2e7928287fec210af191c7->enter($__internal_eca88e4ed6c00f9055efd560018302948b7927092f2e7928287fec210af191c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_eca88e4ed6c00f9055efd560018302948b7927092f2e7928287fec210af191c7->leave($__internal_eca88e4ed6c00f9055efd560018302948b7927092f2e7928287fec210af191c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
