<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_769b939d082d75b30337d2747693106b0107d4ae3d7590c897ebb167190a5224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Default/index.html.twig", 1);
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
        $__internal_567ec53dce5b79217ba3bc8f12a28cb6b4ccf18cbad72a7ebb77456e0ec4a918 = $this->env->getExtension("native_profiler");
        $__internal_567ec53dce5b79217ba3bc8f12a28cb6b4ccf18cbad72a7ebb77456e0ec4a918->enter($__internal_567ec53dce5b79217ba3bc8f12a28cb6b4ccf18cbad72a7ebb77456e0ec4a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567ec53dce5b79217ba3bc8f12a28cb6b4ccf18cbad72a7ebb77456e0ec4a918->leave($__internal_567ec53dce5b79217ba3bc8f12a28cb6b4ccf18cbad72a7ebb77456e0ec4a918_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d7e8efa4ebc161f94721879947525c2bdf1133f180ae1ce22618cf5280d5cb = $this->env->getExtension("native_profiler");
        $__internal_36d7e8efa4ebc161f94721879947525c2bdf1133f180ae1ce22618cf5280d5cb->enter($__internal_36d7e8efa4ebc161f94721879947525c2bdf1133f180ae1ce22618cf5280d5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36d7e8efa4ebc161f94721879947525c2bdf1133f180ae1ce22618cf5280d5cb->leave($__internal_36d7e8efa4ebc161f94721879947525c2bdf1133f180ae1ce22618cf5280d5cb_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/index.html.twig";
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
