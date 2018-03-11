<?php

/* default/index.html.twig */
class __TwigTemplate_abd8297a5dd797b4a02a3b0804ef44cd01eaaa3eea9ca6229fe849234f83a6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7fae2f3795f71707f8b66b3f0c99402cced1d80efb7bac8293ac05ac32bf92c = $this->env->getExtension("native_profiler");
        $__internal_d7fae2f3795f71707f8b66b3f0c99402cced1d80efb7bac8293ac05ac32bf92c->enter($__internal_d7fae2f3795f71707f8b66b3f0c99402cced1d80efb7bac8293ac05ac32bf92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body> 
     ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "        <div class=\"container\">
            ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>";
        
        $__internal_d7fae2f3795f71707f8b66b3f0c99402cced1d80efb7bac8293ac05ac32bf92c->leave($__internal_d7fae2f3795f71707f8b66b3f0c99402cced1d80efb7bac8293ac05ac32bf92c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f632a5901506e3054c1641e5bf90a19e1320aced2a9f520b6b6dd57655a9ed3 = $this->env->getExtension("native_profiler");
        $__internal_3f632a5901506e3054c1641e5bf90a19e1320aced2a9f520b6b6dd57655a9ed3->enter($__internal_3f632a5901506e3054c1641e5bf90a19e1320aced2a9f520b6b6dd57655a9ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3f632a5901506e3054c1641e5bf90a19e1320aced2a9f520b6b6dd57655a9ed3->leave($__internal_3f632a5901506e3054c1641e5bf90a19e1320aced2a9f520b6b6dd57655a9ed3_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70769316335acd8b13f8ef9c048fb366cc915709d704354cfb4bcf45841a4d05 = $this->env->getExtension("native_profiler");
        $__internal_70769316335acd8b13f8ef9c048fb366cc915709d704354cfb4bcf45841a4d05->enter($__internal_70769316335acd8b13f8ef9c048fb366cc915709d704354cfb4bcf45841a4d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bs-theme.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_70769316335acd8b13f8ef9c048fb366cc915709d704354cfb4bcf45841a4d05->leave($__internal_70769316335acd8b13f8ef9c048fb366cc915709d704354cfb4bcf45841a4d05_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_cc06c096b97e068b45a19821183729d982c95f199546a9703a97581611bf6116 = $this->env->getExtension("native_profiler");
        $__internal_cc06c096b97e068b45a19821183729d982c95f199546a9703a97581611bf6116->enter($__internal_cc06c096b97e068b45a19821183729d982c95f199546a9703a97581611bf6116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "            <nav class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                        <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#menu-collapse\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                </button>

                                <a href=\"#\" class=\"navbar-brand\">Jeux de carte</a>
                        </div>

                        <div class=\"collapse navbar-collapse\" id=\"menu-collapse\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Authentification <span class=\"sr-only\">(current)</span></a></li>                                    
                                </ul>
                        </div>
                </div>
            </nav>
        ";
        
        $__internal_cc06c096b97e068b45a19821183729d982c95f199546a9703a97581611bf6116->leave($__internal_cc06c096b97e068b45a19821183729d982c95f199546a9703a97581611bf6116_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02f9d70dba2034d765b19d815cfda4647e6659c4cd84c3c7199b89ba9194836 = $this->env->getExtension("native_profiler");
        $__internal_b02f9d70dba2034d765b19d815cfda4647e6659c4cd84c3c7199b89ba9194836->enter($__internal_b02f9d70dba2034d765b19d815cfda4647e6659c4cd84c3c7199b89ba9194836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b02f9d70dba2034d765b19d815cfda4647e6659c4cd84c3c7199b89ba9194836->leave($__internal_b02f9d70dba2034d765b19d815cfda4647e6659c4cd84c3c7199b89ba9194836_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cdb6f4fac889bd0489e77328780965488671a78958bee75b875205c27af90f0 = $this->env->getExtension("native_profiler");
        $__internal_3cdb6f4fac889bd0489e77328780965488671a78958bee75b875205c27af90f0->enter($__internal_3cdb6f4fac889bd0489e77328780965488671a78958bee75b875205c27af90f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3cdb6f4fac889bd0489e77328780965488671a78958bee75b875205c27af90f0->leave($__internal_3cdb6f4fac889bd0489e77328780965488671a78958bee75b875205c27af90f0_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 44,  157 => 43,  146 => 41,  133 => 34,  116 => 19,  110 => 18,  101 => 12,  97 => 11,  93 => 10,  88 => 9,  82 => 8,  70 => 7,  62 => 46,  60 => 43,  57 => 42,  55 => 41,  52 => 40,  50 => 18,  44 => 15,  41 => 14,  39 => 8,  35 => 7,  27 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bs-theme.css') }}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" />*/
/*             <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body> */
/*      {% block header %}*/
/*             <nav class="navbar navbar-inverse" role="navigation">*/
/*                 <div class="container">*/
/*                         <div class="navbar-header">*/
/*                                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">*/
/*                                         <span class="sr-only">Toggle navigation</span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                 </button>*/
/* */
/*                                 <a href="#" class="navbar-brand">Jeux de carte</a>*/
/*                         </div>*/
/* */
/*                         <div class="collapse navbar-collapse" id="menu-collapse">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li><a href="{{ path('login') }}">Authentification <span class="sr-only">(current)</span></a></li>                                    */
/*                                 </ul>*/
/*                         </div>*/
/*                 </div>*/
/*             </nav>*/
/*         {% endblock %}*/
/*         <div class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
