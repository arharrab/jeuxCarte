<?php

/* AppBundle:joueur:show.html.twig */
class __TwigTemplate_fd29317ad321d8c05226408256f78f71efba4aca0f9612a0ed4fb93aabfe33e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:joueur:show.html.twig", 1);
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
        $__internal_0dfe861b98388b2d7029145a1bc5dc48508a2ffab80108a3039ce186616cfd8d = $this->env->getExtension("native_profiler");
        $__internal_0dfe861b98388b2d7029145a1bc5dc48508a2ffab80108a3039ce186616cfd8d->enter($__internal_0dfe861b98388b2d7029145a1bc5dc48508a2ffab80108a3039ce186616cfd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:joueur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfe861b98388b2d7029145a1bc5dc48508a2ffab80108a3039ce186616cfd8d->leave($__internal_0dfe861b98388b2d7029145a1bc5dc48508a2ffab80108a3039ce186616cfd8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7fa7bacd293dfaedd18f4d22ffd42dc769f606fbf0616a9f6ea1b8471befa5 = $this->env->getExtension("native_profiler");
        $__internal_aa7fa7bacd293dfaedd18f4d22ffd42dc769f606fbf0616a9f6ea1b8471befa5->enter($__internal_aa7fa7bacd293dfaedd18f4d22ffd42dc769f606fbf0616a9f6ea1b8471befa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa7fa7bacd293dfaedd18f4d22ffd42dc769f606fbf0616a9f6ea1b8471befa5->leave($__internal_aa7fa7bacd293dfaedd18f4d22ffd42dc769f606fbf0616a9f6ea1b8471befa5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:joueur:show.html.twig";
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
