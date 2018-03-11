<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_022198203465cbee83b2e3890bf9c0c3d8bdadcb64f723451c49d796237cca76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7e63fee192000f200d9aedd3ec2051f98b8ea5f0097de8678726e3ff42adef = $this->env->getExtension("native_profiler");
        $__internal_9a7e63fee192000f200d9aedd3ec2051f98b8ea5f0097de8678726e3ff42adef->enter($__internal_9a7e63fee192000f200d9aedd3ec2051f98b8ea5f0097de8678726e3ff42adef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9a7e63fee192000f200d9aedd3ec2051f98b8ea5f0097de8678726e3ff42adef->leave($__internal_9a7e63fee192000f200d9aedd3ec2051f98b8ea5f0097de8678726e3ff42adef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
