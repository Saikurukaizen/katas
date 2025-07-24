<?php
declare(strict_types=1);


class Conversor{
    public const CELCIUS_TO_FAHRENHEIT = 1.8;
    public const CELCIUS_TO_KELVIN = 273.15;
    public const KELVIN_TO_CELCIUS = -273.15;
    public const KELVIN_TO_FAHRENHEIT = 459.67;
    public const FAHRENHEIT_TO_CELCIUS = 32;
    public const FAHRENHEIT_TO_KELVIN = 255.372;

    public function convertCelciusToFahrenheit(float $celcius): float{
        return ($celcius * self::CELCIUS_TO_FAHRENHEIT) + self::FAHRENHEIT_TO_CELCIUS;
    }

    public function convertCelciusToKelvin(float $celcius): float{
        return $celcius + self::CELCIUS_TO_KELVIN;
    }

    public function convertKelvinToCelcius(float $kelvin): float{
        return $kelvin + self::KELVIN_TO_CELCIUS;
    }

    public function convertKelvinToFahrenheit(float $kelvin): float{
        return ($kelvin + self::KELVIN_TO_FAHRENHEIT) * self::CELCIUS_TO_FAHRENHEIT;
    }

    public function convertFahrenheitToCelcius(float $fahrenheit): float{
        return ($fahrenheit - self::FAHRENHEIT_TO_CELCIUS) / self::CELCIUS_TO_FAHRENHEIT;
    }

    public function convertFahrenheitToKelvin(float $fahrenheit): float{
        return ($fahrenheit + self::FAHRENHEIT_TO_CELCIUS) / self::CELCIUS_TO_FAHRENHEIT + self::CELCIUS_TO_KELVIN;
    }  
}


?>