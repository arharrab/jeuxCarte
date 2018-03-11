<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_94e97673a960086746ee00fa7932bb1635ea5a5c4eeb5043f682973e6fb40731 extends Twig_Template
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
        $__internal_2515f4177c927ea21daf8fe0102c9fc72ff49cc49db87ad44eeb138176244a68 = $this->env->getExtension("native_profiler");
        $__internal_2515f4177c927ea21daf8fe0102c9fc72ff49cc49db87ad44eeb138176244a68->enter($__internal_2515f4177c927ea21daf8fe0102c9fc72ff49cc49db87ad44eeb138176244a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2515f4177c927ea21daf8fe0102c9fc72ff49cc49db87ad44eeb138176244a68->leave($__internal_2515f4177c927ea21daf8fe0102c9fc72ff49cc49db87ad44eeb138176244a68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
