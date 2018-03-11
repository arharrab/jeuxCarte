<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20b1181824b6ecbe22b5ac2dbf82ac708d28dd54e039c21ce7dba9afbde10c3e extends Twig_Template
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
        $__internal_11350d80177a90ba810183fd18893af8bd43f406947ef11cd59d356d0809656b = $this->env->getExtension("native_profiler");
        $__internal_11350d80177a90ba810183fd18893af8bd43f406947ef11cd59d356d0809656b->enter($__internal_11350d80177a90ba810183fd18893af8bd43f406947ef11cd59d356d0809656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_11350d80177a90ba810183fd18893af8bd43f406947ef11cd59d356d0809656b->leave($__internal_11350d80177a90ba810183fd18893af8bd43f406947ef11cd59d356d0809656b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'submit')) ?>*/
/* */
