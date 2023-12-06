<?php
define('DB_SERVER','localhost');
define('DB_USER','onlin778_rohit');
define('DB_PASS' ,'rohit1995');
define('DB_NAME', 'onlin778_akasha123');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>