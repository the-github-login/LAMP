<?php

for ($x = 1; $x < 250; $x++) {
    imageline($picture, $x + 250, -25*25 / $x + 250, 
            $x + 1 + 250, -25*25 / ($x + 1) + 250, $red);
    imageline($picture, -$x + 250, 25*25 / $x + 250, 
            -$x - 1 + 250, 25*25 / ($x + 1) + 250, $red);
}