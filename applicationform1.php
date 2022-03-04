<?php
$name=$_POST['name'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$highschool=$_POST['highschool'];
$intermediate=$_POST['intermediate'];
$graduation=$_POST['graduation'];

//database
$conn=new mysqli('localhost','root','','studentpanel');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into applicationform(name,fathername,mothername,dob,email,branch,highschool,intermediate,graduation)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$name,$fathername,$mothername,$dob,$email,$branch,$highschool,$intermediate,$graduation);
    $stmt->execute();
    echo "filled succesfull";
   
    $stmt->close();
    $conn->close();
}
?>