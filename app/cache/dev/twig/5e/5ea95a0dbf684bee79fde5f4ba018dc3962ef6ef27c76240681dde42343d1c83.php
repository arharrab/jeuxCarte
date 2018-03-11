<?php

/* AppBundle:carte:new.html.twig */
class __TwigTemplate_c4cface21891ea5e7b23cf842ec88459108c6e36667f306eeb7e6183a1e511de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:carte:new.html.twig", 1);
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
        $__internal_69ab769bc8badd4cab32b18a8fe043a6c6cf66dfaed8e5ccd33d093da1606b26 = $this->env->getExtension("native_profiler");
        $__internal_69ab769bc8badd4cab32b18a8fe043a6c6cf66dfaed8e5ccd33d093da1606b26->enter($__internal_69ab769bc8badd4cab32b18a8fe043a6c6cf66dfaed8e5ccd33d093da1606b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:carte:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ab769bc8badd4cab32b18a8fe043a6c6cf66dfaed8e5ccd33d093da1606b26->leave($__internal_69ab769bc8badd4cab32b18a8fe043a6c6cf66dfaed8e5ccd33d093da1606b26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d84e140d986693321ed4c57e8ed6e5480b01ebca6bb7478fb253b90d400950 = $this->env->getExtension("native_profiler");
        $__internal_23d84e140d986693321ed4c57e8ed6e5480b01ebca6bb7478fb253b90d400950->enter($__internal_23d84e140d986693321ed4c57e8ed6e5480b01ebca6bb7478fb253b90d400950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23d84e140d986693321ed4c57e8ed6e5480b01ebca6bb7478fb253b90d400950->leave($__internal_23d84e140d986693321ed4c57e8ed6e5480b01ebca6bb7478fb253b90d400950_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:carte:new.html.twig";
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
