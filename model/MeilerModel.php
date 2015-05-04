<?php

require_once 'libs/PHPMailer/class.phpmailer.php';
class MeilerModel extends PHPMailer{
    var $mailer;
    
    public function __construct($options = null) {
        $this->mailer = new PHPMailer();
    }
    
    public function sendMail($to,$from,$body,$subject){
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->Port = 587;
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'hawaiiapartamentos@gmail.com';
        $this->mailer->Password = 'ulpgculpgc';
        $this->mailer->setFrom($from);
        $this->mailer->AddReplyTo("hawaiiapartamentos@gmail.com");
        $this->mailer->Subject = $subject;
        $this->mailer->AltBody = "Para ver este mensaje, usa un email compatible con html";
        $this->mailer->msgHTML($body);
        $this->mailer->addAddress($to);
        if(!$this->mailer->send()){
            return FALSE;
        }else{
            return TRUE;
        }
    }   
    
    
}
