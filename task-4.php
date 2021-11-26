<?php
$a = rand(0,150);
$b = rand(0,150);
$sign = ["-","+","/","*"];

function cacl($a,$b,$sign) {
    switch ($sign) {
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "+":
            return $a + $b;
        case "/":
            return $a / $b;
        default:
        "Введены не цифры или неверный орифметический знак";
    }
}
echo cacl($a,$b,$sign[rand(0,2)]);