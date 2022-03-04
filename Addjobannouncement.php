<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.job_announcements{
    height: 8rem;
    font-size: 3rem;
    font-family: sans;
    text-transform: uppercase;
    margin:auto;
    color:red;
    text-align:center;
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


.submit_button{
  background-color:#5cb85c;
  width:max-content;
  border:none;
  height:2rem;
  padding:2px

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
  <h1 class="job_announcements" >add job announcement</h1>
  <div class="content-box"> 
     <form action="jobannouncement.php" method="post">
     <label for="companyid">company id:</label>
         <input type="text" id="companyid" name="companyid" value=""required ><br>  
     <label for="companyname">company name:</label>
        
         <input type="text" id="companyname" name="companyname" value=""required ><br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value=""required><br>
        <label for="ctc">CTC</label>
        <input type="text" id="ctc" name="ctc" value=""required><br>
        <label for="lastdate">Lastdate of registration:</label>
        <input type="text" id="lastdate" name="lastdate" value=""required><br>
        <label for="eligibility">Eligibility criteria:</label>
        <input type="text" id="eligibility" name="eligibility" value=""required>
      <br>
      <br>
        <input type="submit" class="submit_button" value="Submit">
     
  
</form>
</div>

</div>
   
</body>
</html> 
