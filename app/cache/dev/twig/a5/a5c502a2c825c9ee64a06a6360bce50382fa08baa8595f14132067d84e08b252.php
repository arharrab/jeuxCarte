<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5a9eb75a9fa9db730ffab9b03fe4752125e1480f55db4584e347e91ef1273567 extends Twig_Template
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
        $__internal_66728bc41e2948f76df19755628eb6dbe41916cf6e4092a7900756852e790491 = $this->env->getExtension("native_profiler");
        $__internal_66728bc41e2948f76df19755628eb6dbe41916cf6e4092a7900756852e790491->enter($__internal_66728bc41e2948f76df19755628eb6dbe41916cf6e4092a7900756852e790491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_66728bc41e2948f76df19755628eb6dbe41916cf6e4092a7900756852e790491->leave($__internal_66728bc41e2948f76df19755628eb6dbe41916cf6e4092a7900756852e790491_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
