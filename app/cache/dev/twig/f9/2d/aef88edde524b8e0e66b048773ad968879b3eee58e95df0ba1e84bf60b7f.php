<?php

/* UserBundle:BestDeal:rechercheliste.html.twig */
class __TwigTemplate_f92daef88edde524b8e0e66b048773ad968879b3eee58e95df0ba1e84bf60b7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container\">

         <div class=\"row\"  >
             <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("user_recherche");
        echo "\" method=\"POST\" >
            <div class=\"box\" align=\"center\">
            <div class=\"col-lg-12\">
           <hr>
            <h2 class=\"intro-text text-center\"> Recherche Avancée</h2>
            <hr>
              <h3 class=\"intro-text\"> Recherche par Nom:</h3> <input type=\"text\" name=\"nom\" > <br>
            <h3 class=\"intro-text\">Recherche par Type:</h3><br> Produit <input type=\"radio\"  name=\"type\" value=\"Produit\"> Service <input type=\"radio\"  name=\"type\" value=\"Service\">
            <h3 class=\"intro-text\"> Recherche par Catégorie:</h3><br> Technologie <input type=\"radio\"  name=\"cat\" value=\"Technologie\"> Vêtements <input type=\"radio\"  name=\"cat\"> Domestique <input type=\"radio\"  name=\"cat\"> Sanitaire <input type=\"radio\"  name=\"cat\" value=\"Sanitaire\"><br><br> <h3 align=\"center\"> <center><input type=\"submit\" class=\"col-sm-2\" value=\"Rechercher\"></center></h3>
            
            </div>
            </div>
              </form>   
            
                 ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 22
            echo "           
            <div class=\"box\"> 
                <div class=\"col-sm-4 text-center\">
                    <div id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "\">
                        <h4>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"250px\" height=\"100px\">
                           A partir de ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt, au lieu de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt<br>
                           Date Début de l'offre:";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                           Date Fin de l'offre: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "
                    </div>
                         <div id=\"";
            // line 32
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "\" style=\"display:none; height: 600px; padding: 0px; height: auto; width: 1124px; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto;\">
    
                   
                   
                   
                     <h4>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                     <img src='";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"600px\" height=\"300px\">
                           A partir de ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt, au lieu de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt<br>
                           Date Début de l'offre:";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                           Date Fin de l'offre: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "<br>
                           Détail de l'offre:<br>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Descriptif"), "html", null, true);
            echo "
                           <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_areserver", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/reservez.jpg"), "html", null, true);
            echo "\"></a>
                    </div>
                            
               </div>
                     </div>
               
                    <hr>
                    
                    <script>
                        // Lors du clique sur le boutton le div #d1 sera AFFICHER
                      
                        
\$('#";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').click(function(){
                        
                        \$('#";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"), "html", null, true);
            echo "').css(\"display\",'none');
\t\t\t\$('#";
            // line 58
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').fadeIn(\"slow\");
\t\t});
                \$('#";
            // line 60
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal") + 200), "html", null, true);
            echo "').bind('click',function(){
                    \$(this).fadeOut('slow');
                });
                        </script>         
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                        
        </div>

    </div>
    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:rechercheliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  155 => 60,  150 => 58,  146 => 57,  141 => 55,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  106 => 39,  102 => 38,  98 => 37,  90 => 32,  85 => 30,  81 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  58 => 22,  54 => 21,  37 => 7,  31 => 3,  28 => 2,);
    }
}
