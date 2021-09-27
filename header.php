<?php  
error_reporting();
session_start();//session starts here  
  
?>  
 


<html>  
<head lang="en">  
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-icons.css">
    <!-- Bootstrap CSS -->



    <link rel="icon" type="text/css" href="person-bounding-box.svg" class="bg-warning"> 
    


    <title>EAMS</title>  
</head>  
<style>  
    
  
</style>  
  
<body class="container-fluid bg-secondary">  
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <a class="navbar-brand" href="#">
              <h2>
                  <i class="bi bi-person-bounding-box text-info">EAMS</i>
              </h2>
          </a>
          <span class="navbar-text mr-5" style=" ">
               | IP & MAC based attendance system |  
          </span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link text-info btn btn-outline-info" href="index.php"><i class="bi bi-house-door"></i>Home</a>
              </li>
              
              
                <?php 

                  if(empty($_SESSION['admin_name'])){
                  
                    ?>
                    <a class="btn btn-outline-info" href="admin_login.php">Admin login</a>
                  <?php   
                   }else if (!empty($_SESSION['admin_name'])){
                    $adm="Admin Name: ".$_SESSION['admin_name']
                    ?>
                <li class="nav-item">
                    <a href="adminpanel.php#menu" class="btn btn-outline-info">Admin panel</a>
                </li>
                <li class="nav-item">
                    <form method="POST">
                    <input type="submit" name="admin_logout" value="Admin logout" class="btn btn-outline-info ">
                    </form>
                </li>
                    <?php
                   } ?>
             
            </ul>
            
            
          </div>
          
          
          <span class="navbar-text text-info m-1">
            <i><?php echo $adm; ?></i>
          </span>
          
        </nav>
      </div>
    </div>
<?php 
/// Log out Code Starts

/// Log out Code Ends 
if(isset($_POST['admin_logout'])){
  //session_start();
  session_destroy();
  header("Location: index.php");//use for the redirection to some page  

}

 ?>
<div class="row mt-1 p-5" 
style="background-image: url(./img/eamsbg.svg);
background-size: auto;
background-attachment: inherit;
background-repeat: no-repeat;
background-position: right;


">
    <div class="col-md-6 text-light p-3" style="background-color: rgba(0, 0, 10, 0.3);">
        <h4 class="h3">Welcome to</h4>
          <h1 class="display-2 m-4 text-info"><i class="bi bi-person-bounding-box"></i> EAMS </h1>
          <h3 class="text-primary m-1 p-2 ">Employee Attendance Management System</h3>

        <h5 class="m-3">EAMS is a IP and MAC based Attendance System for official use.</h5>

    </div>
</div>  

<?php 
date_default_timezone_set("ASIA/DHAKA");
$time=date("H");//hr
$timemin=date("i");//min
//$date = date(" h:i a  d-m-Y");
$date = date("d-m-Y");
$day=date("j");
$month=date("n");
$year=date("o");
$timehr=date("H");
//echo "<h1 class='text-light'>"."time".$time." day".$day." month ".$month." year".$year."</h1>"
?>