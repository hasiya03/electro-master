<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include "connection.php";

echo "PHP script started.<br>";

$name =  $_POST["n"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$password = $_POST["p"];
$gender = $_POST["g"];

echo ($name);







?>