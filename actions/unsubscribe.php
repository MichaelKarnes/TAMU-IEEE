<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

$user = DB::getInstance()->get('users', array('id', '=', $_GET['id']))->first();

if(!empty($user)) {
    if($user->subscribed == 1) {
        DB::getInstance()->update('users', $user->id, array('subscribed' => 0));
        Redirect::to("../unsubscribed");
        die();
    } else {
        Session::put('error', 'You are already unsubscribed.');
        Redirect::to("../");
        die();
    }
}
Session::put('error', 'There was an error processing your request. Please try again or contact it@ieeetamu.org for further assistance.');
Redirect::to("../");
die();
?>