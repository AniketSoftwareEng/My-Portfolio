<?php
$host = "smtp.gmail.com";
$port = 587;

$connection = fsockopen($host, $port, $errno, $errstr, 10);
if (!$connection) {
    echo "Connection failed: $errstr ($errno)";
} else {
    echo "Connected to SMTP server!";
    fclose($connection);
}
?>
