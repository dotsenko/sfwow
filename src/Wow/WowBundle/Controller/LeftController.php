<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LeftController extends Controller
{
    
    public function menuAction()
    {
        $menus = $this->getDoctrine()
        ->getRepository('WowWowBundle:Menu')
        ->findAll();
        return $this->render('WowWowBundle:Page:left.html.twig', array(
        	'menus' => $menus,
        ));
    }
}