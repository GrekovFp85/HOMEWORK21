<?php

class Control {

    public static function filter($array) {
        return array_filter($array, function ($element) {
            return $element->getAge() > 18;
        });
    }
}

