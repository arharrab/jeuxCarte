<?php

/* @App/categorie/edit.html.twig */
class __TwigTemplate_dfe7552dd2b70a57ef1789e88bfda7cfb7123641316d0c1207d301deb93777ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/categorie/edit.html.twig", 1);
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
        $__internal_d0c0b6e4cf11d819c33cb756886ec2f9becd5f23c0ca1fd62996da9f1d8c3d29 = $this->env->getExtension("native_profiler");
        $__internal_d0c0b6e4cf11d819c33cb756886ec2f9becd5f23c0ca1fd62996da9f1d8c3d29->enter($__internal_d0c0b6e4cf11d819c33cb756886ec2f9becd5f23c0ca1fd62996da9f1d8c3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/categorie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c0b6e4cf11d819c33cb756886ec2f9becd5f23c0ca1fd62996da9f1d8c3d29->leave($__internal_d0c0b6e4cf11d819c33cb756886ec2f9becd5f23c0ca1fd62996da9f1d8c3d29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7b9b1ea400df6253f607097842e63684fc9b032adb45e9c8adc5884a59c35f5 = $this->env->getExtension("native_profiler");
        $__internal_e7b9b1ea400df6253f607097842e63684fc9b032adb45e9c8adc5884a59c35f5->enter($__internal_e7b9b1ea400df6253f607097842e63684fc9b032adb45e9c8adc5884a59c35f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7b9b1ea400df6253f607097842e63684fc9b032adb45e9c8adc5884a59c35f5->leave($__internal_e7b9b1ea400df6253f607097842e63684fc9b032adb45e9c8adc5884a59c35f5_prof);

    }

    public function getTemplateName()
    {
        return "@App/categorie/edit.html.twig";
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
