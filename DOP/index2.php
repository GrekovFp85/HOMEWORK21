<?php

$arrayA = [1, 2, 3, 2, 0];
$arrayB = [5, 1, 2, 7, 3, 2];

function compareArray($a, $b) {

    return $a == $b;
}

function  arrayIntersection($array1, $array2) {

    $arrayC = array_uintersect($array1, $array2, "compareArray");
    return $arrayC;
}

print_r(arrayIntersection($arrayA, $arrayB));
