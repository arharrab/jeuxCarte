<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_61793d6417aaa10ae8566d3a538de4064cfc2f361e5630cb7934930b64a8375a extends Twig_Template
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
        $__internal_e73a7379843305979324779176e1d177217b96147bb4324be0125d8edf53a60e = $this->env->getExtension("native_profiler");
        $__internal_e73a7379843305979324779176e1d177217b96147bb4324be0125d8edf53a60e->enter($__internal_e73a7379843305979324779176e1d177217b96147bb4324be0125d8edf53a60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e73a7379843305979324779176e1d177217b96147bb4324be0125d8edf53a60e->leave($__internal_e73a7379843305979324779176e1d177217b96147bb4324be0125d8edf53a60e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
