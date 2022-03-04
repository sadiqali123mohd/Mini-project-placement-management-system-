<?php
$companyid=$_POST['companyid'];
$companyname=$_POST['companyname'];
$position=$_POST['position'];
$ctc=$_POST['ctc'];
$lastdate=$_POST['lastdate'];
$eligibility=$_POST['eligibility'];

//database
$conn=new mysqli('localhost','root','','admin-login');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into jobannouncement(companyid,companyname,position,ctc,lastdate,eligibility)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$companyid,$companyname,$position,$ctc,$lastdate,$eligibility);
    $stmt->execute();
   
    echo  '<script>alert("Submitted succesfully ")</script>';
  
    $stmt->close();
    $conn->close();
}
?>