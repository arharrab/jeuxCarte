<?php

/* @App/categorie/show.html.twig */
class __TwigTemplate_ea713a482ea6f2818d0feb0ebe27af7ed1406568fb5befb5f9707851a25d413e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/categorie/show.html.twig", 1);
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
        $__internal_3d21f580bc68cd7fd2a246cf7f5697bb39932851c62321de3fd7b62f1d36f668 = $this->env->getExtension("native_profiler");
        $__internal_3d21f580bc68cd7fd2a246cf7f5697bb39932851c62321de3fd7b62f1d36f668->enter($__internal_3d21f580bc68cd7fd2a246cf7f5697bb39932851c62321de3fd7b62f1d36f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/categorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d21f580bc68cd7fd2a246cf7f5697bb39932851c62321de3fd7b62f1d36f668->leave($__internal_3d21f580bc68cd7fd2a246cf7f5697bb39932851c62321de3fd7b62f1d36f668_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_288bfd2f31920e13915c07512cdbd3c3501df47c26d5e107b5f6757e056346ba = $this->env->getExtension("native_profiler");
        $__internal_288bfd2f31920e13915c07512cdbd3c3501df47c26d5e107b5f6757e056346ba->enter($__internal_288bfd2f31920e13915c07512cdbd3c3501df47c26d5e107b5f6757e056346ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_288bfd2f31920e13915c07512cdbd3c3501df47c26d5e107b5f6757e056346ba->leave($__internal_288bfd2f31920e13915c07512cdbd3c3501df47c26d5e107b5f6757e056346ba_prof);

    }

    public function getTemplateName()
    {
        return "@App/categorie/show.html.twig";
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
