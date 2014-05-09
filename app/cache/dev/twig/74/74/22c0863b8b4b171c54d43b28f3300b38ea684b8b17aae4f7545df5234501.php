<?php

/* UserBundle:BestDeal:dareserver.html.twig */
class __TwigTemplate_747422c0863b8b4b171c54d43b28f3300b38ea684b8b17aae4f7545df5234501 extends Twig_Template
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
        
        <div class=\"box\" align=\"center\">
            <div class=\"col-lg-12\">
           <hr>
            <h2 class=\"intro-text text-center\"> Le deal</h2>
            <hr>
        </div>
                
                <div class=\"box\" align=\"center\">
                    <div class=\"col-lg-12\">
                      ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deals"]) ? $context["deals"] : $this->getContext($context, "deals")));
        foreach ($context['_seq'] as $context["_key"] => $context["deal"]) {
            // line 18
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_reserver", array("iddeal" => $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "IdDeal"))), "html", null, true);
            echo "\" method=\"POST\" >            
                           
                         <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Libelle"), "html", null, true);
            echo "</h4>
                     <img src='";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Image"), "html", null, true);
            echo "' width=\"600px\" height=\"300px\">
                           A partir de ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixPromotionnel"), "html", null, true);
            echo " dt, au lieu de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "PrixInitial"), "html", null, true);
            echo " dt<br>
                           Date Début de l'offre:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateDebut"), "html", null, true);
            echo " <br>
                           Date Fin de l'offre: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "DateFin"), "html", null, true);
            echo "<br>
                           Détail de l'offre:<br>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deal"]) ? $context["deal"] : $this->getContext($context, "deal")), "Descriptif"), "html", null, true);
            echo "<br><br>
                           <h3 class=\"intro-text\"> Nombre de réservations:</h3> <input type=\"text\" name=\"qte\" > <br>
                           <INPUT border=\"0\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/reservez.jpg"), "html", null, true);
            echo "\" type=\"image\" Value=\"submit\" align=\"middle\" >
                           
                   
                                         </form>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        
                </div>
                </div>
        </div>
       </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:dareserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  84 => 27,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  61 => 21,  57 => 20,  51 => 18,  47 => 17,  31 => 3,  28 => 2,);
    }
}
