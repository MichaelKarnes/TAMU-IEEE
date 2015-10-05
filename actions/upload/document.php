<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';      

// files storage folder
$dir = '/documents/';

$file = $dir.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$file);

$array = array(
    'filelink'  => $file,
    'filename'  => $_FILES['file']['name']
);

echo stripslashes(json_encode($array));
?>