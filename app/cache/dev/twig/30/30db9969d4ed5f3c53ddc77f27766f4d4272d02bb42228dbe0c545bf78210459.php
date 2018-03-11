<?php

/* AppBundle:Default:resultat.html.twig */
class __TwigTemplate_9bffde94e83ff32e218b34181191243dcf354b5d73f11aa5f917348cecfd5138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:resultat.html.twig", 1);
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
        $__internal_71b9c17d3622e2772fcd2004e05563814c4612ac166ce1c08a85a6d6c0a097d8 = $this->env->getExtension("native_profiler");
        $__internal_71b9c17d3622e2772fcd2004e05563814c4612ac166ce1c08a85a6d6c0a097d8->enter($__internal_71b9c17d3622e2772fcd2004e05563814c4612ac166ce1c08a85a6d6c0a097d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b9c17d3622e2772fcd2004e05563814c4612ac166ce1c08a85a6d6c0a097d8->leave($__internal_71b9c17d3622e2772fcd2004e05563814c4612ac166ce1c08a85a6d6c0a097d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e95d0337d043cd42a1e8f420c2f74a289968623a5e45b4b57d2c9e104dd6e8 = $this->env->getExtension("native_profiler");
        $__internal_d4e95d0337d043cd42a1e8f420c2f74a289968623a5e45b4b57d2c9e104dd6e8->enter($__internal_d4e95d0337d043cd42a1e8f420c2f74a289968623a5e45b4b57d2c9e104dd6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "     
<div class=\"container\">
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData")), "html", null, true);
        echo "
</div>

";
        
        $__internal_d4e95d0337d043cd42a1e8f420c2f74a289968623a5e45b4b57d2c9e104dd6e8->leave($__internal_d4e95d0337d043cd42a1e8f420c2f74a289968623a5e45b4b57d2c9e104dd6e8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}     */
/* <div class="container">*/
/*     {{ jsonData }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
