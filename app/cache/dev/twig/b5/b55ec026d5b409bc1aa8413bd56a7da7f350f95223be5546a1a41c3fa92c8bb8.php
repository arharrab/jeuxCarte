<?php

/* AppBundle:Categorie:new.html.twig */
class __TwigTemplate_ba9a5838a755b765b33d7146383332449a4bd71505d4426a617bfa085fc176f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Categorie:new.html.twig", 1);
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
        $__internal_a92ecb9fabe68d911d6b5749b134a3f6df383f45692ac321ab2145fd3c12022b = $this->env->getExtension("native_profiler");
        $__internal_a92ecb9fabe68d911d6b5749b134a3f6df383f45692ac321ab2145fd3c12022b->enter($__internal_a92ecb9fabe68d911d6b5749b134a3f6df383f45692ac321ab2145fd3c12022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categorie:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92ecb9fabe68d911d6b5749b134a3f6df383f45692ac321ab2145fd3c12022b->leave($__internal_a92ecb9fabe68d911d6b5749b134a3f6df383f45692ac321ab2145fd3c12022b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b556750e0f1cbbf405678d458501f8c557ad66dae9ad9f9b2f149d0128f16c8 = $this->env->getExtension("native_profiler");
        $__internal_5b556750e0f1cbbf405678d458501f8c557ad66dae9ad9f9b2f149d0128f16c8->enter($__internal_5b556750e0f1cbbf405678d458501f8c557ad66dae9ad9f9b2f149d0128f16c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b556750e0f1cbbf405678d458501f8c557ad66dae9ad9f9b2f149d0128f16c8->leave($__internal_5b556750e0f1cbbf405678d458501f8c557ad66dae9ad9f9b2f149d0128f16c8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categorie:new.html.twig";
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
