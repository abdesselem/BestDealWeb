<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/Admin')) {
            // admin_admin_homepage
            if ($pathinfo === '/Admin/index') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_admin_homepage',);
            }

            // admin_admin_morris
            if ($pathinfo === '/Admin/morris') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::morrisAction',  '_route' => 'admin_admin_morris',);
            }

            // admin_admin_flot
            if ($pathinfo === '/Admin/flot') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::flotAction',  '_route' => 'admin_admin_flot',);
            }

            // admin_admin_notif
            if ($pathinfo === '/Admin/index') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_admin_notif',);
            }

            // admin_admin_client
            if ($pathinfo === '/Admin/client') {
                return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::clientAction',  '_route' => 'admin_admin_client',);
            }

            if (0 === strpos($pathinfo, '/Admin/prest')) {
                // admin_admin_prest
                if ($pathinfo === '/Admin/prestataire') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::prestataireAction',  '_route' => 'admin_admin_prest',);
                }

                // admin_admin_prest_a_Valider
                if ($pathinfo === '/Admin/prest_a_Valider') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::prest_a_ValiderAction',  '_route' => 'admin_admin_prest_a_Valider',);
                }

            }

            // admin_admin_ValiderP
            if (0 === strpos($pathinfo, '/Admin/ValiderP') && preg_match('#^/Admin/ValiderP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_ValiderP')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::ValiderPAction',));
            }

            if (0 === strpos($pathinfo, '/Admin/deal')) {
                // admin_admin_deal
                if ($pathinfo === '/Admin/deal') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::dealAction',  '_route' => 'admin_admin_deal',);
                }

                // admin_admin_deal_a_Valider
                if ($pathinfo === '/Admin/deal_a_Valider') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::deal_a_ValiderAction',  '_route' => 'admin_admin_deal_a_Valider',);
                }

            }

            // admin_admin_ValiderD
            if (0 === strpos($pathinfo, '/Admin/ValiderD') && preg_match('#^/Admin/ValiderD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_ValiderD')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::ValiderDAction',));
            }

            if (0 === strpos($pathinfo, '/Admin/supprimer')) {
                // client_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerC') && preg_match('#^/Admin/supprimerC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerCAction',));
                }

                // prest_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerP') && preg_match('#^/Admin/supprimerP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prest_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerPAction',));
                }

                // deal_supprimer
                if (0 === strpos($pathinfo, '/Admin/supprimerD') && preg_match('#^/Admin/supprimerD/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deal_supprimer')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::supprimerDAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Admin/rechercher')) {
                // user_rechercher
                if ($pathinfo === '/Admin/rechercher') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherAction',  '_route' => 'user_rechercher',);
                }

                // user_rechercherP
                if ($pathinfo === '/Admin/rechercherP') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherPAction',  '_route' => 'user_rechercherP',);
                }

                // deal_rechercher
                if ($pathinfo === '/Admin/rechercherD') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherDAction',  '_route' => 'deal_rechercher',);
                }

                // user_rechercher_prenom
                if ($pathinfo === '/Admin/rechercher_prenom') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercher_prenomAction',  '_route' => 'user_rechercher_prenom',);
                }

                // deal_rechercher_cat
                if ($pathinfo === '/Admin/rechercherD_cat') {
                    return array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::rechercherD_catAction',  '_route' => 'deal_rechercher_cat',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // user_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // user_test
        if ($pathinfo === '/te') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::testAction',  '_route' => 'user_test',);
        }

        // user_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::contactAction',  '_route' => 'user_contact',);
        }

        // user_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'user_recherche',);
        }

        // user_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'user_about',);
        }

        // user_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'user_connexion',);
        }

        // blog_accueil
        if (preg_match('#^/(?P<page>\\d*)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_accueil')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // blog_voir
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_voir')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BlogController::voirAction',));
            }

            // blog_ajouter
            if ($pathinfo === '/ajouter') {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'blog_ajouter',);
            }

        }

        // blog_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modifier')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BlogController::modifierAction',));
        }

        // blog_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_supprimer')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BlogController::supprimerAction',));
        }

        // deal_reserver
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'deal_reserver',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
