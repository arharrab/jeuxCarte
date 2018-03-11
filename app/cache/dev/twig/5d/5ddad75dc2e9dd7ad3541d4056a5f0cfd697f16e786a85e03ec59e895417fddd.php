<?php

/* AppBundle:categorie:edit.html.twig */
class __TwigTemplate_a12a1fe9be589c9f8aea11124f239da8deb30b8bfbaa74c4f0edb39342380230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:categorie:edit.html.twig", 1);
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
        $__internal_8054d9e7181c2e566c2eda073e1e35362a29afbc4bd93a59c5c5b317a9a1616c = $this->env->getExtension("native_profiler");
        $__internal_8054d9e7181c2e566c2eda073e1e35362a29afbc4bd93a59c5c5b317a9a1616c->enter($__internal_8054d9e7181c2e566c2eda073e1e35362a29afbc4bd93a59c5c5b317a9a1616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8054d9e7181c2e566c2eda073e1e35362a29afbc4bd93a59c5c5b317a9a1616c->leave($__internal_8054d9e7181c2e566c2eda073e1e35362a29afbc4bd93a59c5c5b317a9a1616c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6949e7791f2d1cb892af2ffc2965d114dd0271852974222c346a6e159cce3b8d = $this->env->getExtension("native_profiler");
        $__internal_6949e7791f2d1cb892af2ffc2965d114dd0271852974222c346a6e159cce3b8d->enter($__internal_6949e7791f2d1cb892af2ffc2965d114dd0271852974222c346a6e159cce3b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categorie edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        </div>
    </div>
    
        <input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" />
        
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <p>
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\"/>
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">Back to the list</a>
        </li>
        
    </ul>
";
        
        $__internal_6949e7791f2d1cb892af2ffc2965d114dd0271852974222c346a6e159cce3b8d->leave($__internal_6949e7791f2d1cb892af2ffc2965d114dd0271852974222c346a6e159cce3b8d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  73 => 20,  68 => 18,  63 => 16,  54 => 10,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Categorie edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*     <div class="form-group">*/
/*         {{ form_errors(edit_form) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(edit_form) }}*/
/*         </div>*/
/*     </div>*/
/*     */
/*         <input class="btn btn-warning" type="submit" value="Modifier" />*/
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
/*             <a href="{{ path('categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*         */
/*     </ul>*/
/* {% endblock %}*/
/* */
