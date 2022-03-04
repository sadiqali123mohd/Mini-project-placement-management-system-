<?php
$studentid=$_POST['studentid'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
//database
$conn=new mysqli('localhost','root','','studentpanel');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into studentlogin(studentid,name,mobile,email,password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$studentid,$name,$mobile,$email,$password);
    $stmt->execute();
    echo '<script>alert("Signup Sucess")</script>';
    $stmt->close();
    $conn->close();
}
?>