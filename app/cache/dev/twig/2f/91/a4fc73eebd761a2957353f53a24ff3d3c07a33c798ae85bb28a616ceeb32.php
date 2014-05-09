<?php

/* AdminAdminBundle:Default:deal.html.twig */
class __TwigTemplate_2f91a4fc73eebd761a2957353f53a24ff3d3c07a33c798ae85bb28a616ceeb32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminAdminBundle::layout.html.twig");

        $this->blocks = array(
            'pagewrapper' => array($this, 'block_pagewrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagewrapper($context, array $blocks = array())
    {
        // line 3
        echo "
    <div id=\"pagewrapper\">
            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <h1 class=\"page-header\">Liste Deals</h1>
                </div>
                  <div class=\"col-lg-2\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.PNG"), "html", null, true);
        echo "\">   
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             
            <div class=\"row\">
                 <div class=\"col-lg-12\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
            
                  <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Recherche...
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Libelle</a>
                                </li>
                                <li><a href=\"#profile\" data-toggle=\"tab\">Categorie</a>
                                </li>
                             
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"home\">
                                    <h4>Par Libelle :</h4>
                                   <form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("deal_rechercher");
        echo "\" method=\"POST\">
      
\t\t\t
\t\t\t                     <div class=\"form-group input-group\" >
                            
                           
                                           
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\"name=\"recherche\" >
                                           
                                <span class=\"input-group-btn\">
                                <td> <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Rechercher\"/>               
                                 </span>
                           
                          </div>
\t\t\t
                             </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"profile\">
                                    <h4>Par categorie :</h4>
                                       <form action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("deal_rechercher_cat");
        echo "\" method=\"POST\">
      
\t\t\t
\t\t\t<div class=\"form-group input-group\" >
                            
                           
                                           
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\"name=\"recherche\" >
                                           
                                <span class=\"input-group-btn\">
                                <td> <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Rechercher\"/>               
                                 </span>
                           
                          </div>
\t\t\t
                             </form>
                                </div>
                             
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
            </div>
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                           List
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    <thead>
                                        <tr>
                                            <th>Libelle</th>
                                            <th>Type</th>
                                            <th>Categorie</th>
                                           
                                          
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 106
            echo "                                        <tr>
                                        <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "libelle"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "typedeal"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "categorie"), "html", null, true);
            echo "</td>
           <td><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_supprimer", array("id" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "iddeal"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce Deal</a></td>                             
                                      

                                        </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                           
    <script>
    \$(document).ready(function() {
        \$('#dataTables-example').dataTable();
    });
    </script>

    
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:deal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 115,  163 => 110,  159 => 109,  155 => 108,  151 => 107,  148 => 106,  144 => 105,  97 => 61,  75 => 42,  40 => 10,  31 => 3,  28 => 2,);
    }
}
