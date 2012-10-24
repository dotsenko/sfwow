<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ChangesController extends Controller
{
    
    public function indexAction()
    {
       $changes = $this->getDoctrine()
        ->getRepository('WowWowBundle:Changes')
        ->findAll();
        return $this->render('WowWowBundle:Changes:index.html.twig', array(
            'changes' => $changes,
        ));
    }
}
