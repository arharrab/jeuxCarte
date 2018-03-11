<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b6fcf71a1ea52ab57f024a5558e7e1de7844a2f66c39e8d9789efbc6093d90e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5cdccac97c67ce6f9e314b7b0cdbf5efb0c919e6558bf2410fa3ca30011f62f6 = $this->env->getExtension("native_profiler");
        $__internal_5cdccac97c67ce6f9e314b7b0cdbf5efb0c919e6558bf2410fa3ca30011f62f6->enter($__internal_5cdccac97c67ce6f9e314b7b0cdbf5efb0c919e6558bf2410fa3ca30011f62f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cdccac97c67ce6f9e314b7b0cdbf5efb0c919e6558bf2410fa3ca30011f62f6->leave($__internal_5cdccac97c67ce6f9e314b7b0cdbf5efb0c919e6558bf2410fa3ca30011f62f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0726c3e273bb57d10f4dc44a41c663e640105fdc2c27fe9b0a4a323ebf0360ce = $this->env->getExtension("native_profiler");
        $__internal_0726c3e273bb57d10f4dc44a41c663e640105fdc2c27fe9b0a4a323ebf0360ce->enter($__internal_0726c3e273bb57d10f4dc44a41c663e640105fdc2c27fe9b0a4a323ebf0360ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0726c3e273bb57d10f4dc44a41c663e640105fdc2c27fe9b0a4a323ebf0360ce->leave($__internal_0726c3e273bb57d10f4dc44a41c663e640105fdc2c27fe9b0a4a323ebf0360ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99a362d1779fdafe15caf0ca0853cc1f14bef9a92f5efd787583242d57228137 = $this->env->getExtension("native_profiler");
        $__internal_99a362d1779fdafe15caf0ca0853cc1f14bef9a92f5efd787583242d57228137->enter($__internal_99a362d1779fdafe15caf0ca0853cc1f14bef9a92f5efd787583242d57228137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_99a362d1779fdafe15caf0ca0853cc1f14bef9a92f5efd787583242d57228137->leave($__internal_99a362d1779fdafe15caf0ca0853cc1f14bef9a92f5efd787583242d57228137_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aca311de3e81db44e896d5e6812c02eb4f6eea9e9ef7ef74769d57901a62020 = $this->env->getExtension("native_profiler");
        $__internal_8aca311de3e81db44e896d5e6812c02eb4f6eea9e9ef7ef74769d57901a62020->enter($__internal_8aca311de3e81db44e896d5e6812c02eb4f6eea9e9ef7ef74769d57901a62020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8aca311de3e81db44e896d5e6812c02eb4f6eea9e9ef7ef74769d57901a62020->leave($__internal_8aca311de3e81db44e896d5e6812c02eb4f6eea9e9ef7ef74769d57901a62020_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
