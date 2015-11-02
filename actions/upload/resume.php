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
            Session::put('id', $id);
            Session::put('name', $name);
            Session::put('major', $major);
            Session::put('overall_gpa', $overall_gpa);
            Session::put('major_gpa', $major_gpa);
            Redirect::to($_SERVER['HTTP_REFERER']);
            die();
        }

        if(empty($name)) {
            Session::put('error', 'Full Name is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($id)) {
            Session::put('error', 'IEEE Member Number is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($overall_gpa)) {
            Session::put('error', 'Overall GPA is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($major_gpa)) {
            Session::put('error', 'Major GPA is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(empty($_FILES['resume']['tmp_name'])) {
            Session::put('error', 'Resume is a required field');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($id)) {
            Session::put('error', 'IEEE Member Number must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($major_gpa)) {
            Session::put('error', 'Major GPA must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if($major_gpa < 0 || $major_gpa > 4) {
            Session::put('error', 'Invalid Major GPA');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(!is_numeric($overall_gpa)) {
            Session::put('error', 'Overall GPA must be a number');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if($overall_gpa < 0 || $overall_gpa > 4) {
            Session::put('error', 'Invalid Overall GPA');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else if(floor(log10($id)) != 7) {
            Session::put('error', 'Invalid Member ID');
            flashvars($id, $name, $major, $overall_gpa, $major_gpa);
        } else {
            $resume = $db->get('resumes', array('id', '=', $id))->first();
            if(empty($resume)) {
                $hash = Hash::unique();
                $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);

                /*$ftp_conn = ftp_connect('ieeetamu.org');
                ftp_login($ftp_conn, 'ieeetamu', 'IT0fficer!');
                ftp_pasv($ftp_conn, true);
                $ret = ftp_put($ftp_conn, 'resumes/'.$hash.'.'.$ext, $_FILES['resume']['tmp_name'], FTP_BINARY);
                if ($ret == FTP_FINISHED)
                    ftp_chmod($ftp_conn, 0700, 'resumes/'.$hash.'.'.$ext);
                ftp_close($ftp_conn);*/
                move_uploaded_file($_FILES['resume']['tmp_name'], '../resumes/'.$hash.'.'.$ext);
                chmod(0700, '../resumes/'.$hash.'.'.$ext);

                $db->insert('resumes', array(
                    'id' => $id,
                    'name' => $name,
                    'major' => $major,
                    'overall_gpa' => $overall_gpa,
                    'major_gpa' => $major_gpa,
                    'filehash' => $hash,
                    'ext' => $ext
                ));
                Session::put('success', 'Your resume has been uploaded');
            } else {
                $hash = $resume->filehash;
                $ext = $resume->ext;

                /*$ftp_conn = ftp_connect('ieeetamu.org');
                ftp_login($ftp_conn, 'ieeetamu', 'IT0fficer!');
                ftp_pasv($ftp_conn, true);
                ftp_delete($ftp_conn, 'resumes/'.$hash.'.'.$ext);
                $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
                $ret = ftp_put($ftp_conn, 'resumes/'.$hash.'.'.$ext, $_FILES['resume']['tmp_name'], FTP_BINARY);
                if ($ret == FTP_FINISHED)
                    ftp_chmod($ftp_conn, 0700, 'resumes/'.$hash.'.'.$ext);
                ftp_close($ftp_conn);*/
                unlink('../resumes/'.$hash.'.'.$ext);
                $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
                move_uploaded_file($_FILES['resume']['tmp_name'], '../resumes/'.$hash.'.'.$ext);
                chmod(0700, '../resumes/'.$hash.'.'.$ext);

                $db->update('resumes', $id, array(
                    'name' => $name,
                    'major' => $major,
                    'overall_gpa' => $overall_gpa,
                    'major_gpa' => $major_gpa,
                    'ext' => $ext
                ));
                Session::put('success', 'Your resume has been updated');
            }
        }
	}
}
Redirect::to($_SERVER['HTTP_REFERER']);
?>