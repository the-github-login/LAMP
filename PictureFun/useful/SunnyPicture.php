<?php

ini_set(E_ALL, 1);
error_reporting();

header('Content-type: image/png');

putenv('GDFONTPATH=' . realpath('.'));

$picture = imagecreate(500, 500);

$white = imagecolorallocate($picture, 255, 255, 255);
imagefill($picture, 1, 1, $white);

$yellow = imagecolorallocate($picture, 255, 255, 0);
imageellipse($picture, 250, 250, 100, 100, $yellow);
imagefill($picture, 250, 250, $yellow);

for ($x1 = 100; $x1 < 400; $x1+=30) {
    imageline($picture, $x1, 100, 250, 250, $yellow);
    imageline($picture, 250, 250, $x1, 400, $yellow);
}

for ($y1 = 100; $y1 < 400; $y1+=30) {
    imageline($picture, 100, $y1, 250, 250, $yellow);
    imageline($picture, 250, 250, 400, $y1, $yellow);
}

$font = 'arial';
imagettftext($picture, 55, 0, 155, 465, $yellow, $font, 'S U N');

//imagestring($picture, 24, 230, 430, "Sun", $yellow);
imagepng($picture);
imagedestroy($picture);
