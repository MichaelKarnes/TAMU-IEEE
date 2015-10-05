<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

$db = DB::getInstance();

$newsletter = $db->get('newsletters', array('id', '=', $_SERVER['NLID']))->first();
$sent_id = array_filter(explode(',', $newsletter->sent_id));
$lastid = end($sent_id);

$nextquery = empty($lastid) ? $db->get('users', array('subscribed', '=', 1)) : $db->query("SELECT * FROM users WHERE subscribed = 1 AND id > $lastid");
if($nextquery->count() > 0 /*&& $nextquery->first()->id <= 2*/) {
    $nextid = $nextquery->first()->id;

    array_push($sent_id, $nextid);
    $db->update('newsletters', $newsletter->id, array('sent_id' => implode(',', $sent_id)));

    $subject = 'IEEE Bulletin Week of '.date('F jS Y', strtotime($newsletter->date));
    $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
    $headers .= "Content-transfer-encoding: binary"."\r\n";
    $headers .= "Reply-To: secretary@ieeetamu.org"."\r\n";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();

    //$to = "mkarnes2015@gmail.com";
    $to = $db->get('users', array('id', '=', $nextid))->first()->email;

    ob_start();
    include '../subscriptions/newsletters/template.php';
    $message = ob_get_clean();
    chdir(dirname(__FILE__));

    mail($to, $subject, $message, $headers);
    //sleep(1)

    exec('php -f send.php > /dev/null 2>&1 & echo $!');
} else {
    putenv("NLID");
}
?>