<?php

/* AdminAdminBundle::layout.html.twig */
class __TwigTemplate_6f6e31c26588447fa1a4594e79b852f60ca9bac67b6176496b05ada0893371cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagewrapper' => array($this, 'block_pagewrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>Admin</title>

        <!-- Core CSS - Include with every page -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Page-Level Plugin CSS - Morris -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/plugins/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- SB Admin CSS - Include with every page -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>





    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index\">Administrateur</a>
        </div>
        <ul class=\"nav navbar-top-links navbar-right\">

            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-user\">
                    <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
        <!-- /.navbar-header -->

        <!-- /.navbar-top-links -->

        <div class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"side-menu\">

                    <li>
                        <a href=\"index\"><i class=\"fa fa-dashboard fa-fw\"></i> Home</a>
                    </li>

                    <li>
                        <a href=\"client\"><i class=\"fa fa-table fa-fw\"></i> Liste Clients</a>
                    </li>

                    <li>
                        <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Prestataires<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"prestataire\"> Liste Prestataires</a>
                            </li>
                            <li>
                                <a href=\"prest_a_Valider\"> Validation Prestataires</a>
                            </li>                                                               
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-table fa-fw\"></i> Deals<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"deal\"> Liste Deals</a>
                            </li>
                            <li>
                                <a href=\"deal_a_Valider\"> Valider Deal</a>
                            </li>
                            <!-- <li>
                                <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"#\">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Item</a>
                                    </li>
                                </ul>
                    
                            <!-- /.nav-third-level -->

                    </li>

                </ul>
                <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Statistiques<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"flot\"> Flot Charts</a>
                        </li>
                        <li>
                            <a href=\"morris\"> Morris.js Charts</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <!-- <li>
                    <a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Sample Pages<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"blank.html\">Blank Page</a>
                        </li>
                        <li>
                            <a href=\"login.html\">Login Page</a>
                        </li>
                    </ul>
                <!-- /.nav-second-level -->
                </li> 
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    ";
        // line 147
        $this->displayBlock('pagewrapper', $context, $blocks);
        // line 150
        echo "</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>

<!-- Page-Level Plugin Scripts - Morris -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/plugins/morris/morris.js"), "html", null, true);
        echo "\"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/sb-admin.js"), "html", null, true);
        echo "\"></script>

<!-- Page-Level Demo Scripts - Morris - Use for reference -->

</body>

</html>";
    }

    // line 147
    public function block_pagewrapper($context, array $blocks = array())
    {
        echo " 

    ";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 147,  212 => 163,  206 => 160,  202 => 159,  196 => 156,  192 => 155,  188 => 154,  182 => 150,  180 => 147,  49 => 19,  43 => 16,  37 => 13,  33 => 12,  20 => 1,  143 => 92,  124 => 75,  112 => 66,  102 => 58,  100 => 57,  94 => 53,  75 => 36,  63 => 27,  53 => 19,  51 => 18,  41 => 11,  31 => 3,  28 => 2,);
    }
}
