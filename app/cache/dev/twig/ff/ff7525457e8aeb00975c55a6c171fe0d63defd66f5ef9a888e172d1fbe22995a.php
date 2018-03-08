<?php

/* ::base.html.twig */
class __TwigTemplate_54e71bd5066e33b5f88221a75f96b9b31d4b38c9d86989cf6a6f99818e495b7f extends Twig_Template
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
        $__internal_5931c81ea1266cfdd318853ce60f5c219d8c94dd58789d3b747d464e8e17fde9 = $this->env->getExtension("native_profiler");
        $__internal_5931c81ea1266cfdd318853ce60f5c219d8c94dd58789d3b747d464e8e17fde9->enter($__internal_5931c81ea1266cfdd318853ce60f5c219d8c94dd58789d3b747d464e8e17fde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5931c81ea1266cfdd318853ce60f5c219d8c94dd58789d3b747d464e8e17fde9->leave($__internal_5931c81ea1266cfdd318853ce60f5c219d8c94dd58789d3b747d464e8e17fde9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1562d4c20017ceb69bf39988e5befb2aa0ff044276afc9bc64b183ce476e75a = $this->env->getExtension("native_profiler");
        $__internal_f1562d4c20017ceb69bf39988e5befb2aa0ff044276afc9bc64b183ce476e75a->enter($__internal_f1562d4c20017ceb69bf39988e5befb2aa0ff044276afc9bc64b183ce476e75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1562d4c20017ceb69bf39988e5befb2aa0ff044276afc9bc64b183ce476e75a->leave($__internal_f1562d4c20017ceb69bf39988e5befb2aa0ff044276afc9bc64b183ce476e75a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b724f4c441d346803eb63afba98c1d82851c26c866f00214f8078619793a8df6 = $this->env->getExtension("native_profiler");
        $__internal_b724f4c441d346803eb63afba98c1d82851c26c866f00214f8078619793a8df6->enter($__internal_b724f4c441d346803eb63afba98c1d82851c26c866f00214f8078619793a8df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b724f4c441d346803eb63afba98c1d82851c26c866f00214f8078619793a8df6->leave($__internal_b724f4c441d346803eb63afba98c1d82851c26c866f00214f8078619793a8df6_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9d24a36631ee35d2dac9d41db24bb16edc12efce5b0e5b545c711cba461a306 = $this->env->getExtension("native_profiler");
        $__internal_d9d24a36631ee35d2dac9d41db24bb16edc12efce5b0e5b545c711cba461a306->enter($__internal_d9d24a36631ee35d2dac9d41db24bb16edc12efce5b0e5b545c711cba461a306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_d9d24a36631ee35d2dac9d41db24bb16edc12efce5b0e5b545c711cba461a306->leave($__internal_d9d24a36631ee35d2dac9d41db24bb16edc12efce5b0e5b545c711cba461a306_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5a902c925cc3e8cf901f428776e1c946b948b81fcb05101a600f58a6a27703 = $this->env->getExtension("native_profiler");
        $__internal_6e5a902c925cc3e8cf901f428776e1c946b948b81fcb05101a600f58a6a27703->enter($__internal_6e5a902c925cc3e8cf901f428776e1c946b948b81fcb05101a600f58a6a27703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e5a902c925cc3e8cf901f428776e1c946b948b81fcb05101a600f58a6a27703->leave($__internal_6e5a902c925cc3e8cf901f428776e1c946b948b81fcb05101a600f58a6a27703_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b464ef5e2235bddbeb65c55b447782b68d29afb2613362cf6fa14fc044fe677 = $this->env->getExtension("native_profiler");
        $__internal_3b464ef5e2235bddbeb65c55b447782b68d29afb2613362cf6fa14fc044fe677->enter($__internal_3b464ef5e2235bddbeb65c55b447782b68d29afb2613362cf6fa14fc044fe677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3b464ef5e2235bddbeb65c55b447782b68d29afb2613362cf6fa14fc044fe677->leave($__internal_3b464ef5e2235bddbeb65c55b447782b68d29afb2613362cf6fa14fc044fe677_prof);

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
