<?php 


$celsius = 30;


$fahrenheit = ($celsius * 9/5) + 32;
$kelvin = $celsius + 273.15;
$reamur = $celsius * 4/5;

echo "Suhu dalam Celsius: " . $celsius . "°C<br>";
echo "Fahrenheit: " . $fahrenheit . "°F<br>";
echo "Kelvin: " . $kelvin . " K<br>";
echo "Reamur: " . $reamur . "°R";