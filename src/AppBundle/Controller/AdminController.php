<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        if (!(is_null($user))) {
            if("master211" === $user)
            {
                return $this->render('user/admin.html.twig', [

                ]);
            }
            else{
                return $this->redirectToRoute('homepage');
            }
        }
        else{
            return $this->redirectToRoute('login');
        }
    }
}
