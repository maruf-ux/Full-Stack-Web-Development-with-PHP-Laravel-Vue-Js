<?php

// Simple Electricity Bill Calculator

$consume = 0;

echo "How many electricity units did you consume last month? ";

$units = readline();

if ($units <= 100) {

    $consume = $units * 5;
    echo "Total Bill of electricity: $" . $consume;

} else if ($units > 100 && $units <= 200) {
    $consumeX = 100;
    $consumeY = $units - 100;
    $consume = $consumeX * 5 + $consumeY * 10;

    echo "Total Bill of electricity: $" . $consume;
} else if ($units > 200) {
    $consumeX = 100;
    $consumeY = 100;
    $consumeZ = $units - 200;
    $consume = $consumeX * 5 + $consumeY * 10 + $consumeZ * 15;

    echo "Total Bill of electricity: $" . $consume;
} else {
    echo "Please Fill up with right format" . $consume;
}
