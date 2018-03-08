<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_64463fc804006fad7d64e415f5b6201ad1bd90279db7f2aef807f15d8f030911 extends Twig_Template
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
        $__internal_7856d9a723cbc2ec4e637ee8ceee499ab5b74076a2ee7da7b7a2f68b2bddcd57 = $this->env->getExtension("native_profiler");
        $__internal_7856d9a723cbc2ec4e637ee8ceee499ab5b74076a2ee7da7b7a2f68b2bddcd57->enter($__internal_7856d9a723cbc2ec4e637ee8ceee499ab5b74076a2ee7da7b7a2f68b2bddcd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7856d9a723cbc2ec4e637ee8ceee499ab5b74076a2ee7da7b7a2f68b2bddcd57->leave($__internal_7856d9a723cbc2ec4e637ee8ceee499ab5b74076a2ee7da7b7a2f68b2bddcd57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6f68edb0a22e6d0f4fe176295ae4461296445f77c14b054a8fddeebe205dd8 = $this->env->getExtension("native_profiler");
        $__internal_6b6f68edb0a22e6d0f4fe176295ae4461296445f77c14b054a8fddeebe205dd8->enter($__internal_6b6f68edb0a22e6d0f4fe176295ae4461296445f77c14b054a8fddeebe205dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b6f68edb0a22e6d0f4fe176295ae4461296445f77c14b054a8fddeebe205dd8->leave($__internal_6b6f68edb0a22e6d0f4fe176295ae4461296445f77c14b054a8fddeebe205dd8_prof);

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
