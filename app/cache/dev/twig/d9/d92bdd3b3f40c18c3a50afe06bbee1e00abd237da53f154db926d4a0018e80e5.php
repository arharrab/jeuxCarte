<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2fc4a6052aab9524ba3721e0a1207b822b31b26807c7722ee3ed068edd9bfdc9 extends Twig_Template
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
        $__internal_b594879e00a950582b364cd9235e7a3c07ae7938b26bad3a039e579e48dcdecd = $this->env->getExtension("native_profiler");
        $__internal_b594879e00a950582b364cd9235e7a3c07ae7938b26bad3a039e579e48dcdecd->enter($__internal_b594879e00a950582b364cd9235e7a3c07ae7938b26bad3a039e579e48dcdecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b594879e00a950582b364cd9235e7a3c07ae7938b26bad3a039e579e48dcdecd->leave($__internal_b594879e00a950582b364cd9235e7a3c07ae7938b26bad3a039e579e48dcdecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
