<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // evenement_AjoutE
        if ('/AjoutE' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutEvenementAction',  '_route' => 'evenement_AjoutE',);
        }

        // evenement_AfficherE
        if ('/AfficheE' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEvenementAction',  '_route' => 'evenement_AfficherE',);
        }

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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
