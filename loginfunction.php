<?php 
//`attendance`(`sl`, `emp_name`, `emp_ip`, `emp_mac`, `emp_status`, `logintime`, `loginmin`, `logouttime`, `logoutmin`, `remark`, `day`, `month`, `emp_date`)
// $emp_email=$_POST['emp_email'];  
//     $emp_pass=$_POST['emp_pass'];  
//     $emp_ip$_POST['emp_ip'];  
//     $emp_mac=$_POST['emp_mac'];


	//Checking MAC  match 
	$check="select*from employee WHERE emp_mac='$emp_mac' AND emp_ip='$emp_ip'";  
    $run=mysqli_query($dbcon,$check);  
  
    if(mysqli_num_rows($run)){  
		echo "<script> alert('success!!".$_SESSION['email']."you are in');window.open('index.php');</script>";  

    }  
    else{ 
      echo "<script>alert('Email or password is incorrect!')</script>"; 
    }  



 ?>