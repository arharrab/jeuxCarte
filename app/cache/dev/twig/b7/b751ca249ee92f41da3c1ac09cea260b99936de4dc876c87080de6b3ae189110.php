<?php

/* AppBundle:Categorie:show.html.twig */
class __TwigTemplate_39919fdb7afc6a7fd3a7c9d859e64ba185aab7a342206e5498c9e1ebc4841810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Categorie:show.html.twig", 1);
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
        $__internal_4ee4fb4f19fb6b5a86eb28b4d500bbc76620f72e3e29339b56341cf84e4d4f46 = $this->env->getExtension("native_profiler");
        $__internal_4ee4fb4f19fb6b5a86eb28b4d500bbc76620f72e3e29339b56341cf84e4d4f46->enter($__internal_4ee4fb4f19fb6b5a86eb28b4d500bbc76620f72e3e29339b56341cf84e4d4f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ee4fb4f19fb6b5a86eb28b4d500bbc76620f72e3e29339b56341cf84e4d4f46->leave($__internal_4ee4fb4f19fb6b5a86eb28b4d500bbc76620f72e3e29339b56341cf84e4d4f46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7dbe1e8e91da4940e25dd994ac4482da742c76441ad94b0df1cc81f63a32fdc = $this->env->getExtension("native_profiler");
        $__internal_e7dbe1e8e91da4940e25dd994ac4482da742c76441ad94b0df1cc81f63a32fdc->enter($__internal_e7dbe1e8e91da4940e25dd994ac4482da742c76441ad94b0df1cc81f63a32fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7dbe1e8e91da4940e25dd994ac4482da742c76441ad94b0df1cc81f63a32fdc->leave($__internal_e7dbe1e8e91da4940e25dd994ac4482da742c76441ad94b0df1cc81f63a32fdc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categorie:show.html.twig";
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
