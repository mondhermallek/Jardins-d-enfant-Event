<?php

namespace EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Evenement/Default/Pdf.html.twig');
    }
    public function redirectAction()
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return $this->redirecttoRoute("evenement_AfficherE");
        } elseif ($authChecker->isGranted('ROLE_USER')) {
            return $this->redirecttoRoute("participant_AfficheE");
        } else {
            return $this->redirecttoRoute("fos_user_security_login");
        }

    }
    /**
     *  Render in a PDF the participant_AfficheE URL
     * @return Response
     */

    public function pdf1Action()
    {

        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';

        // use absolute path !
        $pageUrl = $this->generateUrl('participant_AfficheE', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response(
            $snappy->getOutput($pageUrl),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }
    public function pdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';
        $url = 'http://localhost/PiEvenement/web/app_dev.php/AfficheE';
       // $url = 'wwww.facebook.com';


        return new Response(
            $snappy->getOutput($url),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }


}
