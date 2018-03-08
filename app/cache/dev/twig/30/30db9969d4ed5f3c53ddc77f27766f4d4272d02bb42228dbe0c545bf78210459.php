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
        $__internal_ea8595f96b7dac6c88176fbb09cc8698e3fa03d65364eeff79f5815fb82f9589 = $this->env->getExtension("native_profiler");
        $__internal_ea8595f96b7dac6c88176fbb09cc8698e3fa03d65364eeff79f5815fb82f9589->enter($__internal_ea8595f96b7dac6c88176fbb09cc8698e3fa03d65364eeff79f5815fb82f9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8595f96b7dac6c88176fbb09cc8698e3fa03d65364eeff79f5815fb82f9589->leave($__internal_ea8595f96b7dac6c88176fbb09cc8698e3fa03d65364eeff79f5815fb82f9589_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa654b52e141fdaa329a7b9c93e98fa34efb09ef03e8ec7135f2e65154ea8cb = $this->env->getExtension("native_profiler");
        $__internal_4fa654b52e141fdaa329a7b9c93e98fa34efb09ef03e8ec7135f2e65154ea8cb->enter($__internal_4fa654b52e141fdaa329a7b9c93e98fa34efb09ef03e8ec7135f2e65154ea8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "     
<div class=\"container\">
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData")), "html", null, true);
        echo "
</div>

";
        
        $__internal_4fa654b52e141fdaa329a7b9c93e98fa34efb09ef03e8ec7135f2e65154ea8cb->leave($__internal_4fa654b52e141fdaa329a7b9c93e98fa34efb09ef03e8ec7135f2e65154ea8cb_prof);

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
