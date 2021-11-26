<?php
date_default_timezone_set('Asia/Yekaterinburg');
$hours = date('H');
$minets = date('i');

function checkHour ($hour) {
    if ($hour > 10 && $hour < 20) {
        return ' часов ';
    }else{
        if ($hour % 10 == 1) {
            return ' час ';
        }elseif($hour % 10 == 2 || $hour % 10 == 3 || $hour % 10 == 4) {
            return ' часа ';
        }elseif($hour % 10 == 5 || $hour % 10 == 6 || $hour % 10 == 7 || $hour % 10 == 8 || $hour % 10 == 9 || $hour % 10 == 0) {
            return ' часов ';
        }
    }
}

function checkMinet ($minet) {
    if ($minet > 10 && $minet < 20) {
        return ' минут';
    }else{
        if ($minet % 10 == 1) {
            return ' минута';
        }elseif($minet % 10 == 2 || $minet % 10 == 3 || $minet % 10 == 4) {
            return ' минуты';
        }elseif($minet % 10 == 5 || $minet % 10 == 6 || $minet % 10 == 7 || $minet % 10 == 8 || $minet % 10 == 9 || $minet % 10 == 0) {
            return ' минут';
        }
    }
}

echo $hours.checkHour($hours).$minets.checkMinet($minets);