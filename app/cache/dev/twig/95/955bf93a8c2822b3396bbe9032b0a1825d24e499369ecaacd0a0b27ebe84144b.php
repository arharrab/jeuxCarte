<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4c0f6dd06b1b1d2d545ee038e140707cf806e2434e37bbf9b659de67f018467d extends Twig_Template
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
        $__internal_9a3dbdec5ef4f553f96bbaf43a78260c241edec6e9d61677c2140d8a33d65b81 = $this->env->getExtension("native_profiler");
        $__internal_9a3dbdec5ef4f553f96bbaf43a78260c241edec6e9d61677c2140d8a33d65b81->enter($__internal_9a3dbdec5ef4f553f96bbaf43a78260c241edec6e9d61677c2140d8a33d65b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9a3dbdec5ef4f553f96bbaf43a78260c241edec6e9d61677c2140d8a33d65b81->leave($__internal_9a3dbdec5ef4f553f96bbaf43a78260c241edec6e9d61677c2140d8a33d65b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
