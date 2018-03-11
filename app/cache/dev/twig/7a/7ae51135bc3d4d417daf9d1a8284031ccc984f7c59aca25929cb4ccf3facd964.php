<?php

/* @App/carte/index.html.twig */
class __TwigTemplate_8767bb33bee291bdc111bae90d40ce7c03e4f6359b2c8a81b0b250fdd51355d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/carte/index.html.twig", 1);
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
        $__internal_125afefef3f42d6a9452618ef38853c322d1e93f580f2a80922d04b5ac60eb09 = $this->env->getExtension("native_profiler");
        $__internal_125afefef3f42d6a9452618ef38853c322d1e93f580f2a80922d04b5ac60eb09->enter($__internal_125afefef3f42d6a9452618ef38853c322d1e93f580f2a80922d04b5ac60eb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/carte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125afefef3f42d6a9452618ef38853c322d1e93f580f2a80922d04b5ac60eb09->leave($__internal_125afefef3f42d6a9452618ef38853c322d1e93f580f2a80922d04b5ac60eb09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55502d95395eac0b65f41789bda01573660e83e334b55fbfd2568139e0c6e80a = $this->env->getExtension("native_profiler");
        $__internal_55502d95395eac0b65f41789bda01573660e83e334b55fbfd2568139e0c6e80a->enter($__internal_55502d95395eac0b65f41789bda01573660e83e334b55fbfd2568139e0c6e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    
    <h1>Carte list</h1>
        <p class=\"text-right\">
            <a class=\"btn btn-success btn-lg\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("carte_new");
        echo "\"> <span class=\"fa fa-plus-square\"></span> Ajouter carte</a>
        </p>
    <table class=\"table table-bordered table-hover table-responsive\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartes"]) ? $context["cartes"] : $this->getContext($context, "cartes")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_show", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "value", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_show", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">Détails</a> 
                    <a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_edit", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

";
        
        $__internal_55502d95395eac0b65f41789bda01573660e83e334b55fbfd2568139e0c6e80a->leave($__internal_55502d95395eac0b65f41789bda01573660e83e334b55fbfd2568139e0c6e80a_prof);

    }

    public function getTemplateName()
    {
        return "@App/carte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  82 => 25,  78 => 24,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/*     <h1>Carte list</h1>*/
/*         <p class="text-right">*/
/*             <a class="btn btn-success btn-lg" href="{{ path('carte_new') }}"> <span class="fa fa-plus-square"></span> Ajouter carte</a>*/
/*         </p>*/
/*     <table class="table table-bordered table-hover table-responsive">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Value</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for carte in cartes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('carte_show', { 'id': carte.id }) }}">{{ carte.id }}</a></td>*/
/*                 <td>{{ carte.value }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" href="{{ path('carte_show', { 'id': carte.id }) }}">Détails</a> */
/*                     <a class="btn btn-warning" href="{{ path('carte_edit', { 'id': carte.id }) }}">Modifier</a>                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
