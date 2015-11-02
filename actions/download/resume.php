<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

if(Input::exists()) {
    $db = DB::getInstance();
    $id = Input::get('id');
    $resume = $db->get('resumes', array('id', '=', $id))->first();

    ignore_user_abort(true);
    set_time_limit(0); // disable the time limit for this script

    $path = "ftp://ieeetamu:IT0fficer!@ieeetamu.org/resumes/".$resume->filehash.".".$resume->ext; // change the path to fit your websites document structure
    if ($fd = fopen ($path, "r")) {
        $fsize = filesize($path);

        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$resume->name.".".$resume->ext."\"");
        header("Content-length: $fsize");
        header("Cache-control: private"); //use this to open files directly

        while(!feof($fd)) {
            $buffer = fread($fd, 2048);
            echo $buffer;
        }

        fclose ($fd);
    }
}
?>
