<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

$user = DB::getInstance()->get('users', array('email', '=', $_POST['email']))->first();

if(!empty($user)) {
    if($user->subscribed == 1) {
        Session::put('error', 'You are already subscribed to the weekly newsletter.');
        Redirect::to("../");
        die();
    } else {
        DB::getInstance()->update('users', $user->id, array('subscribed' => 1));
        Redirect::to("../subscribed");
        die();
    }
}

$user = new User();
$user->create(array(
    'name'          => $_POST['full_name'],
    'email'         => $_POST['email'],
    'group'         => 2,
    'salt'          => Hash::salt(32),
    'subscribed'    => 1
));

Redirect::to("../subscribed");
die();

/*$content = http_build_query (array (
    'full_name'   => $_POST['full_name'],
    'email'   => $_POST['email']
));
 
$context = stream_context_create (array (
    'http'      => array (
    'method'    => 'post',
    'content'   => $content
)
));
 
$result = file_get_contents('http://ieee.tamu.edu/mailman/subscribe/listserv_ieee.tamu.edu', null, $context);*/
?>