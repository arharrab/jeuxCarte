<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_8f88631f0496e652044e7859441f108547b8e2b50fe502616b64f8f0bf3af86c extends Twig_Template
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
        $__internal_edcf965e3a26938b46d15b38c7c266e701716e437fd3b76ccf2e1754cdd5dbe5 = $this->env->getExtension("native_profiler");
        $__internal_edcf965e3a26938b46d15b38c7c266e701716e437fd3b76ccf2e1754cdd5dbe5->enter($__internal_edcf965e3a26938b46d15b38c7c266e701716e437fd3b76ccf2e1754cdd5dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_edcf965e3a26938b46d15b38c7c266e701716e437fd3b76ccf2e1754cdd5dbe5->leave($__internal_edcf965e3a26938b46d15b38c7c266e701716e437fd3b76ccf2e1754cdd5dbe5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <?php $vars = $widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php*/
/*             // There should be no spaces between the colons and the widgets, that's why*/
/*             // this block is written in a single PHP tag*/
/*             echo $view['form']->widget($form['hour'], $vars);*/
/* */
/*             if ($with_minutes) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['minute'], $vars);*/
/*             }*/
/* */
/*             if ($with_seconds) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['second'], $vars);*/
/*             }*/
/*         ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
