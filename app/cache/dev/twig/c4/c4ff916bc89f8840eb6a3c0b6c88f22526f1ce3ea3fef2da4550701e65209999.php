<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_77b7bc50e5e4b306bb12d877724a4697b3eb1a67988be020b32634e8afcb48dd extends Twig_Template
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
        $__internal_d8603236a486a4433ef24d6f82e7e7aff7c4eb526bdaa69f076aba484b99a14d = $this->env->getExtension("native_profiler");
        $__internal_d8603236a486a4433ef24d6f82e7e7aff7c4eb526bdaa69f076aba484b99a14d->enter($__internal_d8603236a486a4433ef24d6f82e7e7aff7c4eb526bdaa69f076aba484b99a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d8603236a486a4433ef24d6f82e7e7aff7c4eb526bdaa69f076aba484b99a14d->leave($__internal_d8603236a486a4433ef24d6f82e7e7aff7c4eb526bdaa69f076aba484b99a14d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
