<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a0c8b55d16f19e650b245e80661c5550f052514199389b4fed34a707163ca856 extends Twig_Template
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
        $__internal_55c7e1d519e34f7265f97f3612a8d4a2247a9b2bc5fb84d9a48eb0e4a45bf96f = $this->env->getExtension("native_profiler");
        $__internal_55c7e1d519e34f7265f97f3612a8d4a2247a9b2bc5fb84d9a48eb0e4a45bf96f->enter($__internal_55c7e1d519e34f7265f97f3612a8d4a2247a9b2bc5fb84d9a48eb0e4a45bf96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_55c7e1d519e34f7265f97f3612a8d4a2247a9b2bc5fb84d9a48eb0e4a45bf96f->leave($__internal_55c7e1d519e34f7265f97f3612a8d4a2247a9b2bc5fb84d9a48eb0e4a45bf96f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
