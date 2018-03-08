<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_517bb9813c931b92527790c155cfd8aa2b9d49a22ec96384887a50217437b8b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7089164fdd1b18785e9bdfc05afba9af52bb398455fd449216c89a9f73eb440 = $this->env->getExtension("native_profiler");
        $__internal_c7089164fdd1b18785e9bdfc05afba9af52bb398455fd449216c89a9f73eb440->enter($__internal_c7089164fdd1b18785e9bdfc05afba9af52bb398455fd449216c89a9f73eb440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7089164fdd1b18785e9bdfc05afba9af52bb398455fd449216c89a9f73eb440->leave($__internal_c7089164fdd1b18785e9bdfc05afba9af52bb398455fd449216c89a9f73eb440_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e555d46ca9083caefc509b654c4e5dd0bb289fa1884d2af623ddf612b8259b95 = $this->env->getExtension("native_profiler");
        $__internal_e555d46ca9083caefc509b654c4e5dd0bb289fa1884d2af623ddf612b8259b95->enter($__internal_e555d46ca9083caefc509b654c4e5dd0bb289fa1884d2af623ddf612b8259b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "     
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Bienvenu sur notre jeux de cartes</h1>
        <p>Vous devez demander une main qui vous sera selectionnée aléatoirement</p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_new_hand", array("joueur" => (isset($context["JoueurID"]) ? $context["JoueurID"] : $this->getContext($context, "JoueurID")))), "html", null, true);
        echo "\"> 
                <span class=\"fa fa-exchange\"></span> Nouvelle Partie </a>
        </p>
    </div>
</div>

";
        
        $__internal_e555d46ca9083caefc509b654c4e5dd0bb289fa1884d2af623ddf612b8259b95->leave($__internal_e555d46ca9083caefc509b654c4e5dd0bb289fa1884d2af623ddf612b8259b95_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}     */
/* <div class="container">*/
/*     <div class="jumbotron">*/
/*         <h1>Bienvenu sur notre jeux de cartes</h1>*/
/*         <p>Vous devez demander une main qui vous sera selectionnée aléatoirement</p>*/
/*         <p>*/
/*             <a class="btn btn-primary btn-lg" href="{{ path('party_new_hand', {'joueur': JoueurID}) }}"> */
/*                 <span class="fa fa-exchange"></span> Nouvelle Partie </a>*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
