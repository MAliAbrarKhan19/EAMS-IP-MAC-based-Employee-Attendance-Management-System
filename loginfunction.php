<?php 
//`attendance`(`sl`, `emp_name`, `emp_ip`, `emp_mac`, `emp_status`, `logintime`, `loginmin`, `logouttime`, `logoutmin`, `remark`, `day`, `month`, `emp_date`)

// ==============IP MAC VERYFY and entry============================
	include("db_conection.php");  

	//Checking MAC  match 
	$check="select*from employee WHERE emp_mac='$emp_mac' AND emp_ip='$emp_ip'";  
    $run=mysqli_query($dbcon,$check);  
  
    if(mysqli_num_rows($run)){
        $_SESSION['emp_email']="mac OK"; 

			//Checking IP  match 
			$check="select*from employee WHERE emp_ip='$emp_ip'";  
		    $run=mysqli_query($dbcon,$check);  
		  
		    if(mysqli_num_rows($run)){  
				// echo "<script> alert('IP & MAC Matched success!!".$_SESSION['email']."you are in');</script>";
				
    
				include("db_conection.php");  

				//======data entry in LOG=======
				$emp_status="Logged in";  
    			$remark="IP & Mac matched.";
        $_SESSION['emp_email']="IP & mac OK"; 

					$insertdb="insert into attendance (emp_name,emp_ip,emp_mac,emp_status,logintime,loginmin,logouttime,logoutmin,remark,day,month,emp_date`)values('$emp_name','$emp_ip','$emp_mac','$emp_status','$logintime','$loginmin','$logouttime','$logoutmin','$remark','$day','$month','$emp_date')";  
				    if(mysqli_query($dbcon,$insertdb))  
				    {  
				    //echo"<script>window.open('index.php');</script>";  
				    echo"<script>alert('');</script>";  
				    }
				    else{ 
				    	echo "<script> alert('Not registered!!');</script>";
				    } 
				//======data entry in LOG=======


		    }  
		    else{ 
		    	//======data entry in LOG=======
		    	$emp_status="Logged in";  
    			$remark="IP didn't match & Mac matched.";
					$insertdb="insert into attendance (emp_name,emp_ip,emp_mac,emp_status,logintime,loginmin,logouttime,logoutmin,remark,day,month,emp_date`)values('$emp_name','$emp_ip','$emp_mac','$emp_status','$logintime','$loginmin','$logouttime','$logoutmin','$remark','$day','$month','$emp_date')";  
				    if(mysqli_query($dbcon,$insertdb))  
				    {  
				    echo"<script>window.open('index.php');</script>";  
				    }
				    else{ 
				    	echo "<script> alert('Not registered!!');</script>";
				    } 
				//======data entry in LOG=======

		      echo "<script>alert('IP didn't Match!!);</script>"; 
		    } 
    }  
    else{ 
      echo "<script>alert('MAC didn't match !!')</script>"; 
    }  

// ==============IP MAC VERYFY and entry============================


 ?>