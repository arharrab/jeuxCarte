<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_88ae5e83c39ae271e8f6266aec1cce1676dea0465cac3bd32a63ee4574f43d4d extends Twig_Template
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
        $__internal_ab16ed74ded2d56da1ee588b662fe063aba167bdd6430a3eba92b29ced317789 = $this->env->getExtension("native_profiler");
        $__internal_ab16ed74ded2d56da1ee588b662fe063aba167bdd6430a3eba92b29ced317789->enter($__internal_ab16ed74ded2d56da1ee588b662fe063aba167bdd6430a3eba92b29ced317789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ab16ed74ded2d56da1ee588b662fe063aba167bdd6430a3eba92b29ced317789->leave($__internal_ab16ed74ded2d56da1ee588b662fe063aba167bdd6430a3eba92b29ced317789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
