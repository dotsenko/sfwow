<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('n')
            ->from('Wow\WowBundle\Entity\News', 'n')
            ->orderBy('n.date', 'DESC')
            ->setMaxResults(3);

        $query = $qb->getQuery();
        $news = $query->getResult();

         $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p')
            ->from('Wow\WowBundle\Entity\Pages', 'p')
            ->where('p.url = :url')
            ->setParameter('url','WowWowBundle_homepage');
           

        $query = $qb->getQuery();
        $pages = $query->getResult();
        return $this->render('WowWowBundle:Default:index.html.twig', array(
        	'news' => $news,
            'pages' => $pages
        ));
    }
}
