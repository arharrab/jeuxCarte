<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_09b9c94cb666c3d4fd6e7d5e9346c77c597a8d6c08f5746d831a822cbec8c933 extends Twig_Template
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
        $__internal_585e3c9fcf943ae7270291f1626e41c35604a0bdd5b146b7551decb53cc57363 = $this->env->getExtension("native_profiler");
        $__internal_585e3c9fcf943ae7270291f1626e41c35604a0bdd5b146b7551decb53cc57363->enter($__internal_585e3c9fcf943ae7270291f1626e41c35604a0bdd5b146b7551decb53cc57363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_585e3c9fcf943ae7270291f1626e41c35604a0bdd5b146b7551decb53cc57363->leave($__internal_585e3c9fcf943ae7270291f1626e41c35604a0bdd5b146b7551decb53cc57363_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
