<?php

ini_set(E_ALL, 1);
error_reporting();

// Common settings
header('Content-type: image/png');
putenv('GDFONTPATH=' . realpath('.'));

define('WIDTH', 501);
define('HEIGHT', 501);

$picture = imagecreate(WIDTH, HEIGHT);

//background color
$white = imagecolorallocate($picture, 255, 255, 255);
//graphic color
$red = imagecolorallocate($picture, 198, 0, 0);
//field settings
$green = imagecolorallocate($picture, 0, 140, 0);
imagefill($picture, 0, 0, $white);

//background
imagesetthickness($picture, 1);
for ($i = 0; $i < HEIGHT; $i+=25) {
    imageline($picture, $i, 0, $i, HEIGHT, $green);
    imageline($picture, 0, $i, WIDTH, $i, $green);
}

//coordinate system settings
imagesetthickness($picture, 3);
$black = imagecolorallocate($picture, 0, 0, 0);

//coordinate lines
imageline($picture, 250, 50, 250, 450, $black);
imageline($picture, 50, 250, 450, 250, $black);

//arrows vertical
imageline($picture, 250, 50, 255, 65, $black);
imageline($picture, 250, 50, 245, 65, $black);
//and horizontal
imageline($picture, 450, 250, 435, 255, $black);
imageline($picture, 450, 250, 435, 245, $black);

//coordinate names
$font = 'arial';
imagettftext($picture, 14, 0, 440, 270, $black, $font, "x");
imagettftext($picture, 14, 0, 230, 63, $black, $font, "y");

//reference system
imageline($picture, 275, 245, 275, 255, $black);
imageline($picture, 245, 225, 255, 225, $black);
imagettftext($picture, 12, 0, 273, 273, $black, $font, "1");
imagettftext($picture, 12, 0, 233, 232, $black, $font, "1");
