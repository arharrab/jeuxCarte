<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_87bfe58e71b73297236b07644f593241fecef671bb3a7a32ae8dd699b09d392d extends Twig_Template
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
        $__internal_4ba5ab28339395e4ea911c58fa2e62e852b217a65751c0a7aa091d2702ebcc56 = $this->env->getExtension("native_profiler");
        $__internal_4ba5ab28339395e4ea911c58fa2e62e852b217a65751c0a7aa091d2702ebcc56->enter($__internal_4ba5ab28339395e4ea911c58fa2e62e852b217a65751c0a7aa091d2702ebcc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ba5ab28339395e4ea911c58fa2e62e852b217a65751c0a7aa091d2702ebcc56->leave($__internal_4ba5ab28339395e4ea911c58fa2e62e852b217a65751c0a7aa091d2702ebcc56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
