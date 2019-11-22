<?php


class Speedometer
{

    const kilometreToMiles = 0.621;

    public static function convertKmToMiles($km)
    {
        return $km . ' km valent ' . self::kilometreToMiles * $km . ' miles';
    }

    public static function convertMilesToKm($miles)
    {
        return $miles . ' miles valent ' . $miles / self::kilometreToMiles . ' km';
    }
}