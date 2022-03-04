<?php
$id=$_GET['id'];
include 'config.php';
$sql="delete from jobannouncement where companyid={$id}";
$result=mysqli_query($conn,$sql) or die("query failed");
header("Location:http://localhost/pro/admin panel/noofcompanies.php");
mysqli_connect($conn);
?>