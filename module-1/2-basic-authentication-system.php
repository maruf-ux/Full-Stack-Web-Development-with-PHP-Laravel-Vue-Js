<?php

// Basic Authentication System

define('USERNAME', 'ADMIN');
define('PASSWORD', 'admin');

echo "Enter your username: ";
$username = readline();
echo "Enter your password: ";
$password = readline();

if (empty($username) || empty($password)) {
    echo "Please fill up the credentials";
} else {
    if ($username == USERNAME && $password == PASSWORD) {
        echo "Log in Successful";
    } else {
        echo "Login failed , please check username or password";
    }
}