<?php
/*-----------------------------------------------------
COPYRIGHT NOTICE
Copyright (c) 2001 - 2011, Ketut Aryadana
All Rights Reserved

Email : aryasmail@yahoo.com.au

This code is provided As Is with no warranty expressed or implied.
I am not liable for anything that results from your use of this code.
------------------------------------------------------*/
session_start();
$string = isset($_SESSION['secc']) ? (string)$_SESSION['secc'] : '';
$str1 = substr($string,0,2);
$str2 = substr($string,2,3);
header("Content-type: image/jpeg");
$ardimg = @imagecreate(50, 20) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($ardimg,100,100,100);
$text_color = imagecolorallocate($ardimg,0,0,0);
imagestring($ardimg,5,2,0,$str1,$text_color);
$text_color = imagecolorallocate($ardimg,255,255,255);
imagestring($ardimg,6,19,5,$str2,$text_color);
imagejpeg($ardimg);
imagedestroy($ardimg);
?>