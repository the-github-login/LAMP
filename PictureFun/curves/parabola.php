<?php

for ($x = 0; $x < 67; $x++) {
    imageline($picture, $x + 250, -$x * $x / 25 + 250, 
            $x + 1 + 250, -($x + 1) * ($x + 1) / 25 + 250, $red);
    imageline($picture, -$x + 250, -$x * $x / 25 + 250, 
            -$x - 1 + 250, -($x + 1) * ($x + 1) / 25 + 250, $red);
}

