<?php

// знаки препинания меняю через str_replace, а вот как функционально это осуществить не понимаю;

$s = 'Hello world! My name is Alex.';

function reversSentence ($string) {

    $explodeString = explode(' ', $string);
    $reversArray = array_reverse($explodeString);

    return $reversString = implode(' ', $reversArray);
}

echo reversSentence($s);

