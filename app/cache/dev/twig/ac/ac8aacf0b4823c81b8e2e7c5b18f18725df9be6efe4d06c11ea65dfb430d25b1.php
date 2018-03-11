<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5a39ffd007e7510c48636817177ada8a57dec8a0027e8efc1ad65c55dc12092c extends Twig_Template
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
        $__internal_2554a1b8b30beba984ca6b32c2ed8a48776f45ecbf562070632456fec45dd66f = $this->env->getExtension("native_profiler");
        $__internal_2554a1b8b30beba984ca6b32c2ed8a48776f45ecbf562070632456fec45dd66f->enter($__internal_2554a1b8b30beba984ca6b32c2ed8a48776f45ecbf562070632456fec45dd66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2554a1b8b30beba984ca6b32c2ed8a48776f45ecbf562070632456fec45dd66f->leave($__internal_2554a1b8b30beba984ca6b32c2ed8a48776f45ecbf562070632456fec45dd66f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
