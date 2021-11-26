<?php
$a = rand(0,150);
$b = rand(0,150);

function cacl($a,$b) {
    if ($a % 2 == 0 && $b % 2 == 0) {
        echo $a - $b;
    }elseif ($a % 2 == 1 && $b % 2 == 1) {
        echo $a * $b;
    }elseif($a % 2 != $b % 2) {
        echo $a + $b;
    } else {
        echo "Введены не цифры";
    }
}

cacl($a,$b);