<?php

/* AppBundle:carte:edit.html.twig */
class __TwigTemplate_7251d44d0dc451a6a010a4fec20d12c5d6f6e75ab4f83a00ecf5017b813c2502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:carte:edit.html.twig", 1);
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
        $__internal_f481c5021ba21d7147f8a1833055c5302910487fc6f058cb4e938ee126a322da = $this->env->getExtension("native_profiler");
        $__internal_f481c5021ba21d7147f8a1833055c5302910487fc6f058cb4e938ee126a322da->enter($__internal_f481c5021ba21d7147f8a1833055c5302910487fc6f058cb4e938ee126a322da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:carte:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f481c5021ba21d7147f8a1833055c5302910487fc6f058cb4e938ee126a322da->leave($__internal_f481c5021ba21d7147f8a1833055c5302910487fc6f058cb4e938ee126a322da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4290172656b1dd84a3ed02aaef9d5791ad6b2c90a985ffc120c372cbbdd99ad = $this->env->getExtension("native_profiler");
        $__internal_b4290172656b1dd84a3ed02aaef9d5791ad6b2c90a985ffc120c372cbbdd99ad->enter($__internal_b4290172656b1dd84a3ed02aaef9d5791ad6b2c90a985ffc120c372cbbdd99ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Carte edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"form-group\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "value", array()), 'label');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "value", array()), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "value", array()), 'widget');
        echo "
        </div>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categorie", array()), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categorie", array()), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categorie", array()), 'widget');
        echo "
        </div>
    </div>
        
          <input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" />
        
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <p>
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\"/>
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>

    <ul>
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("carte_index");
        echo "\">Back to the list</a>
        </li>
       
    </ul>
";
        
        $__internal_b4290172656b1dd84a3ed02aaef9d5791ad6b2c90a985ffc120c372cbbdd99ad->leave($__internal_b4290172656b1dd84a3ed02aaef9d5791ad6b2c90a985ffc120c372cbbdd99ad_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:carte:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  91 => 26,  86 => 24,  81 => 22,  72 => 16,  67 => 14,  63 => 13,  58 => 11,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Carte edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.value) }}*/
/*             {{ form_errors(edit_form.value) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(edit_form.value) }}*/
/*         </div>*/
/*         {{ form_label(edit_form.categorie) }}*/
/*             {{ form_errors(edit_form.categorie) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(edit_form.categorie) }}*/
/*         </div>*/
/*     </div>*/
/*         */
/*           <input class="btn btn-warning" type="submit" value="Modifier" />*/
/*         */
/*     {{ form_end(edit_form) }}*/
/*     <p>*/
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Supprimer"/>*/
/*     {{ form_end(delete_form) }}*/
/*     </p>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('carte_index') }}">Back to the list</a>*/
/*         </li>*/
/*        */
/*     </ul>*/
/* {% endblock %}*/
/* */
