<?php

/* AppBundle:Carte:new.html.twig */
class __TwigTemplate_8c8e2c0ea477735220ecd9796fc2455178f32fbcadf9253ac56cee6ffb266b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Carte:new.html.twig", 1);
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
        $__internal_4715713b4e02abc8b9b854d26f3151763d4cf62d4f7c253cbb74d5079fae2ba5 = $this->env->getExtension("native_profiler");
        $__internal_4715713b4e02abc8b9b854d26f3151763d4cf62d4f7c253cbb74d5079fae2ba5->enter($__internal_4715713b4e02abc8b9b854d26f3151763d4cf62d4f7c253cbb74d5079fae2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Carte:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4715713b4e02abc8b9b854d26f3151763d4cf62d4f7c253cbb74d5079fae2ba5->leave($__internal_4715713b4e02abc8b9b854d26f3151763d4cf62d4f7c253cbb74d5079fae2ba5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b6a3dabeb0c8b247ec4b4e73e12fb6bf052377573dd2f17cf06f5685049d47 = $this->env->getExtension("native_profiler");
        $__internal_06b6a3dabeb0c8b247ec4b4e73e12fb6bf052377573dd2f17cf06f5685049d47->enter($__internal_06b6a3dabeb0c8b247ec4b4e73e12fb6bf052377573dd2f17cf06f5685049d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Carte creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("carte_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_06b6a3dabeb0c8b247ec4b4e73e12fb6bf052377573dd2f17cf06f5685049d47->leave($__internal_06b6a3dabeb0c8b247ec4b4e73e12fb6bf052377573dd2f17cf06f5685049d47_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Carte:new.html.twig";
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
/*     <h1>Carte creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-primary" type="submit" value="Create" /> */
/*         <input class="btn btn-danger" type="reset" value="Vider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('carte_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
