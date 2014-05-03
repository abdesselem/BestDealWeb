<?php

/* AdminAdminBundle:Default:prestataire.html.twig */
class __TwigTemplate_b6343ff21ab8bf451b7c52dab73ed454a7cb0c63d8c9d35a1f3ab9d4273a6844 extends Twig_Template
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
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Liste Prestataires</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            DataTables Advanced Tables
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
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prests"]) ? $context["prests"] : $this->getContext($context, "prests")));
        foreach ($context['_seq'] as $context["_key"] => $context["prest"]) {
            // line 34
            echo "                                        <tr>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "nom"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "prenom"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "login"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "role"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prest"]) ? $context["prest"] : $this->getContext($context, "prest")), "sexe"), "html", null, true);
            echo "</td>
                                      

                                        </tr>
                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                                    </tbody>
                                </table>
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
        return "AdminAdminBundle:Default:prestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  216 => 136,  207 => 155,  195 => 149,  191 => 148,  185 => 145,  181 => 144,  97 => 44,  70 => 35,  23 => 4,  81 => 22,  53 => 14,  118 => 55,  84 => 56,  34 => 7,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 143,  169 => 136,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 69,  71 => 19,  67 => 34,  63 => 33,  59 => 14,  38 => 8,  94 => 28,  89 => 42,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 37,  46 => 11,  27 => 5,  44 => 12,  31 => 3,  28 => 2,  201 => 152,  196 => 90,  183 => 82,  171 => 139,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 32,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 34,  47 => 9,  40 => 16,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 68,  96 => 57,  83 => 25,  74 => 36,  66 => 33,  55 => 14,  52 => 21,  50 => 10,  43 => 16,  41 => 9,  35 => 8,  32 => 5,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 39,  82 => 38,  80 => 19,  73 => 35,  64 => 14,  60 => 16,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 12,  30 => 2,);
    }
}
