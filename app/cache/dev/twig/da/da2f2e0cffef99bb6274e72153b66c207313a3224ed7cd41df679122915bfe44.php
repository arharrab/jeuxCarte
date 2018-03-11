<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5e7efb7139f18015e8e1ec7ee0c602b5aa814691325a0645fd3797397e0c0042 extends Twig_Template
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
        $__internal_ce33e500c259beaa5a49b220d73a6c4229ee634fcbd4e33d27c231a20383faa0 = $this->env->getExtension("native_profiler");
        $__internal_ce33e500c259beaa5a49b220d73a6c4229ee634fcbd4e33d27c231a20383faa0->enter($__internal_ce33e500c259beaa5a49b220d73a6c4229ee634fcbd4e33d27c231a20383faa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ce33e500c259beaa5a49b220d73a6c4229ee634fcbd4e33d27c231a20383faa0->leave($__internal_ce33e500c259beaa5a49b220d73a6c4229ee634fcbd4e33d27c231a20383faa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
