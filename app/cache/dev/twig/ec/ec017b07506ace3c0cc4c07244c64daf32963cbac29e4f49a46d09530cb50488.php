<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d5bd56cf39824698bb2d12b64515e03daadd1108f95780a79fc578244b974a2f extends Twig_Template
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
        $__internal_bcc7eb415d249168e11c51ce5f6a9ab41890bf47fd916b927d1cdf69eccca47e = $this->env->getExtension("native_profiler");
        $__internal_bcc7eb415d249168e11c51ce5f6a9ab41890bf47fd916b927d1cdf69eccca47e->enter($__internal_bcc7eb415d249168e11c51ce5f6a9ab41890bf47fd916b927d1cdf69eccca47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bcc7eb415d249168e11c51ce5f6a9ab41890bf47fd916b927d1cdf69eccca47e->leave($__internal_bcc7eb415d249168e11c51ce5f6a9ab41890bf47fd916b927d1cdf69eccca47e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
