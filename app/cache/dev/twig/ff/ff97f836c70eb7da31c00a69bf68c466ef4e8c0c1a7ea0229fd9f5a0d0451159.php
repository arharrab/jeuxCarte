<?php

/* AppBundle:Carte:edit.html.twig */
class __TwigTemplate_518a04a2c5db95c3d2321f28154cab02411290f4bbaeb8d27d1d7184b34f3675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Carte:edit.html.twig", 1);
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
        $__internal_6402c5e141c7f4e99ac5584db09caf0bac9e01d2fe3e493bca7829c357154c0b = $this->env->getExtension("native_profiler");
        $__internal_6402c5e141c7f4e99ac5584db09caf0bac9e01d2fe3e493bca7829c357154c0b->enter($__internal_6402c5e141c7f4e99ac5584db09caf0bac9e01d2fe3e493bca7829c357154c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Carte:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6402c5e141c7f4e99ac5584db09caf0bac9e01d2fe3e493bca7829c357154c0b->leave($__internal_6402c5e141c7f4e99ac5584db09caf0bac9e01d2fe3e493bca7829c357154c0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_152ae3cdc639337a4526ac6b4a19c8a9ac9bb45bb961a378edfb5a566ed4ca0f = $this->env->getExtension("native_profiler");
        $__internal_152ae3cdc639337a4526ac6b4a19c8a9ac9bb45bb961a378edfb5a566ed4ca0f->enter($__internal_152ae3cdc639337a4526ac6b4a19c8a9ac9bb45bb961a378edfb5a566ed4ca0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_152ae3cdc639337a4526ac6b4a19c8a9ac9bb45bb961a378edfb5a566ed4ca0f->leave($__internal_152ae3cdc639337a4526ac6b4a19c8a9ac9bb45bb961a378edfb5a566ed4ca0f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Carte:edit.html.twig";
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
