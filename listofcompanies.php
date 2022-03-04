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
<a href="applicationform.php">Fill Application form</a>
  <a href="profile.php">view own profile</a>
  <a href="listofcompanies.php">list of companies</a>
  <a href="logout.php">logout</a>
</div>


<div class="main">
    <form >
          <h1> list of companies in campus placement</h1>

<table cellpadding="7px">
  <thead>
  
    <th>company name</th>
    <th>position</th>
    <th>Ctc</th>
    <th>Lastdate</th>
    <th>Eligibility</th>
    
  </tr>

<?php

include 'dbConn.php'; // Using database connection file here

$records = mysqli_query($db,"select * from jobannouncement"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['companyname']; ?></td>
    <td><?php echo $data['position']; ?></td>
    <td><?php echo $data['ctc']; ?></td>
    <td><?php echo $data['lastdate']; ?></td>
    <td><?php echo $data['eligibility']; ?></td>
  <td>
      <a href='apply.php'>Apply</a>
      
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection
 ?>
          
  </form>
  </form> 
  </div>
     
  </body>
  </html> 