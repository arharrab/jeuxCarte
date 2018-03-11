<?php

/* AppBundle:categorie:index.html.twig */
class __TwigTemplate_22b39c24bb18806b0f700f12980502ea22f870a76955a84b58eaf556739c5ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:categorie:index.html.twig", 1);
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
        $__internal_725099835aac4e796c1e5e75420ef4c26448590cbb72fb51e50ebb6af0ff1304 = $this->env->getExtension("native_profiler");
        $__internal_725099835aac4e796c1e5e75420ef4c26448590cbb72fb51e50ebb6af0ff1304->enter($__internal_725099835aac4e796c1e5e75420ef4c26448590cbb72fb51e50ebb6af0ff1304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725099835aac4e796c1e5e75420ef4c26448590cbb72fb51e50ebb6af0ff1304->leave($__internal_725099835aac4e796c1e5e75420ef4c26448590cbb72fb51e50ebb6af0ff1304_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68b418eb6668464135d13887880632b0f108dde07a3788363e359844ad0f31c6 = $this->env->getExtension("native_profiler");
        $__internal_68b418eb6668464135d13887880632b0f108dde07a3788363e359844ad0f31c6->enter($__internal_68b418eb6668464135d13887880632b0f108dde07a3788363e359844ad0f31c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie list</h1>
    
    <p class=\"text-right\">
        <a class=\"btn btn-success btn-lg\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\"> <span class=\"fa fa-plus-square\"></span> Ajouter catégorie</a>
    </p>

    <table class=\"table table-bordered table-hover table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "category", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Détails</a> 
                    <a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>                    
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
   
";
        
        $__internal_68b418eb6668464135d13887880632b0f108dde07a3788363e359844ad0f31c6->leave($__internal_68b418eb6668464135d13887880632b0f108dde07a3788363e359844ad0f31c6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  82 => 25,  78 => 24,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categorie list</h1>*/
/*     */
/*     <p class="text-right">*/
/*         <a class="btn btn-success btn-lg" href="{{ path('categorie_new') }}"> <span class="fa fa-plus-square"></span> Ajouter catégorie</a>*/
/*     </p>*/
/* */
/*     <table class="table table-bordered table-hover table-responsive">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Category</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('categorie_show', { 'id': categorie.id }) }}">{{ categorie.id }}</a></td>*/
/*                 <td>{{ categorie.category }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" href="{{ path('categorie_show', { 'id': categorie.id }) }}">Détails</a> */
/*                     <a class="btn btn-warning" href="{{ path('categorie_edit', { 'id': categorie.id }) }}">Modifier</a>                    */
/*                     */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*    */
/* {% endblock %}*/
/* */
