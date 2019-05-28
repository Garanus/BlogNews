<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AddPostController extends Controller
{
    /**
     * @Route("/addpost", name="addpost")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $error = '';
        $success = '';
        $user = $this->getUser();
        if (is_null($user)) {
            return $this->redirectToRoute('login');
        }
//        if ($request->getMethod() == 'POST') {
//            $newPassword = $request->get('_newpassword');
//            $repeatedPassword = $request->get('_repeatpassword');
//            if ($newPassword == $repeatedPassword) {
//                if (!empty($newPassword)) {
//                    $encoder = $this->container->get('security.password_encoder');
//                    $hashedPassword = $encoder->encodePassword($user, $newPassword);
//                    $user->setPassword($hashedPassword);
//                    $em = $this->getDoctrine()->getManager();
//                    $em->persist($user);
//                    $em->flush();
//                } else{
//                    $error = 'Pola muszą być wypełnione.';
//                }
//            } else {
//                $error = 'Hasła muszą być zgodne.';
//            }
//            $success = 'Hasło zostało zmienione.';
//        }
//        $buttonChanger = 'false';
//        return $this->render('security/changepassword.html.twig', ['error' => $error, 'success' => $success,
//            'buttonChanger' => $buttonChanger
//        ]);
//    }
        // replace this example code with whatever you need
        return $this->render('user/addPost.html.twig', [
        ]);
    }
}
