<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FootballController extends Controller
{
    /**
     * @Route("/football", name="football")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('categories/sport/footballView.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}