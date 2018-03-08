<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_585c246d22ca015f28120c0a1622a0b9e546feca614e0a07a949bad363602a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89855a0b73d81d61d860d79ae553f73290fcba5dcfddb20c792a2e67419cf9b1 = $this->env->getExtension("native_profiler");
        $__internal_89855a0b73d81d61d860d79ae553f73290fcba5dcfddb20c792a2e67419cf9b1->enter($__internal_89855a0b73d81d61d860d79ae553f73290fcba5dcfddb20c792a2e67419cf9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89855a0b73d81d61d860d79ae553f73290fcba5dcfddb20c792a2e67419cf9b1->leave($__internal_89855a0b73d81d61d860d79ae553f73290fcba5dcfddb20c792a2e67419cf9b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_659e33d8ccb7434dde01ef77718c6fc796c5dcc11d0e34cb1baa975b610d4637 = $this->env->getExtension("native_profiler");
        $__internal_659e33d8ccb7434dde01ef77718c6fc796c5dcc11d0e34cb1baa975b610d4637->enter($__internal_659e33d8ccb7434dde01ef77718c6fc796c5dcc11d0e34cb1baa975b610d4637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_659e33d8ccb7434dde01ef77718c6fc796c5dcc11d0e34cb1baa975b610d4637->leave($__internal_659e33d8ccb7434dde01ef77718c6fc796c5dcc11d0e34cb1baa975b610d4637_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_202220b109860b7db9d4881083631ff98faac1d5482bc19ba32a8e33108f4797 = $this->env->getExtension("native_profiler");
        $__internal_202220b109860b7db9d4881083631ff98faac1d5482bc19ba32a8e33108f4797->enter($__internal_202220b109860b7db9d4881083631ff98faac1d5482bc19ba32a8e33108f4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_202220b109860b7db9d4881083631ff98faac1d5482bc19ba32a8e33108f4797->leave($__internal_202220b109860b7db9d4881083631ff98faac1d5482bc19ba32a8e33108f4797_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d858d34cbe409cd98ff87043ecca47826c3b293449a6bbf661820911d1366520 = $this->env->getExtension("native_profiler");
        $__internal_d858d34cbe409cd98ff87043ecca47826c3b293449a6bbf661820911d1366520->enter($__internal_d858d34cbe409cd98ff87043ecca47826c3b293449a6bbf661820911d1366520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d858d34cbe409cd98ff87043ecca47826c3b293449a6bbf661820911d1366520->leave($__internal_d858d34cbe409cd98ff87043ecca47826c3b293449a6bbf661820911d1366520_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
