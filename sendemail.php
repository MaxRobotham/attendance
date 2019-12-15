<?php 
    require 'vendor/autoload.php';
    class SendEmail{
        public static function SendMail($to,$subject,$content){
            $key = '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';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("m_robotham@hotmail.com", "Max Robotham");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            //$email->addContent("text/html", $content);
            $sendgrid = new \SendGrid($key);
            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>