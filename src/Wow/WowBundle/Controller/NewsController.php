<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class NewsController extends Controller
{
    
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('n')
            ->from('Wow\WowBundle\Entity\News', 'n')
            ->orderBy('n.date', 'DESC')
        ;    

        $query = $qb->getQuery();
        $news = $query->getResult();
        return $this->render('WowWowBundle:News:index.html.twig', array(
        	'news' => $news,
        ));
    }
}
