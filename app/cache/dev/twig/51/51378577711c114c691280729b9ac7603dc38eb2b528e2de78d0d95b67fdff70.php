<?php

/* AppBundle:categorie:show.html.twig */
class __TwigTemplate_a4b0bc025ac44e3217090b58668af9bc45cb7787cb413741d4e4bc2943831885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:categorie:show.html.twig", 1);
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
        $__internal_e56549fb6975a8e8c04e1dbe59b36a5c285b6f7b8b73f1a3ad344ee7cbd3190c = $this->env->getExtension("native_profiler");
        $__internal_e56549fb6975a8e8c04e1dbe59b36a5c285b6f7b8b73f1a3ad344ee7cbd3190c->enter($__internal_e56549fb6975a8e8c04e1dbe59b36a5c285b6f7b8b73f1a3ad344ee7cbd3190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:categorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56549fb6975a8e8c04e1dbe59b36a5c285b6f7b8b73f1a3ad344ee7cbd3190c->leave($__internal_e56549fb6975a8e8c04e1dbe59b36a5c285b6f7b8b73f1a3ad344ee7cbd3190c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_534fed93dd25f64492229d97da807cda298647e11ca0dd82880d640e33760e67 = $this->env->getExtension("native_profiler");
        $__internal_534fed93dd25f64492229d97da807cda298647e11ca0dd82880d640e33760e67->enter($__internal_534fed93dd25f64492229d97da807cda298647e11ca0dd82880d640e33760e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "category", array()), "html", null, true);
        echo "</td>
            </tr>           
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_edit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_534fed93dd25f64492229d97da807cda298647e11ca0dd82880d640e33760e67->leave($__internal_534fed93dd25f64492229d97da807cda298647e11ca0dd82880d640e33760e67_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categorie</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ categorie.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Category</th>*/
/*                 <td>{{ categorie.category }}</td>*/
/*             </tr>           */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('categorie_edit', { 'id': categorie.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
