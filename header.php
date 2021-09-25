<?php  
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
  
<body class="container-fluid">  
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <a class="navbar-brand" href="#">
              <h2>
                  <em> EAMS </em>
              </h2>
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_login.php">Admin  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registration.php">New Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
            </ul>
            
            
          </div>
          <span class="navbar-text " style=" ">
               | IP & MAC based attendance system |  
          </span>
        </nav>
      </div>
    </div>

<div class="row mt-1 p-5" 
style="background-image: url(./img/eamsbg.svg);
background-size: auto;
background-attachment: inherit;
background-repeat: no-repeat;
background-position: right;


">
    <div class="col-md-6 text-light p-3" style="background-color: rgba(0, 0, 10, 0.3);">
        <h4 class="h3">Welcome to</h4>
          <h1 class="display-2 m-4 text-primary"><i class="bi bi-person-bounding-box"></i> EAMS </h1>
          <h3 class="text-info m-1 p-2 ">Employee Attendance Management System</h3>

        <h5 class="m-3">EAMS is a IP and MAC based Attendance System for official use.</h5>

    </div>
</div>  

<?php 
date_default_timezone_set("ASIA/DHAKA");
$time=date("H");//hr
$timemin=date("i");//min
//$date = date(" h:i a  d-m-Y");
$day=date("j");
$month=date("n");
$year=date("o");
$timehr=date("H");
echo "<h1 class='text-light'>"."time".$time." day".$day." month ".$month." year".$year."</h1>"
?>