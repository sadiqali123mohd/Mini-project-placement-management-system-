<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
<a href="Addjobannouncement.php">add job announcement</a>
  <a href="updatejob.php">update job</a>
  <a href="listofstudent.php">list of student</a>
  <a href="modifyaddplacedstudent.php">placed student list add & update</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
  <h4>P<b>laced student</b></h4>
  <form >

<table border="2">
  <tr>
    <td>NAME</td>
    <td>BRANCH</td>
    <td>BATCH</td>
    <td>CTC</td>
    <td>COMPANY</td>
    
  </tr>

<?php

include "config2.php"; // Using database connection file here

$records = mysqli_query($db,"select * from addplacedstudent"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['branch']; ?></td>
    <td><?php echo $data['batch']; ?></td>
    <td><?php echo $data['ctc']; ?></td>
    <td><?php echo $data['company']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection
 ?>

</body>
</html>
</form>
</form> 
</div>
   
</body>
</html> 
