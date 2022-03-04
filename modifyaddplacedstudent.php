<!DOCTYPE html>
<html>
<head>
<script>   
function welcome() {   
window.open("placedstudent.php");  
}   
</script>
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
  <a href="noofcompanies.php">list of companies</a>
  <a href="listofstudent.php">list of student</a>
  <a href="modifyaddplacedstudent.php">placed student list add & update</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main">
  <h1>Placed Student</h1>
  <form >
  <a href="addplacedstudent.php">Add placed student</a>
  <a href="displayplacedstudent.php">placed student list</a>
</form>
</div>

</body>
</html> 
</div>
   
</body>
</html> 
 
