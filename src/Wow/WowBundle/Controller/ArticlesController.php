<?php

namespace Wow\WowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticlesController extends Controller
{
    
    public function indexAction()
    {
        $articles = $this->getDoctrine()
        ->getRepository('WowWowBundle:Articles')
        ->findAll();
        return $this->render('WowWowBundle:Articles:index.html.twig', array(
        	'articles' => $articles,
        ));
    }

    public function showAction($id)
    {
        $article = $this->getDoctrine()
        ->getRepository('WowWowBundle:Articles')
        ->find($id);

        return $this->render('WowWowBundle:Articles:show.html.twig', array(
        	'article' => $article,
        ));
    }

    public function recentArticlesAction($max)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('a')
            ->from('Wow\WowBundle\Entity\Articles', 'a')
            ->orderBy('a.date', 'DESC')
            ->setMaxResults($max);

        $query = $qb->getQuery();
        $articles = $query->getResult();

        return $this->render('WowWowBundle:Page:right.html.twig', array(
        	'articles' => $articles,
        ));
    }
}
