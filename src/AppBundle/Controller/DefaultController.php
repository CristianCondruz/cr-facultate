<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $anunturis = $em->getRepository('AppBundle:Anunturi')->findAll();

      return $this->render('anunturi/dashboard_anunturi.html.twig', array(
        'anunturis' => $anunturis,
      ));
    }
}
