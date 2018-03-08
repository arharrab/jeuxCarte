<?php

/* default/index.html.twig */
class __TwigTemplate_2635eb74ab74183b3374429048c1dab81b94fb118cd4f0dca7bb13a23c01763a extends Twig_Template
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
        $__internal_cc50eccb5d66b58493bcacfa6a204132df681485992d8aad0978bc40ff60f6df = $this->env->getExtension("native_profiler");
        $__internal_cc50eccb5d66b58493bcacfa6a204132df681485992d8aad0978bc40ff60f6df->enter($__internal_cc50eccb5d66b58493bcacfa6a204132df681485992d8aad0978bc40ff60f6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_cc50eccb5d66b58493bcacfa6a204132df681485992d8aad0978bc40ff60f6df->leave($__internal_cc50eccb5d66b58493bcacfa6a204132df681485992d8aad0978bc40ff60f6df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_caa2faa5c8b224ffc556da9d520f56279fe1c23cae429d4db975d5f4bbf3ec26 = $this->env->getExtension("native_profiler");
        $__internal_caa2faa5c8b224ffc556da9d520f56279fe1c23cae429d4db975d5f4bbf3ec26->enter($__internal_caa2faa5c8b224ffc556da9d520f56279fe1c23cae429d4db975d5f4bbf3ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_caa2faa5c8b224ffc556da9d520f56279fe1c23cae429d4db975d5f4bbf3ec26->leave($__internal_caa2faa5c8b224ffc556da9d520f56279fe1c23cae429d4db975d5f4bbf3ec26_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c56c8b1035e98d6d30597680920eac9a8750b4c16d8bb7c6400f6eff51ca0d59 = $this->env->getExtension("native_profiler");
        $__internal_c56c8b1035e98d6d30597680920eac9a8750b4c16d8bb7c6400f6eff51ca0d59->enter($__internal_c56c8b1035e98d6d30597680920eac9a8750b4c16d8bb7c6400f6eff51ca0d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c56c8b1035e98d6d30597680920eac9a8750b4c16d8bb7c6400f6eff51ca0d59->leave($__internal_c56c8b1035e98d6d30597680920eac9a8750b4c16d8bb7c6400f6eff51ca0d59_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_37ff78b98ff76da0a23588ea8bc371508a2930721c9b1607ab255504cc08bc76 = $this->env->getExtension("native_profiler");
        $__internal_37ff78b98ff76da0a23588ea8bc371508a2930721c9b1607ab255504cc08bc76->enter($__internal_37ff78b98ff76da0a23588ea8bc371508a2930721c9b1607ab255504cc08bc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_37ff78b98ff76da0a23588ea8bc371508a2930721c9b1607ab255504cc08bc76->leave($__internal_37ff78b98ff76da0a23588ea8bc371508a2930721c9b1607ab255504cc08bc76_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_a54ea757d14076b68ec9ff2b0b91bc06f7ccf72cc9e8f22eed0ca3787cf3ea76 = $this->env->getExtension("native_profiler");
        $__internal_a54ea757d14076b68ec9ff2b0b91bc06f7ccf72cc9e8f22eed0ca3787cf3ea76->enter($__internal_a54ea757d14076b68ec9ff2b0b91bc06f7ccf72cc9e8f22eed0ca3787cf3ea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a54ea757d14076b68ec9ff2b0b91bc06f7ccf72cc9e8f22eed0ca3787cf3ea76->leave($__internal_a54ea757d14076b68ec9ff2b0b91bc06f7ccf72cc9e8f22eed0ca3787cf3ea76_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1d5a35150e514b5beeaf266c028fe9fa03dd41c21807f9be0e60cc9829c85cf = $this->env->getExtension("native_profiler");
        $__internal_e1d5a35150e514b5beeaf266c028fe9fa03dd41c21807f9be0e60cc9829c85cf->enter($__internal_e1d5a35150e514b5beeaf266c028fe9fa03dd41c21807f9be0e60cc9829c85cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e1d5a35150e514b5beeaf266c028fe9fa03dd41c21807f9be0e60cc9829c85cf->leave($__internal_e1d5a35150e514b5beeaf266c028fe9fa03dd41c21807f9be0e60cc9829c85cf_prof);

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
