<?php

/* @App/joueur/edit.html.twig */
class __TwigTemplate_72fdec34e788c37b8e3c9fc355efca3ccf2c83e81e4a03989f7a75e5f68ea1ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/joueur/edit.html.twig", 1);
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
        $__internal_5c728f05409ce8c67b0997efc9bb99568376526b70f2d3c95d18a628da14a96b = $this->env->getExtension("native_profiler");
        $__internal_5c728f05409ce8c67b0997efc9bb99568376526b70f2d3c95d18a628da14a96b->enter($__internal_5c728f05409ce8c67b0997efc9bb99568376526b70f2d3c95d18a628da14a96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/joueur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c728f05409ce8c67b0997efc9bb99568376526b70f2d3c95d18a628da14a96b->leave($__internal_5c728f05409ce8c67b0997efc9bb99568376526b70f2d3c95d18a628da14a96b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4162f8764b6f2acb41bb294d6c4a11c90e76703383ce9fce98911292c12b1980 = $this->env->getExtension("native_profiler");
        $__internal_4162f8764b6f2acb41bb294d6c4a11c90e76703383ce9fce98911292c12b1980->enter($__internal_4162f8764b6f2acb41bb294d6c4a11c90e76703383ce9fce98911292c12b1980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Modifier Joueur </h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        
        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
            <div class=\"container-form-control\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget');
        echo "
            </div>
        </div>
        <div  class=\"form-group\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "

            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "

            <div class=\"container-form-control\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div  class=\"form-group\">                        
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'errors');
        echo "
            <div class=\"container-form-control\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'widget');
        echo "
            </div>

            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'label');
        echo "            
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'errors');
        echo "
            <div class=\"container-form-control\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'widget');
        echo "
            </div>
        </div>
          <input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" />
        
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        <p>
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\"/>
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </p>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("joueur_index");
        echo "\">Back to the list</a>
        </li>        
    </ul>
";
        
        $__internal_4162f8764b6f2acb41bb294d6c4a11c90e76703383ce9fce98911292c12b1980->leave($__internal_4162f8764b6f2acb41bb294d6c4a11c90e76703383ce9fce98911292c12b1980_prof);

    }

    public function getTemplateName()
    {
        return "@App/joueur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  127 => 44,  122 => 42,  117 => 40,  109 => 35,  104 => 33,  100 => 32,  94 => 29,  89 => 27,  85 => 26,  78 => 22,  72 => 19,  67 => 17,  60 => 13,  55 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Modifier Joueur </h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.nom) }}*/
/*             {{ form_errors(edit_form.nom) }}*/
/*             <div class="container-form-control">*/
/*             {{ form_widget(edit_form.nom) }}*/
/*             </div>*/
/*         </div>*/
/*         <div  class="form-group">*/
/*             {{ form_label(edit_form.email) }}*/
/* */
/*             {{ form_errors(edit_form.email) }}*/
/* */
/*             <div class="container-form-control">*/
/*             {{ form_widget(edit_form.email) }}*/
/*             </div>*/
/*         </div>*/
/*         <div  class="form-group">                        */
/*             {{ form_label(edit_form.password.first) }}*/
/*             {{ form_errors(edit_form.password.first) }}*/
/*             <div class="container-form-control">*/
/*             {{ form_widget(edit_form.password.first) }}*/
/*             </div>*/
/* */
/*             {{ form_label(edit_form.password.second) }}            */
/*                 {{ form_errors(edit_form.password.second) }}*/
/*             <div class="container-form-control">*/
/*             {{ form_widget(edit_form.password.second) }}*/
/*             </div>*/
/*         </div>*/
/*           <input class="btn btn-warning" type="submit" value="Modifier" />*/
/*         */
/*         {{ form_end(edit_form) }}*/
/*         <p>*/
/*         {{ form_start(delete_form) }}*/
/*             <input class="btn btn-danger" type="submit" value="Supprimer"/>*/
/*         {{ form_end(delete_form) }}*/
/*         </p>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('joueur_index') }}">Back to the list</a>*/
/*         </li>        */
/*     </ul>*/
/* {% endblock %}*/
/* */
