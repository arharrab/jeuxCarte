<?php

/* @App/joueur/index.html.twig */
class __TwigTemplate_eedad1a77de8f1a7e27742822458ef9212b78b4dbcd0484aa2e40320004a2886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/joueur/index.html.twig", 1);
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
        $__internal_6e0afad79ef5b7981ab25490aabccd9148378f7dda31e1d0aa218e73e19cadd0 = $this->env->getExtension("native_profiler");
        $__internal_6e0afad79ef5b7981ab25490aabccd9148378f7dda31e1d0aa218e73e19cadd0->enter($__internal_6e0afad79ef5b7981ab25490aabccd9148378f7dda31e1d0aa218e73e19cadd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/joueur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0afad79ef5b7981ab25490aabccd9148378f7dda31e1d0aa218e73e19cadd0->leave($__internal_6e0afad79ef5b7981ab25490aabccd9148378f7dda31e1d0aa218e73e19cadd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e4b2f58f1404887aa19bb9e1013d988696a041f15e17fa63e800372ebb3051 = $this->env->getExtension("native_profiler");
        $__internal_22e4b2f58f1404887aa19bb9e1013d988696a041f15e17fa63e800372ebb3051->enter($__internal_22e4b2f58f1404887aa19bb9e1013d988696a041f15e17fa63e800372ebb3051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Liste des Joueurs</h1>
    <p class=\"text-right\">
        <a class=\"btn btn-success btn-lg\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("joueur_new");
        echo "\"> <span class=\"fa fa-plus-square\"></span> Ajouter joueur</a>
    </p>
    <table class=\"table table-bordered table-hover table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute($context["joueur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["joueur"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_show", array("id" => $this->getAttribute($context["joueur"], "id", array()))), "html", null, true);
            echo "\">Détails</a> 
                    <a class=\"btn btn-warning\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("joueur_edit", array("id" => $this->getAttribute($context["joueur"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    
";
        
        $__internal_22e4b2f58f1404887aa19bb9e1013d988696a041f15e17fa63e800372ebb3051->leave($__internal_22e4b2f58f1404887aa19bb9e1013d988696a041f15e17fa63e800372ebb3051_prof);

    }

    public function getTemplateName()
    {
        return "@App/joueur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  86 => 26,  82 => 25,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Liste des Joueurs</h1>*/
/*     <p class="text-right">*/
/*         <a class="btn btn-success btn-lg" href="{{ path('joueur_new') }}"> <span class="fa fa-plus-square"></span> Ajouter joueur</a>*/
/*     </p>*/
/*     <table class="table table-bordered table-hover table-responsive">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for joueur in joueurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('joueur_show', { 'id': joueur.id }) }}">{{ joueur.id }}</a></td>*/
/*                 <td>{{ joueur.nom }}</td>*/
/*                 <td>{{ joueur.email }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" href="{{ path('joueur_show', { 'id': joueur.id }) }}">Détails</a> */
/*                     <a class="btn btn-warning" href="{{ path('joueur_edit', { 'id': joueur.id }) }}">Modifier</a>                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
