<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bad24acc5022d6103acfbf6a9471c73d4d057e0e574ecd862fc983c9951fefe3 extends Twig_Template
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
        $__internal_ecf34b7f177d4c0d8a8ca84bee770e183836f0115e1c3101d17f60237f1d80f4 = $this->env->getExtension("native_profiler");
        $__internal_ecf34b7f177d4c0d8a8ca84bee770e183836f0115e1c3101d17f60237f1d80f4->enter($__internal_ecf34b7f177d4c0d8a8ca84bee770e183836f0115e1c3101d17f60237f1d80f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ecf34b7f177d4c0d8a8ca84bee770e183836f0115e1c3101d17f60237f1d80f4->leave($__internal_ecf34b7f177d4c0d8a8ca84bee770e183836f0115e1c3101d17f60237f1d80f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
