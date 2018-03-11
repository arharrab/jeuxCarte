<?php

/* AppBundle:Default:main.html.twig */
class __TwigTemplate_5c831e120f64b65529a016f6f27196a9057454fe46794ce15927bc6ae65a701e extends Twig_Template
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
        $__internal_f39860dde3981b69f54cb8fc391c91e69f39b72f398dd45ca4e38a4da361c219 = $this->env->getExtension("native_profiler");
        $__internal_f39860dde3981b69f54cb8fc391c91e69f39b72f398dd45ca4e38a4da361c219->enter($__internal_f39860dde3981b69f54cb8fc391c91e69f39b72f398dd45ca4e38a4da361c219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39860dde3981b69f54cb8fc391c91e69f39b72f398dd45ca4e38a4da361c219->leave($__internal_f39860dde3981b69f54cb8fc391c91e69f39b72f398dd45ca4e38a4da361c219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b10a6a6d3cfa08fd252b825cbde27144d362a40ac23e2afceff427c2e149a7 = $this->env->getExtension("native_profiler");
        $__internal_49b10a6a6d3cfa08fd252b825cbde27144d362a40ac23e2afceff427c2e149a7->enter($__internal_49b10a6a6d3cfa08fd252b825cbde27144d362a40ac23e2afceff427c2e149a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    type: \"GET\",
                    dataType : \"text\",
                    contentType: \"text/plain\",
                    url: '";
        // line 20
        echo $this->env->getExtension('routing')->getPath("party_get_hand");
        echo "',
                    success: function (data) {
                        alert(data);
                        \$.ajax({
                            type: \"POST\",
                            dataType : \"text\",
                            contentType: \"text/plain\",
                            data: data,
                            url: 'https://recrutement.local-trust.com/test/5aa158e0975a0c0e5ee75671',
                            success: function (data, textStatus, xhr) {
                              alert(xhr.status);
                            },
                            complete: function(xhr, textStatus) {
                                alert(xhr.status);
                            } 
                        });
                    },
                    complete: function(xhr, textStatus) {
                        //alert(xhr.status);
                    } 
                });
            });

        });
    </script>
    
    
    ";
        // line 47
        $context["col_counter"] = 0;
        // line 48
        echo "
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main"]) ? $context["main"] : $this->getContext($context, "main")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 50
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 5)) {
                // line 51
                echo "            ";
                $context["col_counter"] = 0;
                // line 52
                echo "        ";
            }
            // line 53
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 0)) {
                // line 54
                echo "            <div class=\"row\">
        ";
            }
            // line 56
            echo "                
        <div class=\"col-lg-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
            // line 60
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["carte"], "category", array())), "html", null, true);
            echo "
                    <img class=\"img-responsive\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("assets/img/" . twig_lower_filter($this->env, $this->getAttribute($context["carte"], "category", array()))) . ".jpg")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "category", array()), "html", null, true);
            echo "\"/>
                </div>
                <div class=\"panel-footer text-bold text-center\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte"], "value", array()), "html", null, true);
            echo "</div>
            </div>
        </div>
        
        ";
            // line 67
            $context["col_counter"] = ((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) + 1);
            // line 68
            echo "        ";
            if (((isset($context["col_counter"]) ? $context["col_counter"] : $this->getContext($context, "col_counter")) == 5)) {
                // line 69
                echo "            </div>      
        ";
            }
            // line 71
            echo "        
        
        
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    ";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["jsonData"]) ? $context["jsonData"] : $this->getContext($context, "jsonData"))), "html", null, true);
        echo "
    
";
        
        $__internal_49b10a6a6d3cfa08fd252b825cbde27144d362a40ac23e2afceff427c2e149a7->leave($__internal_49b10a6a6d3cfa08fd252b825cbde27144d362a40ac23e2afceff427c2e149a7_prof);

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
        return array (  156 => 76,  146 => 71,  142 => 69,  139 => 68,  137 => 67,  130 => 63,  123 => 61,  119 => 60,  113 => 56,  109 => 54,  106 => 53,  103 => 52,  100 => 51,  97 => 50,  93 => 49,  90 => 48,  88 => 47,  58 => 20,  34 => 3,  11 => 1,);
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
/*                     type: "GET",*/
/*                     dataType : "text",*/
/*                     contentType: "text/plain",*/
/*                     url: '{{ path('party_get_hand') }}',*/
/*                     success: function (data) {*/
/*                         alert(data);*/
/*                         $.ajax({*/
/*                             type: "POST",*/
/*                             dataType : "text",*/
/*                             contentType: "text/plain",*/
/*                             data: data,*/
/*                             url: 'https://recrutement.local-trust.com/test/5aa158e0975a0c0e5ee75671',*/
/*                             success: function (data, textStatus, xhr) {*/
/*                               alert(xhr.status);*/
/*                             },*/
/*                             complete: function(xhr, textStatus) {*/
/*                                 alert(xhr.status);*/
/*                             } */
/*                         });*/
/*                     },*/
/*                     complete: function(xhr, textStatus) {*/
/*                         //alert(xhr.status);*/
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
