<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';    

// files storage folder
$dir = 'http://www.ieeetamu.org/images/';

$_FILES['file']['type'] = strtolower($_FILES['file']['type']);

if($_FILES['file']['type'] == 'image/png'
|| $_FILES['file']['type'] == 'image/jpg'
|| $_FILES['file']['type'] == 'image/gif'
|| $_FILES['file']['type'] == 'image/jpeg'
|| $_FILES['file']['type'] == 'image/pjpeg')
{
    // setting file's mysterious name
    $file = $dir.urlencode(basename($_FILES['file']['name']));

    // copying
    move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/images/'.urlencode(basename($_FILES['file']['name'])));

    // update list of images
    $json_file = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/images/images.json');
    $data = json_decode($json_file);
    unset($json_file);
    $data[] = array(
        'thumb' => $file,
        'image' => $file,
        'title' => $_FILES['file']['name']
    );
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/images/images.json',json_encode($data));
    unset($data);

    // displaying file
    $array = array(
        'filelink'  => $file
    );

    echo stripslashes(json_encode($array));
}
?>