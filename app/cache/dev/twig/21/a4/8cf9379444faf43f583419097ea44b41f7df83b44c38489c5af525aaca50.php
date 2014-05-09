<?php

/* AdminAdminBundle:Default:client.html.twig */
class __TwigTemplate_21a48cf9379444faf43f583419097ea44b41f7df83b44c38489c5af525aaca50 extends Twig_Template
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
                <h1 class=\"page-header\">Liste Clients</h1>
            </div>
             <div class=\"col-lg-2\">
                <img src=\"";
        // line 11
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
                                <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Nom</a>
                                </li>
                                <li><a href=\"#profile\" data-toggle=\"tab\">Prenom</a>
                                </li>
                             
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"home\">
                                    <h4>Par nom :</h4>
                                   <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("user_rechercher");
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
                                    <h4>Par prenom :</h4>
                                       <form action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("user_rechercher_prenom");
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
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Login</th>
                                        <th>Role</th>
                                        <th>Sexe</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 108
            echo "                                        <tr>
                                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "login"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "role"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe"), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_supprimer", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "iduser"))), "html", null, true);
            echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce client</a></td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        return "AdminAdminBundle:Default:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 118,  173 => 114,  169 => 113,  165 => 112,  161 => 111,  157 => 110,  153 => 109,  150 => 108,  146 => 107,  98 => 62,  76 => 43,  41 => 11,  31 => 3,  28 => 2,);
    }
}
