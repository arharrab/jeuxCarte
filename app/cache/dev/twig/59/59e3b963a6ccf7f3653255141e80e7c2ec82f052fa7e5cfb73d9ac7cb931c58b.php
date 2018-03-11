<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8747efea72a6b0dc0fb98311b1f8bc83ddb79e404aefdb6a71fbd72496c3fd84 extends Twig_Template
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
        $__internal_94383289192585d5da028271d6c38b0e497d41ec73b910c6543fd189d29b9b2d = $this->env->getExtension("native_profiler");
        $__internal_94383289192585d5da028271d6c38b0e497d41ec73b910c6543fd189d29b9b2d->enter($__internal_94383289192585d5da028271d6c38b0e497d41ec73b910c6543fd189d29b9b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_94383289192585d5da028271d6c38b0e497d41ec73b910c6543fd189d29b9b2d->leave($__internal_94383289192585d5da028271d6c38b0e497d41ec73b910c6543fd189d29b9b2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
