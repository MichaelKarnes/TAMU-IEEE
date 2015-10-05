<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

$subject = 'IEEE Bulletin Week of '.date('F jS Y', strtotime('last Saturday +2 days'));
$headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
$headers .= "Content-transfer-encoding: binary"."\r\n";
$headers .= "Reply-To: secretary@ieeetamu.org"."\r\n";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

$to = $_POST['email'];

ob_start();
include '../subscriptions/newsletters/template.php';
$message = ob_get_clean();

mail($to, $subject, $message, $headers);
?>