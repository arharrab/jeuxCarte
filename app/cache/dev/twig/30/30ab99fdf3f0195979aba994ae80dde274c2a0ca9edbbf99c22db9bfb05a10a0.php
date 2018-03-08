<?php

/* carte/index.html.twig */
class __TwigTemplate_b227155f081c24de715db388addbd1caa3a8759e2a7928ae09da0705072501ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carte/index.html.twig", 1);
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
        $__internal_7d01fab2abc8b9f0045a128b043b98e5fc37e92fbd5923039fab4fcedc9e87f4 = $this->env->getExtension("native_profiler");
        $__internal_7d01fab2abc8b9f0045a128b043b98e5fc37e92fbd5923039fab4fcedc9e87f4->enter($__internal_7d01fab2abc8b9f0045a128b043b98e5fc37e92fbd5923039fab4fcedc9e87f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d01fab2abc8b9f0045a128b043b98e5fc37e92fbd5923039fab4fcedc9e87f4->leave($__internal_7d01fab2abc8b9f0045a128b043b98e5fc37e92fbd5923039fab4fcedc9e87f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7663b4f22f1620411377fe07a533e6c2fbb95efb113737397f1e3aed746e5a4f = $this->env->getExtension("native_profiler");
        $__internal_7663b4f22f1620411377fe07a533e6c2fbb95efb113737397f1e3aed746e5a4f->enter($__internal_7663b4f22f1620411377fe07a533e6c2fbb95efb113737397f1e3aed746e5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Carte list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartes"]) ? $context["cartes"] : $this->getContext($context, "cartes")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_show", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "value", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_show", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_edit", array("id" => $this->getAttribute($context["carte"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("carte_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7663b4f22f1620411377fe07a533e6c2fbb95efb113737397f1e3aed746e5a4f->leave($__internal_7663b4f22f1620411377fe07a533e6c2fbb95efb113737397f1e3aed746e5a4f_prof);

    }

    public function getTemplateName()
    {
        return "carte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Carte list</h1>*/
/* */
/*     <table>*/
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
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('carte_show', { 'id': carte.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('carte_edit', { 'id': carte.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('carte_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
