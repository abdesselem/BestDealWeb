<?php

/* UserBundle:BestDeal:index.html.twig */
class __TwigTemplate_1fea348679f5302b26295269ba0cc663d966802d0793432b4418a91a04a6b4d6 extends Twig_Template
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
        echo "<div class=\"container\">

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12 text-center\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"img-responsive img-full\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/slide-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class=\"brand-name\">Best Deal</span>
                    </h1>
                    <hr class=\"tagline-divider\">
                    <h2>
                        <small>By <strong>Sticky Bit 3A9</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class=\"row\">
         <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Deal Quelconque</h2>
                    <hr>
                    <img class=\"img-responsive img-border img-left\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/deal1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <hr class=\"visible-xs\">
                    <p>Description Deal</p>
                </div>
            </div>
         </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:BestDeal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  61 => 25,  55 => 22,  49 => 19,  31 => 3,  28 => 2,);
    }
}
