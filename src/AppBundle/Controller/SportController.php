<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SportController extends Controller
{
    /**
     * @Route("/sport", name="sport")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('categories/sport/sportview.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}