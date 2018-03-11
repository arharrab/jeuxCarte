<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_21078571492bbb6b05d213300150c066bc93e9b1526465a60813a0d25e181b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63b2325863c38da1128d8a1be921e36a65fc0589a87d0003e83992e9a1772ccd = $this->env->getExtension("native_profiler");
        $__internal_63b2325863c38da1128d8a1be921e36a65fc0589a87d0003e83992e9a1772ccd->enter($__internal_63b2325863c38da1128d8a1be921e36a65fc0589a87d0003e83992e9a1772ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_63b2325863c38da1128d8a1be921e36a65fc0589a87d0003e83992e9a1772ccd->leave($__internal_63b2325863c38da1128d8a1be921e36a65fc0589a87d0003e83992e9a1772ccd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48418b442e9c2e7f7a2844c64b6dac9262a9a329274fb175caf8241a3113e6dc = $this->env->getExtension("native_profiler");
        $__internal_48418b442e9c2e7f7a2844c64b6dac9262a9a329274fb175caf8241a3113e6dc->enter($__internal_48418b442e9c2e7f7a2844c64b6dac9262a9a329274fb175caf8241a3113e6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48418b442e9c2e7f7a2844c64b6dac9262a9a329274fb175caf8241a3113e6dc->leave($__internal_48418b442e9c2e7f7a2844c64b6dac9262a9a329274fb175caf8241a3113e6dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
