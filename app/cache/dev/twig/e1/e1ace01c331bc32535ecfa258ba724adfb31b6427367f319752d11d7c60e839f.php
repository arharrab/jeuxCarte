<?php

/* AppBundle:carte:show.html.twig */
class __TwigTemplate_514567147c867d723dc74ea380ea733cad90d0dd495fcc87323f235a576f9cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:carte:show.html.twig", 1);
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
        $__internal_7d7e0b1987d65df82affcc158ba158f141fa4201b3882e307951d6cae38adf02 = $this->env->getExtension("native_profiler");
        $__internal_7d7e0b1987d65df82affcc158ba158f141fa4201b3882e307951d6cae38adf02->enter($__internal_7d7e0b1987d65df82affcc158ba158f141fa4201b3882e307951d6cae38adf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:carte:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7e0b1987d65df82affcc158ba158f141fa4201b3882e307951d6cae38adf02->leave($__internal_7d7e0b1987d65df82affcc158ba158f141fa4201b3882e307951d6cae38adf02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8f79c050d2b59e4077a8f76563a2f1c597d639fca1d1b8729166d3d5e61476 = $this->env->getExtension("native_profiler");
        $__internal_9c8f79c050d2b59e4077a8f76563a2f1c597d639fca1d1b8729166d3d5e61476->enter($__internal_9c8f79c050d2b59e4077a8f76563a2f1c597d639fca1d1b8729166d3d5e61476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c8f79c050d2b59e4077a8f76563a2f1c597d639fca1d1b8729166d3d5e61476->leave($__internal_9c8f79c050d2b59e4077a8f76563a2f1c597d639fca1d1b8729166d3d5e61476_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:carte:show.html.twig";
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
