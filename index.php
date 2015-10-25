<?php
require_once 'plugins/google-api-php-client-master/autoload.php';
$client = new Google_Client();
$client->setApplicationName("My Calendar"); //DON'T THINK THIS MATTERS
$client->setDeveloperKey('AIzaSyAe4UQX27_gpnFoSjgBOpG8rlPa_W3vYZw'); //GET AT AT DEVELOPERS.GOOGLE.COM
$cal = new Google_Service_Calendar($client);
$calendarId = 't697b8s431agv6c4knl1t3tg68@group.calendar.google.com';
require_once 'core/init.php';

$user = new User();

if($user->isLoggedIn())
    include_once 'home/inside.php';
else
    include_once 'home/outside.php';
?>