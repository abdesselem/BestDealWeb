<?php

/* AdminAdminBundle:Default:recherche.html.twig */
class __TwigTemplate_6d1dfa356b224f2b95194befd245fcd3ffc880414dd2435c87e9ab752a0a3d72 extends Twig_Template
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
                    <h1 class=\"page-header\">Recherche...</h1>
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
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                           List 
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches"))) != 0)) {
            // line 26
            echo "                                <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
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
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches")));
            foreach ($context['_seq'] as $context["_key"] => $context["recherche"]) {
                // line 42
                echo "                                          
                                        <tr>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "nom"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "prenom"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "login"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "role"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recherches"]) ? $context["recherches"] : $this->getContext($context, "recherches"))), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_supprimer", array("id" => $this->getAttribute((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")), "iduser"))), "html", null, true);
                echo "\" class=\"btn btn-outline btn-danger btn-block\">Supprimer ce client</a></td>

                                        </tr>
                                        
                                           </tbody>
                                </table>
                                     
                                                                            
                                
                            </div>
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recherche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                      
                             ";
        } else {
            // line 61
            echo "         
                                   
                                           <div class=\"alert alert-danger\">
                                Aucun resultat pour votre recherche. <a href=client class=\"alert-link\">Rechercher</a>.   
                             ";
        }
        // line 66
        echo "                                 
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
        return "AdminAdminBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 66,  126 => 61,  122 => 60,  105 => 49,  101 => 48,  97 => 47,  93 => 46,  89 => 45,  85 => 44,  81 => 42,  77 => 41,  60 => 26,  58 => 25,  41 => 11,  31 => 3,  28 => 2,);
    }
}
