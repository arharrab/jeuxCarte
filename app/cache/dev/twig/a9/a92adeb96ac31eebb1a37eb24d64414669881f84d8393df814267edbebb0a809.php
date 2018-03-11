<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e3391dbcb050f2332c3a3757b9e12bbd05986aedde6cd0d00c8e51842be5bb24 extends Twig_Template
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
        $__internal_f28db54723b3d0dd35f277c739fa3d6556db63ddba83461c61a7adde893b7fb1 = $this->env->getExtension("native_profiler");
        $__internal_f28db54723b3d0dd35f277c739fa3d6556db63ddba83461c61a7adde893b7fb1->enter($__internal_f28db54723b3d0dd35f277c739fa3d6556db63ddba83461c61a7adde893b7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f28db54723b3d0dd35f277c739fa3d6556db63ddba83461c61a7adde893b7fb1->leave($__internal_f28db54723b3d0dd35f277c739fa3d6556db63ddba83461c61a7adde893b7fb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
