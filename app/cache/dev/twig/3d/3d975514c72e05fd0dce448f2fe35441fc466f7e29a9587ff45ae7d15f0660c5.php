<?php

/* :default:index.html.twig */
class __TwigTemplate_da33ad0a25ea923087ff4bdf1f16f8357e3bac966aafe1782318cdec6f73ed06 extends Twig_Template
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
        $__internal_d14e340d09e853931e396cab449f1884d4ae52428e9cd8f83906f102ea47ad1a = $this->env->getExtension("native_profiler");
        $__internal_d14e340d09e853931e396cab449f1884d4ae52428e9cd8f83906f102ea47ad1a->enter($__internal_d14e340d09e853931e396cab449f1884d4ae52428e9cd8f83906f102ea47ad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

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
        
        $__internal_d14e340d09e853931e396cab449f1884d4ae52428e9cd8f83906f102ea47ad1a->leave($__internal_d14e340d09e853931e396cab449f1884d4ae52428e9cd8f83906f102ea47ad1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32c38ef183b22eed2d886aee7bc9c7e856a07b9044f642d9efa02117e4d9033c = $this->env->getExtension("native_profiler");
        $__internal_32c38ef183b22eed2d886aee7bc9c7e856a07b9044f642d9efa02117e4d9033c->enter($__internal_32c38ef183b22eed2d886aee7bc9c7e856a07b9044f642d9efa02117e4d9033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32c38ef183b22eed2d886aee7bc9c7e856a07b9044f642d9efa02117e4d9033c->leave($__internal_32c38ef183b22eed2d886aee7bc9c7e856a07b9044f642d9efa02117e4d9033c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18409cfe0349137ed64d7cb358c14e0ded22f9637dea1312b4b2f744a5c30ddd = $this->env->getExtension("native_profiler");
        $__internal_18409cfe0349137ed64d7cb358c14e0ded22f9637dea1312b4b2f744a5c30ddd->enter($__internal_18409cfe0349137ed64d7cb358c14e0ded22f9637dea1312b4b2f744a5c30ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_18409cfe0349137ed64d7cb358c14e0ded22f9637dea1312b4b2f744a5c30ddd->leave($__internal_18409cfe0349137ed64d7cb358c14e0ded22f9637dea1312b4b2f744a5c30ddd_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_65fff4585e8ac0a3340909985b75d4d3a8c1eadcb345460a8320c1afd0466324 = $this->env->getExtension("native_profiler");
        $__internal_65fff4585e8ac0a3340909985b75d4d3a8c1eadcb345460a8320c1afd0466324->enter($__internal_65fff4585e8ac0a3340909985b75d4d3a8c1eadcb345460a8320c1afd0466324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_65fff4585e8ac0a3340909985b75d4d3a8c1eadcb345460a8320c1afd0466324->leave($__internal_65fff4585e8ac0a3340909985b75d4d3a8c1eadcb345460a8320c1afd0466324_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e9bbfd14d1e37a765f59a61135013bddfc8364972cf8ce04dfb1e5e4ad048e = $this->env->getExtension("native_profiler");
        $__internal_78e9bbfd14d1e37a765f59a61135013bddfc8364972cf8ce04dfb1e5e4ad048e->enter($__internal_78e9bbfd14d1e37a765f59a61135013bddfc8364972cf8ce04dfb1e5e4ad048e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78e9bbfd14d1e37a765f59a61135013bddfc8364972cf8ce04dfb1e5e4ad048e->leave($__internal_78e9bbfd14d1e37a765f59a61135013bddfc8364972cf8ce04dfb1e5e4ad048e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf38780cdd2dd23504e47a09b8666064e1b75d95c862468be69f636a926d1e3b = $this->env->getExtension("native_profiler");
        $__internal_bf38780cdd2dd23504e47a09b8666064e1b75d95c862468be69f636a926d1e3b->enter($__internal_bf38780cdd2dd23504e47a09b8666064e1b75d95c862468be69f636a926d1e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bf38780cdd2dd23504e47a09b8666064e1b75d95c862468be69f636a926d1e3b->leave($__internal_bf38780cdd2dd23504e47a09b8666064e1b75d95c862468be69f636a926d1e3b_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
