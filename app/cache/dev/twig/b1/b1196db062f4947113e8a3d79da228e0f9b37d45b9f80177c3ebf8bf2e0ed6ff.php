<?php

/* AppBundle:Default:main.html.twig */
class __TwigTemplate_114ee2f9ce5c78ae58117a6a070263fe0ed922cfd257157634cc8c751e3efb10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:main.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f608c6748dbbd5d4aa506d8a857826e966e5de475e9d18787ed73a04f5692efd = $this->env->getExtension("native_profiler");
        $__internal_f608c6748dbbd5d4aa506d8a857826e966e5de475e9d18787ed73a04f5692efd->enter($__internal_f608c6748dbbd5d4aa506d8a857826e966e5de475e9d18787ed73a04f5692efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f608c6748dbbd5d4aa506d8a857826e966e5de475e9d18787ed73a04f5692efd->leave($__internal_f608c6748dbbd5d4aa506d8a857826e966e5de475e9d18787ed73a04f5692efd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3bee2021593e25c7c8a6416ac4cb1396d5823ef058d1b97ccc605de3c4eae6 = $this->env->getExtension("native_profiler");
        $__internal_df3bee2021593e25c7c8a6416ac4cb1396d5823ef058d1b97ccc605de3c4eae6->enter($__internal_df3bee2021593e25c7c8a6416ac4cb1396d5823ef058d1b97ccc605de3c4eae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   
    
    <p>
        <a id=\"validate_hand\" class=\"btn btn-primary btn-lg\" href=\"#\"> 
            <span class=\"fa fa-exchange\"></span> Envoyer cette main 
        </a>
    </p>
    
    <script>
        \$(document).ready(function() {
           
            \$(\" #validate_hand \").one( \"click\", function() {

                \$.ajax({
                    type: \"POST\",
                    dataType : \"text\",
                    contentType: \"text/plain\",
                    data: '";
        // line 20
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData"))), "html", null, true);
        echo "',
                    url: 'https://recrutement.local-trust.com/test/5aa158e0975a0c0e5ee75671',
                    success: function (data, textStatus, xhr) {
                        alert(xhr.status);
                    },
                    complete: function(xhr, textStatus) {
                        alert(xhr.status);
                    } 
                });
            });

        });
    </script>
    
    
    ";
        // line 35
        $context["col_counter"] = 0;
        // line 36
        echo "
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main"]) ? $context["main"] : $this->getContext($context, "main")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 38
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 5)) {
                // line 39
                echo "            ";
                $context["col_counter"] = 0;
                // line 40
                echo "        ";
            }
            // line 41
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 0)) {
                // line 42
                echo "            <div class=\"row\">
        ";
            }
            // line 44
            echo "                
        <div class=\"col-lg-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["carte"], "category", array())), "html", null, true);
            echo "
                    <img class=\"img-responsive\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("assets/img/" . twig_lower_filter($this->env, $this->getAttribute($context["carte"], "category", array()))) . ".jpg")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "category", array()), "html", null, true);
            echo "\"/>
                </div>
                <div class=\"panel-footer text-bold text-center\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "value", array()), "html", null, true);
            echo "</div>
            </div>
        </div>
        
        ";
            // line 55
            $context["col_counter"] = ((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) + 1);
            // line 56
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 5)) {
                // line 57
                echo "            </div>      
        ";
            }
            // line 59
            echo "        
        
        
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData"))), "html", null, true);
        echo "
    
";
        
        $__internal_df3bee2021593e25c7c8a6416ac4cb1396d5823ef058d1b97ccc605de3c4eae6->leave($__internal_df3bee2021593e25c7c8a6416ac4cb1396d5823ef058d1b97ccc605de3c4eae6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  134 => 59,  130 => 57,  127 => 56,  125 => 55,  118 => 51,  111 => 49,  107 => 48,  101 => 44,  97 => 42,  94 => 41,  91 => 40,  88 => 39,  85 => 38,  81 => 37,  78 => 36,  76 => 35,  58 => 20,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}   */
/*     */
/*     <p>*/
/*         <a id="validate_hand" class="btn btn-primary btn-lg" href="#"> */
/*             <span class="fa fa-exchange"></span> Envoyer cette main */
/*         </a>*/
/*     </p>*/
/*     */
/*     <script>*/
/*         $(document).ready(function() {*/
/*            */
/*             $(" #validate_hand ").one( "click", function() {*/
/* */
/*                 $.ajax({*/
/*                     type: "POST",*/
/*                     dataType : "text",*/
/*                     contentType: "text/plain",*/
/*                     data: '{{ jsonData | json_encode()}}',*/
/*                     url: 'https://recrutement.local-trust.com/test/5aa158e0975a0c0e5ee75671',*/
/*                     success: function (data, textStatus, xhr) {*/
/*                         alert(xhr.status);*/
/*                     },*/
/*                     complete: function(xhr, textStatus) {*/
/*                         alert(xhr.status);*/
/*                     } */
/*                 });*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/*     */
/*     */
/*     {% set col_counter = 0 %}*/
/* */
/*     {% for carte in main %}*/
/*         {% if col_counter==5 %}*/
/*             {% set col_counter = 0 %}*/
/*         {% endif %}*/
/*         {% if col_counter==0 %}*/
/*             <div class="row">*/
/*         {% endif %}*/
/*                 */
/*         <div class="col-lg-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     {{carte.category | upper}}*/
/*                     <img class="img-responsive" src="{{ asset('assets/img/' ~ carte.category | lower ~ '.jpg') }}" alt="{{carte.category}}"/>*/
/*                 </div>*/
/*                 <div class="panel-footer text-bold text-center">{{carte.value}}</div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         {% set col_counter = col_counter + 1 %}*/
/*         {% if col_counter==5 %}*/
/*             </div>      */
/*         {% endif %}*/
/*         */
/*         */
/*         */
/*         */
/*     {% endfor %}*/
/*     {{ jsonData|json_encode()}}*/
/*     */
/* {% endblock %}*/
/* */
/* */
