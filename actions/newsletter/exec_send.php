<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

$user = new User();
if(!$user->isLoggedIn()) {
    Redirect::to($_SERVER['HTTP_REFERER']);
    die();
}

date_default_timezone_set('America/Chicago');
$date = date('Y-m-d', strtotime('last Saturday +2 days'));

$db = DB::getInstance();

$db->insert('newsletters', array(
    'date'      => $date,
    'content'   => (empty($_POST['content']) ? '' : $_POST['content']),
    'sent_id'   => ''
));

$id = $db->query("SELECT * FROM newsletters WHERE date = '$date' ORDER BY id DESC")->first()->id;
putenv("NLID=$id");

exec('php -f ../actions/newsletter/send.php > /dev/null 2>&1 & echo $!');
echo "Sending emails...";
//exec('php -f ../actions/newsletter/send.php', $arrout);
//echo $arrout[0];
?>