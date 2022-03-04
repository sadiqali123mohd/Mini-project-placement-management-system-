<?php

$db = mysqli_connect("localhost","root","","admin-login");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>