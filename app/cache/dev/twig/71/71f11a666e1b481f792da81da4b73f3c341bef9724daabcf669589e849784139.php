<?php

/* AppBundle:joueur:new.html.twig */
class __TwigTemplate_a1f823870e55f5f566cab82ef6434b36422d518233af2d7e09ac42233d22d225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:joueur:new.html.twig", 1);
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
        $__internal_0444416b4256dc1d5efbe9275ac367553315ef42875fe9aff0308bde93d561e0 = $this->env->getExtension("native_profiler");
        $__internal_0444416b4256dc1d5efbe9275ac367553315ef42875fe9aff0308bde93d561e0->enter($__internal_0444416b4256dc1d5efbe9275ac367553315ef42875fe9aff0308bde93d561e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:joueur:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0444416b4256dc1d5efbe9275ac367553315ef42875fe9aff0308bde93d561e0->leave($__internal_0444416b4256dc1d5efbe9275ac367553315ef42875fe9aff0308bde93d561e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93861737055847f2f2292a6e41db296971eba518676c5ea30275aa7370aed78c = $this->env->getExtension("native_profiler");
        $__internal_93861737055847f2f2292a6e41db296971eba518676c5ea30275aa7370aed78c->enter($__internal_93861737055847f2f2292a6e41db296971eba518676c5ea30275aa7370aed78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93861737055847f2f2292a6e41db296971eba518676c5ea30275aa7370aed78c->leave($__internal_93861737055847f2f2292a6e41db296971eba518676c5ea30275aa7370aed78c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:joueur:new.html.twig";
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
