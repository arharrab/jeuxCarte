<?php

/* AppBundle:Categorie:index.html.twig */
class __TwigTemplate_b91e3c1114fc4fb1b90fc22d2e695624c09c834509438bc43286ad795d5a1953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Categorie:index.html.twig", 1);
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
        $__internal_9cfffd9f513de4f1844592151e7f7c7814e3cee8cda58866e80559bcd6c66c7d = $this->env->getExtension("native_profiler");
        $__internal_9cfffd9f513de4f1844592151e7f7c7814e3cee8cda58866e80559bcd6c66c7d->enter($__internal_9cfffd9f513de4f1844592151e7f7c7814e3cee8cda58866e80559bcd6c66c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfffd9f513de4f1844592151e7f7c7814e3cee8cda58866e80559bcd6c66c7d->leave($__internal_9cfffd9f513de4f1844592151e7f7c7814e3cee8cda58866e80559bcd6c66c7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1329fb2cb5eb4a624759f3cec164d0c52af1e669ef14a9c3af8f6d538721305c = $this->env->getExtension("native_profiler");
        $__internal_1329fb2cb5eb4a624759f3cec164d0c52af1e669ef14a9c3af8f6d538721305c->enter($__internal_1329fb2cb5eb4a624759f3cec164d0c52af1e669ef14a9c3af8f6d538721305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1329fb2cb5eb4a624759f3cec164d0c52af1e669ef14a9c3af8f6d538721305c->leave($__internal_1329fb2cb5eb4a624759f3cec164d0c52af1e669ef14a9c3af8f6d538721305c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categorie:index.html.twig";
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
