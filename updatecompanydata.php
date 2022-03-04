<?php
$companyid=$_POST['companyid'];
$companyname=$_POST['companyname'];
$position=$_POST['position'];
$ctc=$_POST['ctc'];
$lastdate=$_POST['lastdate'];
$eligibility=$_POST['eligibility'];

$conn=mysqli_connect("localhost","root","","admin-login") or die("connection failed");
$sql="UPDATE jobannouncement SET companyid='{$companyid}',position='{$position}',ctc='{$ctc}',lastdate='{$lastdate}',eligibility='{$eligibility}'    WHERE companyname={$companyname}";
header("Location:http://localhost/pro/admin panel/noofcompanies.php");
?>