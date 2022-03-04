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
 
  <a href="listofstudent.php">list of student</a>
  <a href="modifyaddplacedstudent.php">placed student list add & update</a>
  <a href="logout.php">Logout</a>
</div>
<div class="main">

  <form >
        <h1> list of companies in campus placement</h1>
 <br>
 <br>
 

 
        <!DOCTYPE html>

<table border="2">
  <tr>
     <td>companyid</td>
    <td>company_name</td>
    <td>position</td>
    <td>Ctc</td>
    <td>Lastdate</td>
    <td>Eligibility</td>
    <td>Action</td>
    
  </tr>

<?php

include "config2.php"; // Using database connection file here

$records = mysqli_query($db,"select * from jobannouncement"); // fetch data from database

while($row = mysqli_fetch_array($records))
{
?>
  <tr> <td><?php echo $row['companyid']; ?></td>
    <td><?php echo $row['companyname']; ?></td>
    <td><?php echo $row['position']; ?></td>
    <td><?php echo $row['ctc']; ?></td>
    <td><?php echo $row['lastdate']; ?></td>
    <td><?php echo $row['eligibility']; ?></td>
    <td>
      <a href='edit.php?id=<?php echo $row['companyname'];?>'>Edit</a>
      <a href='delete.php?id=<?php echo $row['companyid'];?>'>Delete</a>
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
