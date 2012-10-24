<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CabinetController extends Controller
{
    
    public function indexAction()
    {
       $cabinets = $this->getDoctrine()
        ->getRepository('WowWowBundle:Cabinet')
        ->findAll();
        return $this->render('WowWowBundle:Cabinet:index.html.twig', array(
            'cabinets' => $cabinets,
        ));
    }
}
