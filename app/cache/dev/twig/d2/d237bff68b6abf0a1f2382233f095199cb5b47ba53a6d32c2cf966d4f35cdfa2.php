<?php

/* @App/joueur/new.html.twig */
class __TwigTemplate_e18d483cca9cec9c11a608c9bc31db2adbd76e2f31af71fe61a0a448682ee2fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/joueur/new.html.twig", 1);
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
        $__internal_ee5042fe4ae8120a2233306b2fe3fa27b4e00558d39753b3c42c04a32fc88997 = $this->env->getExtension("native_profiler");
        $__internal_ee5042fe4ae8120a2233306b2fe3fa27b4e00558d39753b3c42c04a32fc88997->enter($__internal_ee5042fe4ae8120a2233306b2fe3fa27b4e00558d39753b3c42c04a32fc88997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/joueur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5042fe4ae8120a2233306b2fe3fa27b4e00558d39753b3c42c04a32fc88997->leave($__internal_ee5042fe4ae8120a2233306b2fe3fa27b4e00558d39753b3c42c04a32fc88997_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30945f0c6b71d9d5f1785669e82911a47f6a94c44a0c3f139e054b4df702ffa4 = $this->env->getExtension("native_profiler");
        $__internal_30945f0c6b71d9d5f1785669e82911a47f6a94c44a0c3f139e054b4df702ffa4->enter($__internal_30945f0c6b71d9d5f1785669e82911a47f6a94c44a0c3f139e054b4df702ffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Nouveau joueur</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
        </div>
    </div>
    <div  class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        
        <div class=\"container-form-control\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
    </div>
    <div  class=\"form-group\">                        
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "
        </div>
        
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "            
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
        <div class=\"container-form-control\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "
        </div>
    </div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" /> 
    <input class=\"btn btn-danger\" type=\"reset\" value=\"Vider\" />
    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("joueur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</div>
";
        
        $__internal_30945f0c6b71d9d5f1785669e82911a47f6a94c44a0c3f139e054b4df702ffa4->leave($__internal_30945f0c6b71d9d5f1785669e82911a47f6a94c44a0c3f139e054b4df702ffa4_prof);

    }

    public function getTemplateName()
    {
        return "@App/joueur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  116 => 39,  108 => 34,  103 => 32,  99 => 31,  93 => 28,  88 => 26,  84 => 25,  77 => 21,  71 => 18,  66 => 16,  59 => 12,  54 => 10,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>Nouveau joueur</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     <div class="form-group">*/
/*         {{ form_label(form.nom) }}*/
/*         {{ form_errors(form.nom) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(form.nom) }}*/
/*         </div>*/
/*     </div>*/
/*     <div  class="form-group">*/
/*         {{ form_label(form.email) }}*/
/*         */
/*         {{ form_errors(form.email) }}*/
/*         */
/*         <div class="container-form-control">*/
/*         {{ form_widget(form.email) }}*/
/*         </div>*/
/*     </div>*/
/*     <div  class="form-group">                        */
/*         {{ form_label(form.password.first) }}*/
/*         {{ form_errors(form.password.first) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(form.password.first) }}*/
/*         </div>*/
/*         */
/*         {{ form_label(form.password.second) }}            */
/*             {{ form_errors(form.password.second) }}*/
/*         <div class="container-form-control">*/
/*         {{ form_widget(form.password.second) }}*/
/*         </div>*/
/*     </div>*/
/*     <input class="btn btn-primary" type="submit" value="Create" /> */
/*     <input class="btn btn-danger" type="reset" value="Vider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('joueur_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
