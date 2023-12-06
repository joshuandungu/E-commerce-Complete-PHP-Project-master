<?php
$mysqli = @new mysqli('localhost','onlin778_rohit','rohit1995', 'onlin778_akasha123');

// Works as of PHP 5.2.9 and 5.3.0.
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}



?>
