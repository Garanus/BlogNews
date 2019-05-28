<?php

namespace AppBundle\Manager;

//use AppBundle\Entity\User;
//use AppBundle\Mailer\UserMailer;
//use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
//use Symfony\Bundle\FrameworkBundle\Routing\Router;
//use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface as Templating;
//use Symfony\Component\Security\Core\Encoder\EncoderFactory;
//use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class UserManager{
//    /**
//     * @var Doctrine
//     */
//    protected $doctrine;
//    /**
//     * @var Router
//     */
//    protected $router;
//    /**
//     * @var Templating
//     */
//    protected $templating;
//    /**
//     * @var EncoderFactory
//     */
//    protected $encoderFactory;
//    /**
//     * @var UserMailer
//     */
//    protected $userMailer;
//
//    function _construct(Doctrine $doctrine, Router $router, Templating $templating, EncoderFactory $encoderFactory, UserMailer $userMailer){
//        $this->doctrine = $doctrine,
//        $this->router = $router,
//        $this->templating = $templating,
//        $this->encoderFactory = $encoderFactory,
//        $this->userMailer = $userMailer;
//    }
//
//    protected function generateActionToken(){
//
//    }
//
//    public function sendResetPasswordLink($userEmail){
//        $User = $this->doctrine->getRepository('AppBundle:User')
//            ->findOneByEmail($userEmail);
//
//        if(null ===$User){
//            throw new CustomUserMessageAuthenticationException('Nie znalezniono takiego uzytkownika');
//        }
////9:31
//    }
////    public function registerUser(User $User){
////        if(null !== $User->getId()){
////            throw new CustomUserMessageAuthenticationException('Uzytkownik jest juz zarejestrowany');
////        }
////        $encoder = $this->encoderFactory->getEncoder($User);
////        $encodedPassword = $encoder->encodePassword($User->getPlainPassword(), $User->getSalt());
////
////        $User->setPassword($encodedPassword);
////        $User->setActionToken($this->generateActionToken());
////        $User->setEnabled(false);
////
////        $em=$this->doctrine->getManager();
////        $em->persist($User);
////        $em->flush();
////
////    }
}