<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // user_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_default_index'));
            }

            return $ret;
        }
        not_user_default_index:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

            // login
            if (0 === strpos($pathinfo, '/loginM') && preg_match('#^/loginM/(?P<username>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'login']), array (  '_controller' => 'AppBundle\\Controller\\MobileController::loginAction',));
            }

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/pdf')) {
                // evenement_pdf
                if ('/pdf' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::pdfAction',  '_route' => 'evenement_pdf',);
                }

                // evenement_pdf1
                if ('/pdf1' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::pdf1Action',  '_route' => 'evenement_pdf1',);
                }

            }

            // all_P
            if ('/participant/all' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::allAction',  '_route' => 'all_P',);
            }

            // edit
            if ('/participant/edit' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::editAction',  '_route' => 'edit',);
            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        // evenement_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_evenement_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'evenement_homepage'));
            }

            return $ret;
        }
        not_evenement_homepage:

        // evenement_Front
        if ('/F' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::FrontAction',  '_route' => 'evenement_Front',);
        }

        if (0 === strpos($pathinfo, '/A')) {
            // evenement_AjoutE
            if ('/AjoutE' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutEvenementAction',  '_route' => 'evenement_AjoutE',);
            }

            // evenement_AjoutP
            if (0 === strpos($pathinfo, '/AjoutP') && preg_match('#^/AjoutP/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_AjoutP']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutParticipantAction',));
            }

            // evenement_AfficherE
            if ('/AfficheE' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEvenementAction',  '_route' => 'evenement_AfficherE',);
            }

            // evenement_AfficheP
            if ('/AfficheP' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheParticipantAction',  '_route' => 'evenement_AfficheP',);
            }

        }

        // evenement_SupprimeP
        if (0 === strpos($pathinfo, '/SupprimeP') && preg_match('#^/SupprimeP/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_SupprimeP']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::SupprimeParticipantAction',));
        }

        // evenement_SupprimeE
        if (0 === strpos($pathinfo, '/SupprimeE') && preg_match('#^/SupprimeE/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_SupprimeE']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::SupprimeEvenementAction',));
        }

        // evenement_ModifieP
        if (0 === strpos($pathinfo, '/ModifieP') && preg_match('#^/ModifieP/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_ModifieP']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ModifieParticipantAction',));
        }

        // evenement_ModifierE
        if (0 === strpos($pathinfo, '/ModifieE') && preg_match('#^/ModifieE/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_ModifierE']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ModifieEvenementAction',));
        }

        // evenement_RechercheE
        if ('/RechercheE' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheEvenementAction',  '_route' => 'evenement_RechercheE',);
        }

        // evenement_RechercheP
        if ('/RechercheP' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::RechercheParticipantAction',  '_route' => 'evenement_RechercheP',);
        }

        if (0 === strpos($pathinfo, '/mail')) {
            // evenement_Mail
            if ('/mail' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::MailAction',  '_route' => 'evenement_Mail',);
            }

            // participant_Mail
            if ('/mailP' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::MailAction',  '_route' => 'participant_Mail',);
            }

        }

        elseif (0 === strpos($pathinfo, '/f')) {
            // participant_AfficheE
            if ('/fAfficheE' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::AfficheEvenementAction',  '_route' => 'participant_AfficheE',);
            }

            // participant_AjoutP
            if (0 === strpos($pathinfo, '/fAjoutP') && preg_match('#^/fAjoutP/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'participant_AjoutP']), array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::AjoutParticipantAction',));
            }

            // participant_RechercheE
            if ('/fRechercheE' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::RechercheEvenementAction',  '_route' => 'participant_RechercheE',);
            }

            // participant_form
            if ('/form' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ParticipantController::formAction',  '_route' => 'participant_form',);
            }

        }

        elseif (0 === strpos($pathinfo, '/evenement/all')) {
            // all_E
            if ('/evenement/all' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::allAction',  '_route' => 'all_E',);
            }

            // all_Ev
            if ('/evenement/alll' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::alllAction',  '_route' => 'all_Ev',);
            }

        }

        // new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::newAction',  '_route' => 'new',);
        }

        // delete
        if ('/delete' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::deleteAction',  '_route' => 'delete',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
