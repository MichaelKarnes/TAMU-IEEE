<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';
if(Input::exists()) 
{
    if(Token::check(Input::get('token'))) 
    {

        $to = 'vit@ieeetamu.org';
        $subject = 'test';
        $message = Input::get('Contact');
        $headers = 'From: it@ieeetamu.org' . "\r\n" .
                'Reply-To: it@ieeetamu.org' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
}
?>

