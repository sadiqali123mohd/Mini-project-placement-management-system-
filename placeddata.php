<?php
$name=$_POST['name'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$ctc=$_POST['ctc'];
$company=$_POST['company'];

//database
$conn=new mysqli('localhost','root','','admin-login');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into addplacedstudent(name,branch,batch,ctc,company)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$branch,$batch,$ctc,$company);
    $stmt->execute();
    echo '<script>alert("Placed Student details filled succesfully")</script>';
   
    $stmt->close();
    $conn->close();
}
?>