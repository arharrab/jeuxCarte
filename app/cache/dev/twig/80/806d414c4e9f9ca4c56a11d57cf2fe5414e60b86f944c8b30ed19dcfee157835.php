<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8e75f6044d47462d99791bd72b23993bf40b860013add4b4b978cf617ed879b3 extends Twig_Template
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
        $__internal_36fc39b224116711dbd463cf17d92f6b90727c3fcf449c6df6dc66c590fb2f21 = $this->env->getExtension("native_profiler");
        $__internal_36fc39b224116711dbd463cf17d92f6b90727c3fcf449c6df6dc66c590fb2f21->enter($__internal_36fc39b224116711dbd463cf17d92f6b90727c3fcf449c6df6dc66c590fb2f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fc39b224116711dbd463cf17d92f6b90727c3fcf449c6df6dc66c590fb2f21->leave($__internal_36fc39b224116711dbd463cf17d92f6b90727c3fcf449c6df6dc66c590fb2f21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9da267526bddae2948640f0fea54e2369abdd086b097b765fa50316b69d1113 = $this->env->getExtension("native_profiler");
        $__internal_b9da267526bddae2948640f0fea54e2369abdd086b097b765fa50316b69d1113->enter($__internal_b9da267526bddae2948640f0fea54e2369abdd086b097b765fa50316b69d1113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b9da267526bddae2948640f0fea54e2369abdd086b097b765fa50316b69d1113->leave($__internal_b9da267526bddae2948640f0fea54e2369abdd086b097b765fa50316b69d1113_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7832ec499f2f236a62a17a4716da317badb4e621b6b05ec9412b5f3ee11e7b62 = $this->env->getExtension("native_profiler");
        $__internal_7832ec499f2f236a62a17a4716da317badb4e621b6b05ec9412b5f3ee11e7b62->enter($__internal_7832ec499f2f236a62a17a4716da317badb4e621b6b05ec9412b5f3ee11e7b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7832ec499f2f236a62a17a4716da317badb4e621b6b05ec9412b5f3ee11e7b62->leave($__internal_7832ec499f2f236a62a17a4716da317badb4e621b6b05ec9412b5f3ee11e7b62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_33e1231516d2dc0d689bb3e9349a384b3e011aef0c9cd58cd2ef23b8c38d7cbc = $this->env->getExtension("native_profiler");
        $__internal_33e1231516d2dc0d689bb3e9349a384b3e011aef0c9cd58cd2ef23b8c38d7cbc->enter($__internal_33e1231516d2dc0d689bb3e9349a384b3e011aef0c9cd58cd2ef23b8c38d7cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_33e1231516d2dc0d689bb3e9349a384b3e011aef0c9cd58cd2ef23b8c38d7cbc->leave($__internal_33e1231516d2dc0d689bb3e9349a384b3e011aef0c9cd58cd2ef23b8c38d7cbc_prof);

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
