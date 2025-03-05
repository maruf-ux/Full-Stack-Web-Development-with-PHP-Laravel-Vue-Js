<?php

// Number Classifier

$num;

echo "Enter a number: ";
$num = readline();

if ($num < 0) {
    echo "Your number is a negative Number " . $num;
} elseif ($num > 0) {
    echo "Your number is a positive Number " . $num;
} else {
    echo "Your number is Zero " . $num;
}