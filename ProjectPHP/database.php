<?php

$dbuser='';
$dbpass='';
$dbname='';
$dbhost='';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>