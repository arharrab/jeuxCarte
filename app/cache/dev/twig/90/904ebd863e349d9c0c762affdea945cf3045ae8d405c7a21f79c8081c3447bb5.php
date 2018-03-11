<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3880347eb6e67bf18bbc518c9b8519ec9cba2b1cace19dc54c94675eea04a093 extends Twig_Template
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
        $__internal_b7a581da844b4e2003077fb9b30f0e662e6b21cd0633ebea79c6f4fbcf3eddbc = $this->env->getExtension("native_profiler");
        $__internal_b7a581da844b4e2003077fb9b30f0e662e6b21cd0633ebea79c6f4fbcf3eddbc->enter($__internal_b7a581da844b4e2003077fb9b30f0e662e6b21cd0633ebea79c6f4fbcf3eddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b7a581da844b4e2003077fb9b30f0e662e6b21cd0633ebea79c6f4fbcf3eddbc->leave($__internal_b7a581da844b4e2003077fb9b30f0e662e6b21cd0633ebea79c6f4fbcf3eddbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
