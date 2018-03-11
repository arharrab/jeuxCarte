<?php

/* @App/Default/main.html.twig */
class __TwigTemplate_8b5bce3293a4d78f1fb3c2d4a8d688de4462d3fbc48967a6829ef8d2dfb36628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Default/main.html.twig", 1);
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
        $__internal_bcf6e35eca7f996bc9cfa246b5830a0cdb569c01dcbfb69687209f18b3259ef9 = $this->env->getExtension("native_profiler");
        $__internal_bcf6e35eca7f996bc9cfa246b5830a0cdb569c01dcbfb69687209f18b3259ef9->enter($__internal_bcf6e35eca7f996bc9cfa246b5830a0cdb569c01dcbfb69687209f18b3259ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf6e35eca7f996bc9cfa246b5830a0cdb569c01dcbfb69687209f18b3259ef9->leave($__internal_bcf6e35eca7f996bc9cfa246b5830a0cdb569c01dcbfb69687209f18b3259ef9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00d2ece6b8339524ea7ab650ea61a5e14b694580698c34d7174a7563b167d2a = $this->env->getExtension("native_profiler");
        $__internal_f00d2ece6b8339524ea7ab650ea61a5e14b694580698c34d7174a7563b167d2a->enter($__internal_f00d2ece6b8339524ea7ab650ea61a5e14b694580698c34d7174a7563b167d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            url: 'https://recrutement.local-trust.com/test/cards/57187b7c975adeb8520a283c',
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
        
        $__internal_f00d2ece6b8339524ea7ab650ea61a5e14b694580698c34d7174a7563b167d2a->leave($__internal_f00d2ece6b8339524ea7ab650ea61a5e14b694580698c34d7174a7563b167d2a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/main.html.twig";
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
/*                             url: 'https://recrutement.local-trust.com/test/cards/57187b7c975adeb8520a283c',*/
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
