<?php

/* security/login.html.twig */
class __TwigTemplate_c2c9fecccc4ffc6445e8c4590d6a6e4b50e1708282b71bb75b47f28bd3edecc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c685640bae0e2a3b18a47d5e76e3978676a6cf542e08ca4947601460008d6a0 = $this->env->getExtension("native_profiler");
        $__internal_4c685640bae0e2a3b18a47d5e76e3978676a6cf542e08ca4947601460008d6a0->enter($__internal_4c685640bae0e2a3b18a47d5e76e3978676a6cf542e08ca4947601460008d6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
     
        <div class=\"container\">
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_4c685640bae0e2a3b18a47d5e76e3978676a6cf542e08ca4947601460008d6a0->leave($__internal_4c685640bae0e2a3b18a47d5e76e3978676a6cf542e08ca4947601460008d6a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1cf8bacdf3acc041015ada731ecd0cdc56f49c291d3274dffebf3acbb13a27c = $this->env->getExtension("native_profiler");
        $__internal_a1cf8bacdf3acc041015ada731ecd0cdc56f49c291d3274dffebf3acbb13a27c->enter($__internal_a1cf8bacdf3acc041015ada731ecd0cdc56f49c291d3274dffebf3acbb13a27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1cf8bacdf3acc041015ada731ecd0cdc56f49c291d3274dffebf3acbb13a27c->leave($__internal_a1cf8bacdf3acc041015ada731ecd0cdc56f49c291d3274dffebf3acbb13a27c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1aec9a440dc5d6c9659319b67c9b1e910dc79cf684ef242fb0fb0454f9d8d870 = $this->env->getExtension("native_profiler");
        $__internal_1aec9a440dc5d6c9659319b67c9b1e910dc79cf684ef242fb0fb0454f9d8d870->enter($__internal_1aec9a440dc5d6c9659319b67c9b1e910dc79cf684ef242fb0fb0454f9d8d870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1aec9a440dc5d6c9659319b67c9b1e910dc79cf684ef242fb0fb0454f9d8d870->leave($__internal_1aec9a440dc5d6c9659319b67c9b1e910dc79cf684ef242fb0fb0454f9d8d870_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1ef2d77b7739a6a9eb5e110efc4046db1caa16c17f731f49a19a1c728f097f0 = $this->env->getExtension("native_profiler");
        $__internal_f1ef2d77b7739a6a9eb5e110efc4046db1caa16c17f731f49a19a1c728f097f0->enter($__internal_f1ef2d77b7739a6a9eb5e110efc4046db1caa16c17f731f49a19a1c728f097f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\" >
                    <div class=\"panel-heading\">
                        <div class=\"panel-title\">Authentification</div>                        
                    </div>     

                    <div style=\"padding-top:30px\" class=\"panel-body\" >
                            ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 27
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 29
        echo "
                            <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\" class=\"form-horizontal\" role=\"form\">
                                <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        <input id=\"useremail\" class=\"form-control\" type=\"email\" id=\"useremail\" name=\"useremail\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_useremail"]) ? $context["last_useremail"] : $this->getContext($context, "last_useremail")), "html", null, true);
        echo "\" placeholder=\"Votre email\">                                        
                                    </div>
                                
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                        <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"password\">
                                    </div>
                                
                                
                                <div class=\"col-sm-12 controls\">
                                
                                <button type=\"submit\" class=\"btn btn-success\">login</button> 
                                <input type=\"reset\" class=\"btn btn-warning\" value=\"Annuler\" />
                                </div>
                            </form>
                    </div>                     
                </div>
    </div>
";
        
        $__internal_f1ef2d77b7739a6a9eb5e110efc4046db1caa16c17f731f49a19a1c728f097f0->leave($__internal_f1ef2d77b7739a6a9eb5e110efc4046db1caa16c17f731f49a19a1c728f097f0_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b85ea89c06e39e81dcbea3f78962d541b368f463d90a7d56488b58ef59ce0d1a = $this->env->getExtension("native_profiler");
        $__internal_b85ea89c06e39e81dcbea3f78962d541b368f463d90a7d56488b58ef59ce0d1a->enter($__internal_b85ea89c06e39e81dcbea3f78962d541b368f463d90a7d56488b58ef59ce0d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b85ea89c06e39e81dcbea3f78962d541b368f463d90a7d56488b58ef59ce0d1a->leave($__internal_b85ea89c06e39e81dcbea3f78962d541b368f463d90a7d56488b58ef59ce0d1a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  162 => 53,  136 => 33,  130 => 30,  127 => 29,  121 => 27,  119 => 26,  110 => 19,  104 => 18,  95 => 10,  91 => 9,  87 => 8,  82 => 7,  76 => 6,  64 => 5,  56 => 56,  54 => 53,  51 => 52,  49 => 18,  41 => 13,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body> */
/*      */
/*         <div class="container">*/
/* {% block body %}*/
/*     <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info" >*/
/*                     <div class="panel-heading">*/
/*                         <div class="panel-title">Authentification</div>                        */
/*                     </div>     */
/* */
/*                     <div style="padding-top:30px" class="panel-body" >*/
/*                             {% if error %}*/
/*                                 <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                             {% endif %}*/
/* */
/*                             <form action="{{ path('login') }}" method="post" class="form-horizontal" role="form">*/
/*                                 <div style="margin-bottom: 25px" class="input-group">*/
/*                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/*                                         <input id="useremail" class="form-control" type="email" id="useremail" name="useremail" value="{{ last_useremail }}" placeholder="Votre email">                                        */
/*                                     </div>*/
/*                                 */
/*                             <div style="margin-bottom: 25px" class="input-group">*/
/*                                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                                         <input id="password" type="password" class="form-control" name="password" placeholder="password">*/
/*                                     </div>*/
/*                                 */
/*                                 */
/*                                 <div class="col-sm-12 controls">*/
/*                                 */
/*                                 <button type="submit" class="btn btn-success">login</button> */
/*                                 <input type="reset" class="btn btn-warning" value="Annuler" />*/
/*                                 </div>*/
/*                             </form>*/
/*                     </div>                     */
/*                 </div>*/
/*     </div>*/
/* {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
