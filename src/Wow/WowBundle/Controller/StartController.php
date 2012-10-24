<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StartController extends Controller
{
    
    public function indexAction()
    {
        $articles = $this->getDoctrine()
        ->getRepository('WowWowBundle:Articles')
        ->findAll();

        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p')
            ->from('Wow\WowBundle\Entity\Pages', 'p')
            ->where('p.url = :url')
            ->setParameter('url','startpage');
           

        $query = $qb->getQuery();
        $pages = $query->getResult();
        return $this->render('WowWowBundle:Starts:index.html.twig', array(
        	'articles' => $articles,
        	'pages'	   => $pages,
        ));
    }

}