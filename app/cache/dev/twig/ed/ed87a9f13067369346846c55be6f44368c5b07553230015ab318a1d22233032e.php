<?php

/* AppBundle:Categorie:edit.html.twig */
class __TwigTemplate_2393c2b6fc699a656377036181a5852e67e43feac819796a65130e16f7e5ed14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Categorie:edit.html.twig", 1);
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
        $__internal_d9cef9e1c781e1b0aabcadf2fa5ced7d6579e4b406bd2369aad0763300ab8204 = $this->env->getExtension("native_profiler");
        $__internal_d9cef9e1c781e1b0aabcadf2fa5ced7d6579e4b406bd2369aad0763300ab8204->enter($__internal_d9cef9e1c781e1b0aabcadf2fa5ced7d6579e4b406bd2369aad0763300ab8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9cef9e1c781e1b0aabcadf2fa5ced7d6579e4b406bd2369aad0763300ab8204->leave($__internal_d9cef9e1c781e1b0aabcadf2fa5ced7d6579e4b406bd2369aad0763300ab8204_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d62ecdfcb5ba8e840dad75601adddea8e4713bfa4da8967a5af5780d4f83eec = $this->env->getExtension("native_profiler");
        $__internal_8d62ecdfcb5ba8e840dad75601adddea8e4713bfa4da8967a5af5780d4f83eec->enter($__internal_8d62ecdfcb5ba8e840dad75601adddea8e4713bfa4da8967a5af5780d4f83eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d62ecdfcb5ba8e840dad75601adddea8e4713bfa4da8967a5af5780d4f83eec->leave($__internal_8d62ecdfcb5ba8e840dad75601adddea8e4713bfa4da8967a5af5780d4f83eec_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Categorie:edit.html.twig";
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
