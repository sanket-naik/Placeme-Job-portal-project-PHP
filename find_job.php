 <?php
 session_start();

//$a=$_SESSION['login'];

if(isset($_SESSION['login']))

{




}
 
 else 
 {
 echo "<script>location.href = 'login.php';</script>";
 }
 
?>


<style>
.button {
  border-radius: 10px;
  background-color: #aaaaaa;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placeme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />  


  


   
  </head>
  <body  >
  <header>    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
       <div class="container">          
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
                <div class="navbar-brand">
                   <a href="index.html"><img src="images/logo.png" width="205" height="45"></a>
                 </div>
          </div>
          
          <div class="navbar-collapse collapse">              
            <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" >Home</a></li>
                <li role="presentation"><a href="login.php" >Login</a></li>
                <li role="presentation"><a href="find_job.php" class="active">Find Job</a></li>                
                <li role="presentation"><a href="give_job.php" >Add Job</a></li>
                <li role="presentation"><a href="about.html">About Us</a></li>
                <li role="presentation"><a href="contact.php">Feedback</a></li>
                <li role="presentation"><a href="jobs.php">jobs available</a></li>   
          
                </ul>
            </div>
          </div>            
        </div>
      </div>  
    </nav>    
  </header>

  <div id="breadcrumb">
    <div class="container"> 
      <div class="breadcrumb">              
        <li><a href="index.html">Home</a></li>
        <li>Add Job</li>  

          <?php


       echo "&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";  


         $b=$_SESSION['username'];
         echo"".$b."";




         ?>  
      </div>    
    </div>  
  </div>
  
  
<section ><br>
            <br> 
        <div class="container">
         <div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
  
                        <div class="center">  <br>
                        <br>      
                        <h2>Enter Details For Search</h2>
                        </div> 
                       <div class="row contact-wrap"> 
                               <div class="status alert alert-success" style="display: none"></div>
                               <div class="col-md-6 col-md-offset-3">

                    


<form method="get" action="sort.php">







<div class="dropdown">

<h3>Production : </h3>
    <select class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" name="production" >Production
    <span class="caret"></span></button>
    <ul class="dropdown-menu">

     
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "placeme";

$conn = new mysqli($servername, $username, $pass, $dbname);
$sql = mysqli_query($conn, "SELECT production From create_job");
while ($row = mysqli_fetch_array($sql)){
echo "<option value=".$row['production'] .">" .$row['production'] ."</option>" ;
}
?>



    </ul>

    </select>
    </div>



 <div class="dropdown">

 <h3>State : </h3>
    <select class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" name="location" >Location
    <span class="caret"></span></button>
    <ul class="dropdown-menu">

     
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "placeme";

$conn = new mysqli($servername, $username, $pass, $dbname);
$sql = mysqli_query($conn, "SELECT state From create_job");
while ($row = mysqli_fetch_array($sql)){
echo "<option value=".$row['state'] .">" .$row['state'] ."</option>" ;
}
?>



    </ul>

    </select>
    </div>



 <div class="dropdown">

  <h3>Qualification : </h3>
    <select class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" name="qualification" >Qualification
    <span class="caret"></span></button>
    <ul class="dropdown-menu">

     
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "placeme";

$conn = new mysqli($servername, $username, $pass, $dbname);
$sql = mysqli_query($conn, "SELECT qualification From create_job");
while ($row = mysqli_fetch_array($sql)){
echo "<option value=".$row['qualification'] .">" .$row['qualification'] ."</option>" ;
}
?>
 </ul>

    </select>
    </div>



<br>
<br>

<button class="button"><span>Search Job </span></button>

 

</form>
</body>
</html>











          </div>
          
                       
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul> 
          </div>
        </div>
        
                    
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
    
    </br>
</body>
</html>





             <?php




if(isset($_GET['submit']))
{



$production=$_GET['production'];
    if(isset($_GET['location']))
{
       $location=$_GET['location'];
    }

$qualification=$_GET['qualification'];
 

  $_SESSION["production"] = $production;
   $_SESSION["location"] = $location;
   $_SESSION["qualification"] = $qualification;




}
?>


<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


<div class="loader"></div>
    




