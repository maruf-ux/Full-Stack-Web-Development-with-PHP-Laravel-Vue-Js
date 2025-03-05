<?php

// Temperature Converter

define('FACTOR', 9 / 5);
define('OFFSET', 32);

echo "Temperature value: ";
$temp = (float) readline();

echo "Temperature Converter: Write 1 for Fahrenheit to celsius AND 2 for Celsius to fahrenheit: ";
$mcq = readline();

switch ($mcq) {
    case 1:
        $result = $temp * FACTOR + OFFSET;
        echo "result " . $result;
        break;
    case 2:
        $result = ($temp - OFFSET) / FACTOR;
        echo "result " . $result;
        break;
    default:
        echo "Invalid input";
        break;
}

