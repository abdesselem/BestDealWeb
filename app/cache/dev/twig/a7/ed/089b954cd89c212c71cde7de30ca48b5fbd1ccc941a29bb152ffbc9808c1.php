<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_a7ed089b954cd89c212c71cde7de30ca48b5fbd1ccc941a29bb152ffbc9808c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Best Deal</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Add custom CSS here -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bestdeal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>

    <div class=\"brand\">Best Deal</div>

    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Best Deal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"index.html.twig\">Home</a>
                    </li>
                    <li><a href=\"rechercheliste.html.twig\">Recherche Deal</a>
                    </li>
                    <li><a href=\"index.html.twig\">Mon Espace</a>
                    </li>                    
                    <li><a href=\"about.html.twig\">About</a>
                    </li>
                    <li><a href=\"contact.html.twig\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    ";
        // line 55
        $this->displayBlock('container', $context, $blocks);
        // line 56
        echo "
    <footer>
        <div class=\"footer\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <p>Copyright &copy; Sticky Bit 3A9 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src=\"js/jquery-1.10.2.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <script>
    // Activates the Carousel
    \$('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
";
    }

    // line 55
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  84 => 56,  82 => 55,  40 => 16,  34 => 13,  20 => 1,  81 => 22,  74 => 20,  66 => 17,  62 => 16,  56 => 15,  53 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
