<?php

/* @App/carte/show.html.twig */
class __TwigTemplate_4eb67cca4f7dc007f6517097c6ee6a23090b07a5b054171e6e73dd337bc93844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/carte/show.html.twig", 1);
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
        $__internal_7a92ea51827838d3635e762d3e1defcc0738131dbf1fae28f9cb05721c59caf7 = $this->env->getExtension("native_profiler");
        $__internal_7a92ea51827838d3635e762d3e1defcc0738131dbf1fae28f9cb05721c59caf7->enter($__internal_7a92ea51827838d3635e762d3e1defcc0738131dbf1fae28f9cb05721c59caf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/carte/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a92ea51827838d3635e762d3e1defcc0738131dbf1fae28f9cb05721c59caf7->leave($__internal_7a92ea51827838d3635e762d3e1defcc0738131dbf1fae28f9cb05721c59caf7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08860e8166311b7b6b86d84c7da2940e9db77f09e5cd2dfae84cdaa8e566b36e = $this->env->getExtension("native_profiler");
        $__internal_08860e8166311b7b6b86d84c7da2940e9db77f09e5cd2dfae84cdaa8e566b36e->enter($__internal_08860e8166311b7b6b86d84c7da2940e9db77f09e5cd2dfae84cdaa8e566b36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Carte</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carte"]) ? $context["carte"] : $this->getContext($context, "carte")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carte"]) ? $context["carte"] : $this->getContext($context, "carte")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("carte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("carte_edit", array("id" => $this->getAttribute((isset($context["carte"]) ? $context["carte"] : $this->getContext($context, "carte")), "id", array()))), "html", null, true);
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
        
        $__internal_08860e8166311b7b6b86d84c7da2940e9db77f09e5cd2dfae84cdaa8e566b36e->leave($__internal_08860e8166311b7b6b86d84c7da2940e9db77f09e5cd2dfae84cdaa8e566b36e_prof);

    }

    public function getTemplateName()
    {
        return "@App/carte/show.html.twig";
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
/*     <h1>Carte</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ carte.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Value</th>*/
/*                 <td>{{ carte.value }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('carte_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('carte_edit', { 'id': carte.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
