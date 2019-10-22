<?php
error_reporting(0);	
function getRandomWord($len = 5) {
$word = array_merge(range('0', '9'), range('A', 'Z'));
shuffle($word);
return substr(implode($word), 0, $len);
}

$ranStr = getRandomWord();

$height = 35; //CAPTCHA image height
$width = 150; //CAPTCHA image width
$font_size = 24; //CAPTCHA Font size


$image_p = imagecreate($width, $height);
$graybg = imagecolorallocate($image_p, 245, 245, 245);
$textcolor = imagecolorallocate($image_p, 34, 34, 34);



imagefttext($image_p, $font_size, -2, 15, 26, $textcolor,public_path().'/fonts/mono.ttf',$ranStr);
imagepng($image_p);
?>
					