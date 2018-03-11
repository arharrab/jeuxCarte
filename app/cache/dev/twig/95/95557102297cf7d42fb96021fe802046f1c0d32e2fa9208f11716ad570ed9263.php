<?php

/* @App/joueur/show.html.twig */
class __TwigTemplate_dcf3221d8828e8a54c242aeb6d66384b764e5fc9e8d5c6adc5947de57c0b37e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/joueur/show.html.twig", 1);
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
        $__internal_c45cc49cdd0c7eed952a3b3a0bf6ae110e421a80dac0f6b2c6df606487d7245f = $this->env->getExtension("native_profiler");
        $__internal_c45cc49cdd0c7eed952a3b3a0bf6ae110e421a80dac0f6b2c6df606487d7245f->enter($__internal_c45cc49cdd0c7eed952a3b3a0bf6ae110e421a80dac0f6b2c6df606487d7245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/joueur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45cc49cdd0c7eed952a3b3a0bf6ae110e421a80dac0f6b2c6df606487d7245f->leave($__internal_c45cc49cdd0c7eed952a3b3a0bf6ae110e421a80dac0f6b2c6df606487d7245f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a50580ac1ba314f5d7713e261a933bcd60957ba19abca82970f041836b6df2f = $this->env->getExtension("native_profiler");
        $__internal_0a50580ac1ba314f5d7713e261a933bcd60957ba19abca82970f041836b6df2f->enter($__internal_0a50580ac1ba314f5d7713e261a933bcd60957ba19abca82970f041836b6df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Joueur</h1>

    <table class=\"table table-bordered table-hover table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("joueur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</div>
";
        
        $__internal_0a50580ac1ba314f5d7713e261a933bcd60957ba19abca82970f041836b6df2f->leave($__internal_0a50580ac1ba314f5d7713e261a933bcd60957ba19abca82970f041836b6df2f_prof);

    }

    public function getTemplateName()
    {
        return "@App/joueur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>Joueur</h1>*/
/* */
/*     <table class="table table-bordered table-hover table-responsive">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ joueur.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ joueur.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ joueur.email }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('joueur_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
