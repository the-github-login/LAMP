<?php

if (isset($_POST['submit'])) {
    
    define('ROOT', __DIR__);
    
    $curve = $_POST['curves'];
    
    require_once 'coordinate_system.php';
    
    if (strcmp($curve, 'straight') == 0) {
        require_once(ROOT . '/curves/straight.php');
    } else if (strcmp($curve, 'parabola') == 0) {
        require_once(ROOT . '/curves/parabola.php');
    } else {
        require_once(ROOT . '/curves/hyperbola.php');
    }
    
    imagepng($picture);
    imagedestroy($picture);
}

