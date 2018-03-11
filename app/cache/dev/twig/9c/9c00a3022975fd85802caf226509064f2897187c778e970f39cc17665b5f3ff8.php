<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3104b36d032b0d5f836e1d2060891bb3895379a4efab3d888d6484b74e1e01e6 extends Twig_Template
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
        $__internal_66ade7b73f7989ac00a9d20fbc1aeccadaedf3d8e2a023fa4f54bedc2ddf3e41 = $this->env->getExtension("native_profiler");
        $__internal_66ade7b73f7989ac00a9d20fbc1aeccadaedf3d8e2a023fa4f54bedc2ddf3e41->enter($__internal_66ade7b73f7989ac00a9d20fbc1aeccadaedf3d8e2a023fa4f54bedc2ddf3e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_66ade7b73f7989ac00a9d20fbc1aeccadaedf3d8e2a023fa4f54bedc2ddf3e41->leave($__internal_66ade7b73f7989ac00a9d20fbc1aeccadaedf3d8e2a023fa4f54bedc2ddf3e41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
