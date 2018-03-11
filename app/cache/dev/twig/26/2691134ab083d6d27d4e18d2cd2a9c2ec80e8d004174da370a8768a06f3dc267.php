<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ddae83d52a7f3d3665bf6f56dc16c07b264acf7a47fee93be73b0f5f0d5b4107 extends Twig_Template
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
        $__internal_aa68a6c708174f64062a4995256fcb822dd254e6f7dc26488a5e6b865fa2e332 = $this->env->getExtension("native_profiler");
        $__internal_aa68a6c708174f64062a4995256fcb822dd254e6f7dc26488a5e6b865fa2e332->enter($__internal_aa68a6c708174f64062a4995256fcb822dd254e6f7dc26488a5e6b865fa2e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aa68a6c708174f64062a4995256fcb822dd254e6f7dc26488a5e6b865fa2e332->leave($__internal_aa68a6c708174f64062a4995256fcb822dd254e6f7dc26488a5e6b865fa2e332_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
