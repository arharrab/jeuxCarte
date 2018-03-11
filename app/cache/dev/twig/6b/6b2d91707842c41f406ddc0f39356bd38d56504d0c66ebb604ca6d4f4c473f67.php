<?php

/* @App/carte/new.html.twig */
class __TwigTemplate_72a706a5d8cc15c7605827e171ef1a1977af4c23665eafb1ae7671bd7efe0462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/carte/new.html.twig", 1);
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
        $__internal_b1d61b59068e4c41d601680f16f48538475d0a25a58d13bde7d13a5e437c834d = $this->env->getExtension("native_profiler");
        $__internal_b1d61b59068e4c41d601680f16f48538475d0a25a58d13bde7d13a5e437c834d->enter($__internal_b1d61b59068e4c41d601680f16f48538475d0a25a58d13bde7d13a5e437c834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/carte/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d61b59068e4c41d601680f16f48538475d0a25a58d13bde7d13a5e437c834d->leave($__internal_b1d61b59068e4c41d601680f16f48538475d0a25a58d13bde7d13a5e437c834d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcef17071115da6bc2eeba03ff548fca5fd0b7ef4a35bda5bee1edabf31c4794 = $this->env->getExtension("native_profiler");
        $__internal_fcef17071115da6bc2eeba03ff548fca5fd0b7ef4a35bda5bee1edabf31c4794->enter($__internal_fcef17071115da6bc2eeba03ff548fca5fd0b7ef4a35bda5bee1edabf31c4794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fcef17071115da6bc2eeba03ff548fca5fd0b7ef4a35bda5bee1edabf31c4794->leave($__internal_fcef17071115da6bc2eeba03ff548fca5fd0b7ef4a35bda5bee1edabf31c4794_prof);

    }

    public function getTemplateName()
    {
        return "@App/carte/new.html.twig";
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
