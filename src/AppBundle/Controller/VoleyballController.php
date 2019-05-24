<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VoleyballController extends Controller
{
    /**
     * @Route("/voleyball", name="voleyball")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('categories/sport/voleyballView.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}