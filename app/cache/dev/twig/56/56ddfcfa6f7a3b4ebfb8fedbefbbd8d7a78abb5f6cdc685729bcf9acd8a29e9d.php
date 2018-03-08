<?php

/* AppBundle:Joueur:show.html.twig */
class __TwigTemplate_16b2c47c51b6c484901ac1b7ab20202c51d601843744f5d5d9d522dcdef32c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Joueur:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_471490c1f800465ba042d7b243d8d0b2606b405767e87436cb5dedc111951bf1 = $this->env->getExtension("native_profiler");
        $__internal_471490c1f800465ba042d7b243d8d0b2606b405767e87436cb5dedc111951bf1->enter($__internal_471490c1f800465ba042d7b243d8d0b2606b405767e87436cb5dedc111951bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Joueur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471490c1f800465ba042d7b243d8d0b2606b405767e87436cb5dedc111951bf1->leave($__internal_471490c1f800465ba042d7b243d8d0b2606b405767e87436cb5dedc111951bf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bce44769a56561c14893c0820adeeef34d09154de7d5c20275dd7bf0a63c6d3 = $this->env->getExtension("native_profiler");
        $__internal_1bce44769a56561c14893c0820adeeef34d09154de7d5c20275dd7bf0a63c6d3->enter($__internal_1bce44769a56561c14893c0820adeeef34d09154de7d5c20275dd7bf0a63c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Joueur</h1>

    <table class=\"table table-bordered table-hover table-responsive\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joueur"]) ? $context["joueur"] : $this->getContext($context, "joueur")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("joueur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</div>
";
        
        $__internal_1bce44769a56561c14893c0820adeeef34d09154de7d5c20275dd7bf0a63c6d3->leave($__internal_1bce44769a56561c14893c0820adeeef34d09154de7d5c20275dd7bf0a63c6d3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Joueur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>Joueur</h1>*/
/* */
/*     <table class="table table-bordered table-hover table-responsive">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ joueur.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ joueur.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ joueur.email }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('joueur_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
