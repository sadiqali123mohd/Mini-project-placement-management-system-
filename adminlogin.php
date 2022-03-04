<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url("Admin.jpg");
  background-repeat: repeat-x;
  font-family: "Lato", sans-serif;
}


.content-box{
  border:1px solid grey;
  margin:auto;
  width:80%;
  font-size:1.5rem;

  display:flex; 
  flex-direction:column;
  font-family:open-sans;

}



.submit_button{
  background-color:#5cb85c;
  width:max-content;
  border:none;
  height:2rem;
  padding:2px

}

.admin-login{
    height: 8rem;
    font-size: 3rem;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-transform: uppercase;
    margin:auto;
    color:aqua;
    text-align:center;
}
.home{

  background-color:blueviolet;
  width:min-content;
  border:1px;
  height:2rem;
  padding:5px;


}
.submit{
height:2rem;
}
</style>
</head>
<body >
    <div class="home">
        <a href="mainpage.html" >Home</a>
        </div>
<div class="main">
  <h1 class="admin-login" >Admin login</h1>
  <div class="content-box"> 
     <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label for="email">Email:</label>
         <input type="text" id="email" name="email" value="" ><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" value=""><br>
        <input type="submit" class ="submit" name="login" class="btn btn-primary">
     
  
</form>
</div>

</div>
<?php 
if(isset($_POST['login'])){
include "config.php";
$mail=$_POST['email'];
$pass=$_POST['password'];
$sql="select  email,password from adminlogin where email='{$mail}' and password='{$pass}'";
$result=mysqli_query($conn,$sql) or die ("query failed");
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){
session_start();
$_SESSION["email"]=$row['email'];
$_SESSION["password"]=$row['password'];
header("Location:http://localhost/pro/admin panel/addjobannouncement.php");
}

}
else {
   echo '<div class="alert alert-danger" >email and password are not matched</div>';
}}
?>


   
</body>
</html> 
