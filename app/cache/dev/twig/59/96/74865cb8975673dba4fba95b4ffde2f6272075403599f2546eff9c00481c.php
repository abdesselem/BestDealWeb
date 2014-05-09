<?php

/* UserBundle:BestDeal:echecreservation.html.twig */
class __TwigTemplate_599674865cb8975673dba4fba95b4ffde2f6272075403599f2546eff9c00481c extends Twig_Template
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
            <h2 class=\"intro-text text-center\"> Echec de la réservation</h2>
            <hr>
        </div>

                
                
          </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:echecreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
