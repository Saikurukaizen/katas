<?php
declare(strict_types=1);

require_once 'Conversor.php';

$conversor = new Conversor();
$conversion1 = $conversor->convertCelciusToKelvin(23);
$conversion2 = $conversor->convertCelciusToFahrenheit(23);
$conversion3 = $conversor->convertKelvinToCelcius(321);
$conversion4 = $conversor->convertKelvinToFahrenheit(321);

echo "Celcius: " . 23 . " Kelvin, ".$conversion1." Fahrenheit: " .$conversion2. "\n";
echo "Kelvin: ". 321 . " Celcius, " .$conversion3. " Fahrenheit: " .$conversion4. "\n";

?>