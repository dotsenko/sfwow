<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class NewsController extends Controller
{
    
    public function indexAction()
    {
    	$news = $this->getDoctrine()
        ->getRepository('WowWowBundle:News')
        ->findAll();
        return $this->render('WowWowBundle:News:index.html.twig', array(
        	'news' => $news,
        ));
    }
}
