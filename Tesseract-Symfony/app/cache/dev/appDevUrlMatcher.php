<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/tesseract')) {
            if (0 === strpos($pathinfo, '/tesseract/log')) {
                // log
                if (rtrim($pathinfo, '/') === '/tesseract/log') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'log');
                    }

                    return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::indexAction',  '_route' => 'log',);
                }

                // log_show
                if (preg_match('#^/tesseract/log/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_show')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::showAction',));
                }

                // log_new
                if ($pathinfo === '/tesseract/log/new') {
                    return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::newAction',  '_route' => 'log_new',);
                }

                // log_create
                if ($pathinfo === '/tesseract/log/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_log_create;
                    }

                    return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::createAction',  '_route' => 'log_create',);
                }
                not_log_create:

                // log_edit
                if (preg_match('#^/tesseract/log/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_edit')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::editAction',));
                }

                // log_update
                if (preg_match('#^/tesseract/log/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_log_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_update')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::updateAction',));
                }
                not_log_update:

                // log_delete
                if (preg_match('#^/tesseract/log/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_log_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'log_delete')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\LogController::deleteAction',));
                }
                not_log_delete:

            }

            if (0 === strpos($pathinfo, '/tesseract/a')) {
                // tesseract_mooc_apprenant_interface
                if ($pathinfo === '/tesseract/apprenant') {
                    return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::indexAction',  '_route' => 'tesseract_mooc_apprenant_interface',);
                }

                if (0 === strpos($pathinfo, '/tesseract/admin')) {
                    // tesseract_mooc_admin_dashboard
                    if ($pathinfo === '/tesseract/admin') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\AdminController::indexAction',  '_route' => 'tesseract_mooc_admin_dashboard',);
                    }

                    if (0 === strpos($pathinfo, '/tesseract/admin/tickets')) {
                        // tesseract_mooc_admin_tickets
                        if ($pathinfo === '/tesseract/admin/tickets') {
                            return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\TicketsController::indexAction',  '_route' => 'tesseract_mooc_admin_tickets',);
                        }

                        // tesseract_mooc_admin_tickets_reply
                        if (preg_match('#^/tesseract/admin/tickets/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tesseract_mooc_admin_tickets_reply')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\TicketReplyController::indexAction',));
                        }

                        // tesseract_mooc_admin_tickets_sendMail
                        if (0 === strpos($pathinfo, '/tesseract/admin/tickets/sendMail') && preg_match('#^/tesseract/admin/tickets/sendMail/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tesseract_mooc_admin_tickets_sendMail')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\TicketReplySentController::indexAction',));
                        }

                    }

                    // tesseract_mooc_admin_org_qry
                    if ($pathinfo === '/tesseract/admin/orgquery') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationQueriesController::indexAction',  '_route' => 'tesseract_mooc_admin_org_qry',);
                    }

                    // tesseract_mooc_admin_block_users
                    if ($pathinfo === '/tesseract/admin/blockusers') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\BlockUsersController::indexAction',  '_route' => 'tesseract_mooc_admin_block_users',);
                    }

                    // tesseract_mooc_admin_social_media
                    if ($pathinfo === '/tesseract/admin/social') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\SocialMediaController::indexAction',  '_route' => 'tesseract_mooc_admin_social_media',);
                    }

                    // tesseract_mooc_admin_forum_bans
                    if ($pathinfo === '/tesseract/admin/forumbans') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ForumBansController::indexAction',  '_route' => 'tesseract_mooc_admin_forum_bans',);
                    }

                    // tesseract_mooc_admin_chart
                    if ($pathinfo === '/tesseract/admin/chart') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\GrapheController::indexAction',  '_route' => 'tesseract_mooc_admin_chart',);
                    }

                    // tesseract_mooc_admin_user_list
                    if ($pathinfo === '/tesseract/admin/userlist') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\UtilisateurController::listAction',  '_route' => 'tesseract_mooc_admin_user_list',);
                    }

                }

            }

            // tesseract_mooc_oranisation_register_interface
            if ($pathinfo === '/tesseract/registerorg') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::inscriptionOrganisationAction',  '_route' => 'tesseract_mooc_oranisation_register_interface',);
            }

            // tesseract_profile_apprenant
            if ($pathinfo === '/tesseract/profileapprenant') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::profileApprenantAction',  '_route' => 'tesseract_profile_apprenant',);
            }

            if (0 === strpos($pathinfo, '/tesseract/course')) {
                // tesseract_afficher_cours_categ
                if ($pathinfo === '/tesseract/courses-categ') {
                    return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::coursesCategApprenantAction',  '_route' => 'tesseract_afficher_cours_categ',);
                }

                if (0 === strpos($pathinfo, '/tesseract/course-')) {
                    // course_subscribed_id
                    if ($pathinfo === '/tesseract/course-subed') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::coursesSubedApprenantAction',  '_route' => 'course_subscribed_id',);
                    }

                    // course_comments_id
                    if ($pathinfo === '/tesseract/course-comm') {
                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::coursesCommentsApprenantAction',  '_route' => 'course_comments_id',);
                    }

                }

            }

            // afficher_cours_chap_appr
            if ($pathinfo === '/tesseract/session') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::afficherContenuCoursAction',  '_route' => 'afficher_cours_chap_appr',);
            }

            // terminer_cours_chap_appr
            if ($pathinfo === '/tesseract/nextsession') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\ApprenantController::terminerCoursAction',  '_route' => 'terminer_cours_chap_appr',);
            }

            // tesseract_mooc_organisation_home
            if ($pathinfo === '/tesseract/orgHome') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::indexAction',  '_route' => 'tesseract_mooc_organisation_home',);
            }

            // organisation_show
            if (0 === strpos($pathinfo, '/tesseract/1') && preg_match('#^/tesseract/1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_show')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::showAction',));
            }

            // organisation_edit
            if (0 === strpos($pathinfo, '/tesseract/2') && preg_match('#^/tesseract/2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_edit')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::editAction',));
            }

            // organisation_delete
            if (0 === strpos($pathinfo, '/tesseract/3') && preg_match('#^/tesseract/3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_delete')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::deleteAction',));
            }

            // organisation_new
            if ($pathinfo === '/tesseract/4') {
                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\OrganisationController::newAction',  '_route' => 'organisation_new',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/tesseract')) {
            if (0 === strpos($pathinfo, '/tesseract/log')) {
                if (0 === strpos($pathinfo, '/tesseract/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/tesseract/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_security_login;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }
                    not_fos_user_security_login:

                    // fos_user_security_check
                    if ($pathinfo === '/tesseract/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/tesseract/logout') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_security_logout;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }
                not_fos_user_security_logout:

            }

            if (0 === strpos($pathinfo, '/tesseract/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/tesseract/profile') {
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
                if ($pathinfo === '/tesseract/profile/edit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

            }

            if (0 === strpos($pathinfo, '/tesseract/re')) {
                if (0 === strpos($pathinfo, '/tesseract/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/tesseract/register') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_user_registration_register;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }
                    not_fos_user_registration_register:

                    if (0 === strpos($pathinfo, '/tesseract/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/tesseract/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/tesseract/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/tesseract/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/tesseract/register/confirmed') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirmed;
                                }

                                return array (  '_controller' => 'Tesseract\\MOOCBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                            }
                            not_fos_user_registration_confirmed:

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/tesseract/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/tesseract/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/tesseract/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/tesseract/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/tesseract/resetting/reset') && preg_match('#^/tesseract/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
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
            if ($pathinfo === '/tesseract/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
