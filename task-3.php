<?php
$a = rand(0,150);
$b = rand(0,150);

function sum($a,$b) {
    return $a + $b;
}

function sub($a,$b) {
    return $a - $b;
}

function mult($a,$b) {
    return $a * $b;
}

function div($a,$b) {
    return $a / $b;
}
echo "a = ".$a." b = ".$b."<br>";
echo "Сумма - ".sum($a,$b)."<br>Разница - ".sub($a,$b)."<br>Произведение - ".mult($a,$b)."<br>Частное - ".div($a,$b);