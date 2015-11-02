<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

if(Input::exists()) {
    $db = DB::getInstance();
    $ids = Input::get('ids');
    $ids = empty($ids) ? array() : explode(',', $ids);

    ignore_user_abort(true);
    set_time_limit(0); // disable the time limit for this script

    $zip = new ZipArchive();
    $zip->open('Resumes.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

    foreach($ids as $id) {
        $resume = $db->get('resumes', array('id', '=', $id))->first();

        $path = "../resumes/".$resume->filehash.".".$resume->ext; // change the path to fit your websites document structure
        $contents = file_get_contents("../resumes/".$resume->filehash.".".$resume->ext);
        $zip->addFromString($resume->name.".".$resume->ext, $contents);
    }

    $zip->close();

    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=Resumes.zip');
    header('Content-Length: ' . filesize('Resumes.zip'));
    readfile('Resumes.zip');
    unlink('Resumes.zip');
}
?>
