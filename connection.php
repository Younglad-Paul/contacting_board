<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "info";

if(!$con = mysqli_connect ($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("failed to connect to the internet!");
}

?>