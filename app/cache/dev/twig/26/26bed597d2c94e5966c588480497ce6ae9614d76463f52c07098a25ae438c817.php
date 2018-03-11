<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ab72dae54d3018f483aa91e657be1835dcfe5c3624420290b466d0757d81ff04 extends Twig_Template
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
        $__internal_ca49b740dd12cc27919341047fb764ef189b33c7492db3791d99bb2413b4b3fd = $this->env->getExtension("native_profiler");
        $__internal_ca49b740dd12cc27919341047fb764ef189b33c7492db3791d99bb2413b4b3fd->enter($__internal_ca49b740dd12cc27919341047fb764ef189b33c7492db3791d99bb2413b4b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ca49b740dd12cc27919341047fb764ef189b33c7492db3791d99bb2413b4b3fd->leave($__internal_ca49b740dd12cc27919341047fb764ef189b33c7492db3791d99bb2413b4b3fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
