<?php

namespace AppBundle\Mailer;
//
//use AppBundle\Entity\User;
//
class UserMailer{
//    /**
//     * @var \Swift_Mailer
//     */
//    private $swiftMailer;
//
//    private $fromEmail;
//
//    private $fromName;
//
//    function _contruct(\Swift_Mailer $swift_Mailer, $fromEmail, $fromName){
//        $this->swiftMailer = $swift_Mailer;
//        $this->fromEmail = $fromEmail;
//        $this->fromName = $fromName;
//    }
//
//    public function send(User $User, $subject, $htmlBody){
//        $message = \swift_message::newInstance()
//            ->setSubject($subject)
//            ->setFrom($this->fromEmail, $this->fromName)
//            ->setTo($User->getEmail(),$User->getUsername())
//            ->setBody($htmlBody, 'text/html');
//
//        $this->swiftMailer->send($message);
//    }
//
}