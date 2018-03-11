<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7df7684f834f28a44e2e29efb1e224e67d7fadeef268277124884b21c2618f12 extends Twig_Template
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
        $__internal_7983b483c7285fa033835660fdc172375c5af277eaad3c18bc73d95cbd1654a4 = $this->env->getExtension("native_profiler");
        $__internal_7983b483c7285fa033835660fdc172375c5af277eaad3c18bc73d95cbd1654a4->enter($__internal_7983b483c7285fa033835660fdc172375c5af277eaad3c18bc73d95cbd1654a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7983b483c7285fa033835660fdc172375c5af277eaad3c18bc73d95cbd1654a4->leave($__internal_7983b483c7285fa033835660fdc172375c5af277eaad3c18bc73d95cbd1654a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
