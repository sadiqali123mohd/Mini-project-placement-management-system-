<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.Academic
{
  color:hotpink;
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
.submit_button{
  background-color:#5cb85c;
  width:max-content;
  border:none;
  height:2rem;
  padding:2px

}
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #5b0bdb;
  display: inline-block;
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
.personal{
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
  flex-direction:row;
  font-family:open-sans;

}
.name{
  border-radius: 5px;
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
  <h1 class= "personal">Fill personal details</h1>
  <div class="content-box"> 
  <form action="applicationform1.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text"class ="name" id="name" name="name" value=""required><br>
        <label for="fathername">Father name:</label><br>
        <input type="text" id="fathername" name="fathername" value=""required><br><br>
        <label for="mothername">Mother name:</label><br>
        <input type="text" id="mothername" name="mothername" value=""required><br><br>
        <label for="dob">Date of Birth :</label><br>
        <input type="text" id="dob" name="dob" value=""required><br><br>
        <label for="email">Email :</label><br>
        <input type="text" id="email" name="email" value=""required><br><br>
       
     
  <label for="branch">Branch</label><br>
  <input type="text" id="branch" name="branch" value=""><br><br>
        <br>
        <h2 class="Academic" ><b>Academic details</b></h2>
        <label for="highschool">High school %</label><br>
         <input type="text" id="highschool" name="highschool" value="" required><br>
         <label for="intermediate">Intermediate %</label><br>
         <input type="text" id="intermediate" name="intermediate" value=""required><br>
         <label for="graduation">Graduation %</label><br>
         <input type="text" id="graduation" name="graduation" value=""><br>
         <br>
         <input type="submit" class="submit_button" value="Submit"></form><div>
    </form>
</div> 
</body>
</html> 
