<?php

/* ::base.html.twig */
class __TwigTemplate_372a9fda637aebf626abb5aca991ae30b75b0e8e4b995c8622e65f4caf0cc6fa extends Twig_Template
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
        $__internal_91623e8e0260d85a8a9c9cd62008396a913c4b121ecfe2ff6a7f541ea110e793 = $this->env->getExtension("native_profiler");
        $__internal_91623e8e0260d85a8a9c9cd62008396a913c4b121ecfe2ff6a7f541ea110e793->enter($__internal_91623e8e0260d85a8a9c9cd62008396a913c4b121ecfe2ff6a7f541ea110e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>      
        ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "        <div class=\"container\">
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>
";
        
        $__internal_91623e8e0260d85a8a9c9cd62008396a913c4b121ecfe2ff6a7f541ea110e793->leave($__internal_91623e8e0260d85a8a9c9cd62008396a913c4b121ecfe2ff6a7f541ea110e793_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dba550c16062dac3e8c59b78e0588b3ec0d92d18eb7bc8d538cb4c984d3c9f4 = $this->env->getExtension("native_profiler");
        $__internal_4dba550c16062dac3e8c59b78e0588b3ec0d92d18eb7bc8d538cb4c984d3c9f4->enter($__internal_4dba550c16062dac3e8c59b78e0588b3ec0d92d18eb7bc8d538cb4c984d3c9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dba550c16062dac3e8c59b78e0588b3ec0d92d18eb7bc8d538cb4c984d3c9f4->leave($__internal_4dba550c16062dac3e8c59b78e0588b3ec0d92d18eb7bc8d538cb4c984d3c9f4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f5cba9a0df45f7559255b97ded9b3f8ebd3779dfeceff62f2df538638e3eb61 = $this->env->getExtension("native_profiler");
        $__internal_6f5cba9a0df45f7559255b97ded9b3f8ebd3779dfeceff62f2df538638e3eb61->enter($__internal_6f5cba9a0df45f7559255b97ded9b3f8ebd3779dfeceff62f2df538638e3eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bs-theme.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f5cba9a0df45f7559255b97ded9b3f8ebd3779dfeceff62f2df538638e3eb61->leave($__internal_6f5cba9a0df45f7559255b97ded9b3f8ebd3779dfeceff62f2df538638e3eb61_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_742729ccb15019a498366fc663477e02f47cd02ec02ea6bfa465d0978a0d706e = $this->env->getExtension("native_profiler");
        $__internal_742729ccb15019a498366fc663477e02f47cd02ec02ea6bfa465d0978a0d706e->enter($__internal_742729ccb15019a498366fc663477e02f47cd02ec02ea6bfa465d0978a0d706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
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
        // line 32
        echo $this->env->getExtension('routing')->getPath("party_home");
        echo "\">Nouvelle Partie <span class=\"sr-only\">(current)</span></a></li>
                                    
                                    
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Parametres <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                          <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("joueur_index");
        echo "\">Gestion des joueurs</a></li>
                                          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\">Gestion des catégories</a></li>
                                          <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("carte_index");
        echo "\">Gestion des Cartes</a></li>

                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("login_logout");
        echo "\">Déconnexion</a></li>
                                </ul>
                        </div>
                </div>
            </nav>
        ";
        
        $__internal_742729ccb15019a498366fc663477e02f47cd02ec02ea6bfa465d0978a0d706e->leave($__internal_742729ccb15019a498366fc663477e02f47cd02ec02ea6bfa465d0978a0d706e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_19b046468cd00bf9a9643b252d3d78f88c7cae8e0432b3b2184942733c5bf985 = $this->env->getExtension("native_profiler");
        $__internal_19b046468cd00bf9a9643b252d3d78f88c7cae8e0432b3b2184942733c5bf985->enter($__internal_19b046468cd00bf9a9643b252d3d78f88c7cae8e0432b3b2184942733c5bf985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19b046468cd00bf9a9643b252d3d78f88c7cae8e0432b3b2184942733c5bf985->leave($__internal_19b046468cd00bf9a9643b252d3d78f88c7cae8e0432b3b2184942733c5bf985_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35f697ea6f098436419048eb592f76c24497f42ea80f4fb4469603c9db7e39f9 = $this->env->getExtension("native_profiler");
        $__internal_35f697ea6f098436419048eb592f76c24497f42ea80f4fb4469603c9db7e39f9->enter($__internal_35f697ea6f098436419048eb592f76c24497f42ea80f4fb4469603c9db7e39f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_35f697ea6f098436419048eb592f76c24497f42ea80f4fb4469603c9db7e39f9->leave($__internal_35f697ea6f098436419048eb592f76c24497f42ea80f4fb4469603c9db7e39f9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 54,  180 => 53,  169 => 51,  156 => 44,  149 => 40,  145 => 39,  141 => 38,  132 => 32,  115 => 17,  109 => 16,  100 => 10,  96 => 9,  92 => 8,  87 => 7,  81 => 6,  69 => 5,  60 => 56,  58 => 53,  55 => 52,  53 => 51,  50 => 50,  48 => 16,  42 => 13,  39 => 12,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bs-theme.css') }}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" />*/
/*             <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>      */
/*         {% block header %}*/
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
/*                                     <li><a href="{{ path('party_home') }}">Nouvelle Partie <span class="sr-only">(current)</span></a></li>*/
/*                                     */
/*                                     */
/*                                     <li class="dropdown">*/
/*                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parametres <span class="caret"></span></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                           <li><a href="{{ path('joueur_index') }}">Gestion des joueurs</a></li>*/
/*                                           <li><a href="{{ path('categorie_index') }}">Gestion des catégories</a></li>*/
/*                                           <li><a href="{{ path('carte_index') }}">Gestion des Cartes</a></li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li><a href="{{ path('login_logout') }}">Déconnexion</a></li>*/
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
/* */
