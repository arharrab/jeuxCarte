<?php

/* base.html.twig */
class __TwigTemplate_d3dbf2979e93e79f5eb25035595a2a1b2f4e919aba0337bef1b5aad939f0b683 extends Twig_Template
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
        $__internal_ef4fc442d04f7ae5403fecea70d972791c34c95a4dc3731a50c9aff96ec4f956 = $this->env->getExtension("native_profiler");
        $__internal_ef4fc442d04f7ae5403fecea70d972791c34c95a4dc3731a50c9aff96ec4f956->enter($__internal_ef4fc442d04f7ae5403fecea70d972791c34c95a4dc3731a50c9aff96ec4f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ef4fc442d04f7ae5403fecea70d972791c34c95a4dc3731a50c9aff96ec4f956->leave($__internal_ef4fc442d04f7ae5403fecea70d972791c34c95a4dc3731a50c9aff96ec4f956_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee9702436c3ea13c6dabb614e72af28b18e264fa6e29aad8f2cfc85ecbb5a00 = $this->env->getExtension("native_profiler");
        $__internal_9ee9702436c3ea13c6dabb614e72af28b18e264fa6e29aad8f2cfc85ecbb5a00->enter($__internal_9ee9702436c3ea13c6dabb614e72af28b18e264fa6e29aad8f2cfc85ecbb5a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ee9702436c3ea13c6dabb614e72af28b18e264fa6e29aad8f2cfc85ecbb5a00->leave($__internal_9ee9702436c3ea13c6dabb614e72af28b18e264fa6e29aad8f2cfc85ecbb5a00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a89d17b45b21e290fe1028c802a6e5ad1830745fb1fa042e3c7991da631afd45 = $this->env->getExtension("native_profiler");
        $__internal_a89d17b45b21e290fe1028c802a6e5ad1830745fb1fa042e3c7991da631afd45->enter($__internal_a89d17b45b21e290fe1028c802a6e5ad1830745fb1fa042e3c7991da631afd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a89d17b45b21e290fe1028c802a6e5ad1830745fb1fa042e3c7991da631afd45->leave($__internal_a89d17b45b21e290fe1028c802a6e5ad1830745fb1fa042e3c7991da631afd45_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_84166d9d9d9b41602e9557aed81a3d9b386d36b3f81903728aa55e7b19f96cfa = $this->env->getExtension("native_profiler");
        $__internal_84166d9d9d9b41602e9557aed81a3d9b386d36b3f81903728aa55e7b19f96cfa->enter($__internal_84166d9d9d9b41602e9557aed81a3d9b386d36b3f81903728aa55e7b19f96cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_84166d9d9d9b41602e9557aed81a3d9b386d36b3f81903728aa55e7b19f96cfa->leave($__internal_84166d9d9d9b41602e9557aed81a3d9b386d36b3f81903728aa55e7b19f96cfa_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_5423b0c70ea2deb9bfc6851c656770eb2c6f6243a01883b2157f27630808dca6 = $this->env->getExtension("native_profiler");
        $__internal_5423b0c70ea2deb9bfc6851c656770eb2c6f6243a01883b2157f27630808dca6->enter($__internal_5423b0c70ea2deb9bfc6851c656770eb2c6f6243a01883b2157f27630808dca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5423b0c70ea2deb9bfc6851c656770eb2c6f6243a01883b2157f27630808dca6->leave($__internal_5423b0c70ea2deb9bfc6851c656770eb2c6f6243a01883b2157f27630808dca6_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a617c247fbb74752c3dc22608263d623a2893129fe2d97a42dd723c09de434bd = $this->env->getExtension("native_profiler");
        $__internal_a617c247fbb74752c3dc22608263d623a2893129fe2d97a42dd723c09de434bd->enter($__internal_a617c247fbb74752c3dc22608263d623a2893129fe2d97a42dd723c09de434bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a617c247fbb74752c3dc22608263d623a2893129fe2d97a42dd723c09de434bd->leave($__internal_a617c247fbb74752c3dc22608263d623a2893129fe2d97a42dd723c09de434bd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
