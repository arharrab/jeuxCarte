<?php

/* @App/Default/resultat.html.twig */
class __TwigTemplate_66b1f7d7e642a22e886cb06b11acdc79b96abe04e72d2f3313024e537320151d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Default/resultat.html.twig", 1);
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
        $__internal_b62bd32c757c004fd021a749612e7ed21b4c7f53a7f23902144b0f0c360bddb4 = $this->env->getExtension("native_profiler");
        $__internal_b62bd32c757c004fd021a749612e7ed21b4c7f53a7f23902144b0f0c360bddb4->enter($__internal_b62bd32c757c004fd021a749612e7ed21b4c7f53a7f23902144b0f0c360bddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/resultat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62bd32c757c004fd021a749612e7ed21b4c7f53a7f23902144b0f0c360bddb4->leave($__internal_b62bd32c757c004fd021a749612e7ed21b4c7f53a7f23902144b0f0c360bddb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b829e947a64a2310075b10b050c029a846c6c3d215fdbd9c2e904d1d149b763 = $this->env->getExtension("native_profiler");
        $__internal_0b829e947a64a2310075b10b050c029a846c6c3d215fdbd9c2e904d1d149b763->enter($__internal_0b829e947a64a2310075b10b050c029a846c6c3d215fdbd9c2e904d1d149b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "     
<div class=\"container\">
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData")), "html", null, true);
        echo "
</div>

";
        
        $__internal_0b829e947a64a2310075b10b050c029a846c6c3d215fdbd9c2e904d1d149b763->leave($__internal_0b829e947a64a2310075b10b050c029a846c6c3d215fdbd9c2e904d1d149b763_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/resultat.html.twig";
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
