<?php

/* AppBundle:categorie:new.html.twig */
class __TwigTemplate_5420b533905e38e7dfb2ba6dcb9d69d5c9d33f2abea30fd63446214065c984d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:categorie:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c061b5ed8bec5b852304943eb28599cb9ef321d5be9c3de09f32f19d80fc1600 = $this->env->getExtension("native_profiler");
        $__internal_c061b5ed8bec5b852304943eb28599cb9ef321d5be9c3de09f32f19d80fc1600->enter($__internal_c061b5ed8bec5b852304943eb28599cb9ef321d5be9c3de09f32f19d80fc1600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:categorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c061b5ed8bec5b852304943eb28599cb9ef321d5be9c3de09f32f19d80fc1600->leave($__internal_c061b5ed8bec5b852304943eb28599cb9ef321d5be9c3de09f32f19d80fc1600_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5946d6b1ab348f1b4fafc69395f58c0a8282481e685e0288bb41442c04bc3e70 = $this->env->getExtension("native_profiler");
        $__internal_5946d6b1ab348f1b4fafc69395f58c0a8282481e685e0288bb41442c04bc3e70->enter($__internal_5946d6b1ab348f1b4fafc69395f58c0a8282481e685e0288bb41442c04bc3e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" /> 
        <input class=\"btn btn-danger\" type=\"reset\" value=\"Vider\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5946d6b1ab348f1b4fafc69395f58c0a8282481e685e0288bb41442c04bc3e70->leave($__internal_5946d6b1ab348f1b4fafc69395f58c0a8282481e685e0288bb41442c04bc3e70_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:categorie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categorie creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-primary" type="submit" value="Create" /> */
/*         <input class="btn btn-danger" type="reset" value="Vider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
