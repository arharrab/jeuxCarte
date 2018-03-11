<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cce0b4c1b842af7a5b9f6c7d7638fb6d051d37ea8d071e5e702a52862ba08f94 extends Twig_Template
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
        $__internal_d850b5b24ae31469007f5d3a102c5c6e0bf30cc258282421eb2556a5afffabf8 = $this->env->getExtension("native_profiler");
        $__internal_d850b5b24ae31469007f5d3a102c5c6e0bf30cc258282421eb2556a5afffabf8->enter($__internal_d850b5b24ae31469007f5d3a102c5c6e0bf30cc258282421eb2556a5afffabf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d850b5b24ae31469007f5d3a102c5c6e0bf30cc258282421eb2556a5afffabf8->leave($__internal_d850b5b24ae31469007f5d3a102c5c6e0bf30cc258282421eb2556a5afffabf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
