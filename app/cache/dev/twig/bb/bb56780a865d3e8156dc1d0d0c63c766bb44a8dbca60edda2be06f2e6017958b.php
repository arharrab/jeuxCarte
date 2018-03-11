<?php

/* @App/categorie/new.html.twig */
class __TwigTemplate_b2f3de6ba0900799085c594767ecad5a83e3f0f0697c6027ec78fc4df2a76bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/categorie/new.html.twig", 1);
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
        $__internal_860b27b69629486948c4ab463a144bc5112d3b8a6d3671444781d3412448b55f = $this->env->getExtension("native_profiler");
        $__internal_860b27b69629486948c4ab463a144bc5112d3b8a6d3671444781d3412448b55f->enter($__internal_860b27b69629486948c4ab463a144bc5112d3b8a6d3671444781d3412448b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/categorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860b27b69629486948c4ab463a144bc5112d3b8a6d3671444781d3412448b55f->leave($__internal_860b27b69629486948c4ab463a144bc5112d3b8a6d3671444781d3412448b55f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c52707f06434827805a7b593f3da1dae32c2e286e523c99b80f4c702c1ea542c = $this->env->getExtension("native_profiler");
        $__internal_c52707f06434827805a7b593f3da1dae32c2e286e523c99b80f4c702c1ea542c->enter($__internal_c52707f06434827805a7b593f3da1dae32c2e286e523c99b80f4c702c1ea542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c52707f06434827805a7b593f3da1dae32c2e286e523c99b80f4c702c1ea542c->leave($__internal_c52707f06434827805a7b593f3da1dae32c2e286e523c99b80f4c702c1ea542c_prof);

    }

    public function getTemplateName()
    {
        return "@App/categorie/new.html.twig";
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
