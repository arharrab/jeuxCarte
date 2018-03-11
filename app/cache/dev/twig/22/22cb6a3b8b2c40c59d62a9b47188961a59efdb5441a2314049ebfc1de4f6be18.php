<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_59970e558a87aea20b2d15abd11fd2b369994dd8bfbc99a4a4d7a9709cc860de extends Twig_Template
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
        $__internal_7394bc609c6b763fb48abe5909d5cf3cf0840c8f0598d3d82760c37f53378efa = $this->env->getExtension("native_profiler");
        $__internal_7394bc609c6b763fb48abe5909d5cf3cf0840c8f0598d3d82760c37f53378efa->enter($__internal_7394bc609c6b763fb48abe5909d5cf3cf0840c8f0598d3d82760c37f53378efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7394bc609c6b763fb48abe5909d5cf3cf0840c8f0598d3d82760c37f53378efa->leave($__internal_7394bc609c6b763fb48abe5909d5cf3cf0840c8f0598d3d82760c37f53378efa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
