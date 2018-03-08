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
        $__internal_2db0992b66492ce95a3aa611aa9f91ea9933dd837793d7b139545f8944375939 = $this->env->getExtension("native_profiler");
        $__internal_2db0992b66492ce95a3aa611aa9f91ea9933dd837793d7b139545f8944375939->enter($__internal_2db0992b66492ce95a3aa611aa9f91ea9933dd837793d7b139545f8944375939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        
        $__internal_2db0992b66492ce95a3aa611aa9f91ea9933dd837793d7b139545f8944375939->leave($__internal_2db0992b66492ce95a3aa611aa9f91ea9933dd837793d7b139545f8944375939_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e710a7f8e3ab451322a76ec3a838173d47a4be5a05040a1f8b55e4d6c0865d = $this->env->getExtension("native_profiler");
        $__internal_87e710a7f8e3ab451322a76ec3a838173d47a4be5a05040a1f8b55e4d6c0865d->enter($__internal_87e710a7f8e3ab451322a76ec3a838173d47a4be5a05040a1f8b55e4d6c0865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87e710a7f8e3ab451322a76ec3a838173d47a4be5a05040a1f8b55e4d6c0865d->leave($__internal_87e710a7f8e3ab451322a76ec3a838173d47a4be5a05040a1f8b55e4d6c0865d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff98a0125bc40c0f9611a5ad73eb579998a0ceafd49cf1e94b19215128d0dba7 = $this->env->getExtension("native_profiler");
        $__internal_ff98a0125bc40c0f9611a5ad73eb579998a0ceafd49cf1e94b19215128d0dba7->enter($__internal_ff98a0125bc40c0f9611a5ad73eb579998a0ceafd49cf1e94b19215128d0dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ff98a0125bc40c0f9611a5ad73eb579998a0ceafd49cf1e94b19215128d0dba7->leave($__internal_ff98a0125bc40c0f9611a5ad73eb579998a0ceafd49cf1e94b19215128d0dba7_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_7d723d7b65146a8f0c69c0038013c52eb0bdde3a1f42aa94a56d8c942fb36a7f = $this->env->getExtension("native_profiler");
        $__internal_7d723d7b65146a8f0c69c0038013c52eb0bdde3a1f42aa94a56d8c942fb36a7f->enter($__internal_7d723d7b65146a8f0c69c0038013c52eb0bdde3a1f42aa94a56d8c942fb36a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_7d723d7b65146a8f0c69c0038013c52eb0bdde3a1f42aa94a56d8c942fb36a7f->leave($__internal_7d723d7b65146a8f0c69c0038013c52eb0bdde3a1f42aa94a56d8c942fb36a7f_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7cb1505f96e68139e52ac371bab948557af596e40e627adefed5b4a7c80e6c8 = $this->env->getExtension("native_profiler");
        $__internal_c7cb1505f96e68139e52ac371bab948557af596e40e627adefed5b4a7c80e6c8->enter($__internal_c7cb1505f96e68139e52ac371bab948557af596e40e627adefed5b4a7c80e6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7cb1505f96e68139e52ac371bab948557af596e40e627adefed5b4a7c80e6c8->leave($__internal_c7cb1505f96e68139e52ac371bab948557af596e40e627adefed5b4a7c80e6c8_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ec7ab89a31250b108a5ac31395eab8b1a43a1e674895acd1946eba0b0fe5c11 = $this->env->getExtension("native_profiler");
        $__internal_8ec7ab89a31250b108a5ac31395eab8b1a43a1e674895acd1946eba0b0fe5c11->enter($__internal_8ec7ab89a31250b108a5ac31395eab8b1a43a1e674895acd1946eba0b0fe5c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8ec7ab89a31250b108a5ac31395eab8b1a43a1e674895acd1946eba0b0fe5c11->leave($__internal_8ec7ab89a31250b108a5ac31395eab8b1a43a1e674895acd1946eba0b0fe5c11_prof);

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
