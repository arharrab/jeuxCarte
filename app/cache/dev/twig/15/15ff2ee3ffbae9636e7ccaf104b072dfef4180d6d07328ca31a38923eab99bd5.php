<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_17141a4b8ffa51409b94d0c447747417cd5a6ba4d458c236c9e6b0bc876ad0f0 extends Twig_Template
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
        $__internal_232b0a63bf558350d5d1fc749c6565302f9443ec89624cbf3c20b1b87e8a8031 = $this->env->getExtension("native_profiler");
        $__internal_232b0a63bf558350d5d1fc749c6565302f9443ec89624cbf3c20b1b87e8a8031->enter($__internal_232b0a63bf558350d5d1fc749c6565302f9443ec89624cbf3c20b1b87e8a8031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_232b0a63bf558350d5d1fc749c6565302f9443ec89624cbf3c20b1b87e8a8031->leave($__internal_232b0a63bf558350d5d1fc749c6565302f9443ec89624cbf3c20b1b87e8a8031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
