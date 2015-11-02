<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
        $db = DB::getInstance();
        $id = Input::get('id');
        $name = Input::get('name');
        $major = Input::get('major');
        $overall_gpa = Input::get('overall_gpa');
        $major_gpa = Input::get('major_gpa');

        function flashvars($id, $name, $major, $overall_gpa, $major_gpa) {
            Session::flash('id', $id);
            Session::flash('name', $name);
            Session::flash('major', $major);
            Session::flash('overall_gpa', $overall_gpa);
            Session::flash('major_gpa', $major_gpa);
            echo $id;
        }

        if(empty($name)) {
            Session::flash('error', 'Full Name is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($id)) {
            Session::flash('error', 'IEEE Member Number is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($overall_gpa)) {
            Session::flash('error', 'Overall GPA is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($major_gpa)) {
            Session::flash('error', 'Major GPA is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($_FILES['resume']['tmp_name'])) {
            Session::flash('error', 'Resume is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($id)) {
            Session::flash('error', 'IEEE Member Number must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($major_gpa)) {
            Session::flash('error', 'Major GPA must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if($major_gpa < 0 || $major_gpa > 4) {
            Session::flash('error', 'Invalid Major GPA');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($overall_gpa)) {
            Session::flash('error', 'Overall GPA must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if($overall_gpa < 0 || $overall_gpa > 4) {
            Session::flash('error', 'Invalid Overall GPA');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(floor(log10($id)) != 7) {
            Session::flash('error', 'Invalid Member ID');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else {
            $resume = $db->get('resumes', array('id', '=', $id))->first();
            if(empty($resume)) {
                $hash = Hash::unique();
                $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);

                $ftp_conn = ftp_connect('ieeetamu.org');
                ftp_login($ftp_conn, 'ieeetamu', 'IT0fficer!');
                ftp_pasv($ftp_conn, true);
                $ret = ftp_put($ftp_conn, 'resumes/'.$hash.'.'.$ext, $_FILES['resume']['tmp_name'], FTP_BINARY);
                if ($ret == FTP_FINISHED)
                    ftp_chmod($ftp_conn, 0700, 'resumes/'.$hash.'.'.$ext);
                ftp_close($ftp_conn);

                $db->insert('resumes', array(
                    'id' => $id,
                    'name' => $name,
                    'major' => $major,
                    'overall_gpa' => $overall_gpa,
                    'major_gpa' => $major_gpa,
                    'filehash' => $hash,
                    'ext' => $ext
                ));
                Session::flash('success', 'Your resume has been uploaded');
            } else {
                $hash = $resume->filehash;
                $ext = $resume->ext;

                $ftp_conn = ftp_connect('ieeetamu.org');
                ftp_login($ftp_conn, 'ieeetamu', 'IT0fficer!');
                ftp_pasv($ftp_conn, true);
                ftp_delete($ftp_conn, 'resumes/'.$hash.'.'.$ext);
                $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
                $ret = ftp_put($ftp_conn, 'resumes/'.$hash.'.'.$ext, $_FILES['resume']['tmp_name'], FTP_BINARY);
                if ($ret == FTP_FINISHED)
                    ftp_chmod($ftp_conn, 0700, 'resumes/'.$hash.'.'.$ext);
                ftp_close($ftp_conn);

                $db->update('resumes', $id, array(
                    'name' => $name,
                    'major' => $major,
                    'overall_gpa' => $overall_gpa,
                    'major_gpa' => $major_gpa,
                    'ext' => $ext
                ));
                Session::flash('success', 'Your resume has been updated');
            }
        }
	}
}
Redirect::to($_SERVER['HTTP_REFERER']);
?>