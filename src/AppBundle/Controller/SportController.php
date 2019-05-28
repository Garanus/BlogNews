<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\News;
use Symfony\Component\HttpFoundation\Request;

class SportController extends Controller
{
    protected $itemsLimit = 3;

    /**
     *
     * @Route("/sport", name="sport")
     */
    public function indexAction()
    {
        $PostRepo = $this->getDoctrine()->getRepository(News::class);
        /*$qb = $PostRepo->getQueryBuilder(array(
            'status' => 'published',
            'orderBy' => 'n.publishedDate',
            'orderDir' => 'DESC'
        ));*/
        $allPosts = $PostRepo->findBy(array('slug' => 'sport'), array('publishedDate' => 'desc'));
        //$paginator = $this->get('knp_paginator');
        //$pagination = $paginator->paginate($allPosts,$page, $this->itemsLimit);

        return $this->render('categories/sport/sportview.html.twig', [
            //'pagination' => $pagination
            'allposts' => $allPosts
        ]);
    }
}