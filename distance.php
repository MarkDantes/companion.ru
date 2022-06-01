<?php
//Расчет расстояний между точками по их координатам(широта и долгота)
function distance($st, $sn, $lt, $ln)
{
    // Радиус земли
    define('EARTH_RADIUS', 6372795);


// перевести координаты в радианы
        $lat1 = $st * M_PI / 180;
        $lat2 = $lt * M_PI / 180;
        $long1 = $sn * M_PI / 180;
        $long2 = $ln * M_PI / 180;

// косинусы и синусы широт и разницы долгот
        $cl1 = cos($lat1);
        $cl2 = cos($lat2);
        $sl1 = sin($lat1);
        $sl2 = sin($lat2);
        $delta = $long2 - $long1;
        $cdelta = cos($delta);
        $sdelta = sin($delta);

// вычисления длины большого круга
        $y = sqrt(pow($cl2 * $sdelta, 2) + pow($cl1 * $sl2 - $sl1 * $cl2 * $cdelta, 2));
        $x = $sl1 * $sl2 + $cl1 * $cl2 * $cdelta;

//
        $ad = atan2($y, $x);
        $dist = $ad * EARTH_RADIUS;

        return $dist;
    }
?>