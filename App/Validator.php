<?php
namespace App;

class Validator
{
    public static function stringValidator($value, $min = 1, $max = INF)
    {
        // for sure not white space charater 
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public static function emailValidator($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
