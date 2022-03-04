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
.placed{
  border:1px solid grey;
  margin:auto;
  width:80%;
  font-size:1.5rem;

  display:flex; 
  flex-direction:row;
  font-family:open-sans;
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
  <h1>Add Placed Student List </h1>
  <div class="placed">
  <form action="placeddata.php" method="post">
        <label for="name"> Name:</label><br>
         <input type="text" id="name" name="name" value=""><br>
        <label for="branch">Branch:</label><br>
        <input type="text" id="branch" name="branch" value=""><br><br>
        <label for="batch">Batch</label><br>
        <input type="text" id="batch" name="batch" value=""><br><br>
        <label for="ctc">Ctc</label><br>
        <input type="text" id="ctc" name="ctc" value=""><br><br>
        <label for="company">Company</label><br>
        <input type="text" id="company" name="company" value=""><br><br>

        <input type="submit" value="Submit">
</form>
</form> 
</div>
   
</body>
</html> 
