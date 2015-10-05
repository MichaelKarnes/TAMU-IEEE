<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

date_default_timezone_set('America/Chicago');

if(empty($_SERVER['NLID'])) {
    $date = date('F jS Y', strtotime('last Saturday +2 days'));

    $content = empty($_POST['content']) ? '' : $_POST['content'];

    $unsubscribe = "#";
} else {
    $db = DB::getInstance();

    $newsletter = $db->get('newsletters', array('id', '=', $_SERVER['NLID']))->first();  
    $date = date('F jS Y', strtotime($newsletter->date));

    $content = $newsletter->content;

    $unsubscribe = "http://www.ieeetamu.org/actions/unsubscribe.php?id=".$newsletter->id;
}
while(preg_match('/<p style=".*">/')) {
    $content = preg_replace();
}
/*$content = preg_replace('/<p>/', '<tr><td style="color: #444444; font-size: 13px; line-height: 18px; font-family: Arial,sans-serif;">', $content);
$content = preg_replace('/<p style="(?*)">/', '<tr><td style="color: #444444; font-size: 13px; line-height: 18px; font-family: Arial,sans-serif;">', $content);
$content = preg_replace('/</p>/', '</td></tr>', $content);
$content = preg_replace('/<h1>/', '<tr><td style="color: #500000; font-size: 24px; font-weight: bold; line-height: 45px; font-family: Arial,sans-serif;">', $content);
$content = preg_replace('/</h1>/', '</td></tr>', $content);
$content = preg_replace('/<h2>/', '<tr><td style="color: #444444; font-size: 18px; font-weight: bold; line-height: 24px; font-family: Arial,sans-serif;">', $content);
$content = preg_replace('/</h2>/', '</td></tr><tr><td height="18" style="font-size: 0; line-height: 0;">&nbsp;</td></tr>', $content);
$content = preg_replace('/<a>/', '<a style="color: #1155cc; font-weight: bold; font-family: Arial,sans-serif; text-decoration: none;">', $content);
$content = preg_replace('/<img>/', '<a style="color: #1155cc; font-weight: bold; font-family: Arial,sans-serif; text-decoration: none;">', $content);
$content = preg_replace('/<img>/', '<a style="color: #1155cc; font-weight: bold; font-family: Arial,sans-serif; text-decoration: none;">', $content);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta content="yes" name="apple-touch-fullscreen">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="date">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Texas A&M University IEEE</title>

        <style type="text/css">
            @media screen and (max-device-width: 600px) {
                .date {
                    color: #ffffff; font-size: 10px; line-height: 10px; font-family: 'Times New Roman',serif;
                }
            }
            @media screen and (min-width: 600px) {
                .date {
                    color: #ffffff; font-size: 19px; line-height: 19px; font-family: 'Times New Roman',serif;
                }
            }
            p {
                color: #444444;
                font-size: 13px;
                line-height: 18px;
                font-family: Arial,sans-serif;
                margin: 0;
            }
            h1 {
                color: #500000;
                font-size: 24px;
                font-weight: bold;
                line-height: 45px;
                font-family: Arial,sans-serif;
                margin: 0;
            }
            h2 {
                color: #444444;
                font-size: 18px;
                font-weight: bold;
                line-height: 24px;
                font-family: Arial,sans-serif;
                margin: 0 0 18px 0;
            }
            a {
                color: #1155cc;
                font-weight: bold;
                font-family: Arial,sans-serif;
                text-decoration: none;
            }
            img {
                max-width: 540px;
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td bgcolor="#c7c7c7">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
                        <tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
                        <tr>
                            <td bgcolor="#3d0b0b" style="border-top-left-radius: 6px; border-top-right-radius: 6px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td width="15" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="285" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="195" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="15" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="15" height="12" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="285" height="12" align="left" style="font-size: 12px; line-height: 12px; font-family: Arial,sans-serif;"><a href="http://www.ieeetamu.org" style="color: #ffffff; font-weight: bold; text-decoration: none;">www.ieeetamu.org</a></td>
                                        <td width="195" height="12" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="12" align="center"><a href="http://www.facebook.com/ieeetamu" target="_blank"><img src="http://www.ieeetamu.org/images/like-glyph.png" alt="ieeetamu" /></a></td>
                                        <td width="30" height="12" align="center"><a href="http://www.twitter.com/TAMU_IEEE" target="_blank"><img src="http://www.ieeetamu.org/images/tweet-glyph.png" alt="TAMU_IEEE" /></a></td>
                                        <td width="30" height="12" align="center"><a href="mailto:secretary@ieeetamu.org" target="_blank"><img src="http://www.ieeetamu.org/images/mail-glyph.png" alt="Email" /></a></td>
                                        <td width="15" height="12" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="15" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="285" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="195" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="15" height="8" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#500000" style="background-image: url(http://www.ieeetamu.org/images/ieee_logo_newsletter.jpg);">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td width="340" height="79" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="240" height="79" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="20" height="79" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="340" height="19" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="240" height="19" align="center" class="date">Week of <?php echo $date; ?></td>
                                        <td width="20" height="19" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="340" height="10" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="240" height="10" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="20" height="10" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="540" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="540"><div><?php echo $content; ?></div></td>
                                        <td width="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="540" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#500000" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="200" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="80" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="260" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="30"style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="200">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                <tr>
                                                    <td style="font-size: 12px; line-height: 15px; font-family: Arial,sans-serif; color: #888888;">You're receiving this because you subscribed to our weekly newsletter.</td>
                                                </tr>
                                                <tr>
                                                    <td height="15" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px; line-height: 15px; font-family: Arial,sans-serif;"><a href="<?php echo $unsubscribe; ?>" target="_blank" style="color: #ffffff; font-weight: bold; text-decoration: none;">Unsubscribe</a></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="80" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="260" valign="top" align="right" style="font-size: 12px; line-height: 15px; font-family: Arial,sans-serif;">
                                            <a href="http://www.ieeetamu.org" target="_blank" style="color: #ffffff; font-weight: bold; text-decoration: none;">
                                                IEEE Student Branch,<br />
                                                Wisenbaker Engineering Research Center,<br />
                                                Texas A&M University
                                            </a>
                                        </td>
                                        <td width="30"style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="200" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="80" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="260" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                        <td width="30" height="30" style="font-size: 0; line-height: 0;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr><td style="font-size: 0; line-height: 0;" height="60">&nbsp;</td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
