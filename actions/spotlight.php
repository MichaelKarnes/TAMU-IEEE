<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

$content = http_build_query (array (
    'entry.343596352'   => $_POST['first'],
    'entry.895282815'   => $_POST['last'],
    'entry.1107191035'  => $_POST['email'],
    'entry.267148820'   => $_POST['url'],
    'entry.794332646'   => $_POST['desc']
));
 
$context = stream_context_create (array (
    'http'      => array (
    'method'    => 'post',
    'content'   => $content
)
));
 
$result = file_get_contents('https://docs.google.com/forms/d/1FZC2XLjZvL10fkh6HtPEgUSEEcerL78DpxpCbufcY3g/formResponse', null, $context);

Redirect::to("../spotlight/submitted");
?>