<?php 

// Nilai suhu dalam Celsius
$celsius = 30;

// Konversi suhu
$fahrenheit = ($celsius * 9/5) + 32;
$kelvin = $celsius + 273.15;
$reamur = $celsius * 4/5;

// Tampilkan hasil
echo "Suhu dalam Celsius: " . $celsius . "°C<br>";
echo "Fahrenheit: " . $fahrenheit . "°F<br>";
echo "Kelvin: " . $kelvin . " K<br>";
echo "Reamur: " . $reamur . "°R";