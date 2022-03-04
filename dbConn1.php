<?php

$db = mysqli_connect("localhost","root","","studentpanel");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>