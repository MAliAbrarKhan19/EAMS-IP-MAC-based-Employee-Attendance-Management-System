<?php include'header.php'; ?>
 
<?php 
//error_reporting(E_ALL); 
  
include 'db_conection.php';//make connection here  
if(isset($_POST['register']))  
{  
    $emp_id=1;  
    $emp_name=$_POST['emp_name'];  
    $emp_mobile=$_POST['emp_mobile'];  
    $emp_email=$_POST['emp_email'];  
    $emp_designation=$_POST['emp_designation'];  
    $emp_ip=$_POST['emp_ip'];  
    $emp_mac=$_POST['emp_mac'];  
    $emp_pass=$_POST['emp_pass'];  
    $emp_logintime=$_POST['emp_logintime'];  
    $emp_logouttime=$_POST['emp_logouttime'];  
    //$emp_=$_POST['emp_'];  


//echo ($emp_name.$emp_mobile.$emp_email.$emp_designation.$emp_ip.$emp_mac.$emp_pass.$emp_logintime.$emp_logouttime);

//insert the user into the database.  
    $insertdb="insert into employee(emp_name,emp_mobile,emp_email,emp_designation,emp_ip,emp_mac,emp_pass,emp_logintime,emp_logouttime)values('$emp_name','$emp_mobile','$emp_email','$emp_designation','$emp_ip','$emp_mac','$emp_pass','$emp_logintime','$emp_logouttime')";  
    if(mysqli_query($dbcon,$insertdb))  
    {  
        echo"<script>window.open('index.php');</script>";  
    }
    else{ echo "<script> alert('Not registered!!');</script>";}  
}  
  

?>  
<?php

    // PHP program to get IP address of client
    $IP = $_SERVER['REMOTE_ADDR'];
    $IPServer = $_SERVER['SERVER_ADDR'];

    // $IP stores the ip address of client
    // echo "Client's IP address is: $IP<br><hr>";
    // echo "Client's ServerIP address is: $IPServer";
    // Print the ip address of clien
?>

<?php   
    
function GetClientMac(){
    $macAddr=false;
    $arp=`arp -n`;
    $lines=explode("\n", $arp);

    foreach($lines as $line){
        $cols=preg_split('/\s+/', trim($line));

        if ($cols[0]==$_SERVER['REMOTE_ADDR']){
            $macAddr=$cols[2];
        }
    }

    return $macAddr;
}
$MAC=GetClientMac();
// echo "Your MAC address: $MAC ";
?>

<?php //echo $IP; ?>
<?php //echo $MAC; ?>

<div class="container">  
    <div class="row">
        <div class="col-md-8 offset-md-2"> 
            <div class="card bg-primary text-light p-2 m-4">  
                <div class="card-heading">  
                    <h3 class="card-title">Registration</h3>  
                </div>  
                <div class="card-body p-2">  
                    <form method="post" enctype="multipart/form-data">  
                      
                            <div class="form-group m-3"  >
                                IP : <?php echo $IP; ?>
                                <input class="form-control" placeholder="<?php echo $IP; ?>" value="<?php echo $IP; ?>" name="emp_ip" type="hidden" >  
                            </div> 
                            <div class="form-group m-3"  >
                                MAC : <?php echo $MAC; ?>
                                <input class="form-control" placeholder="<?php echo $MAC; ?>" value="<?php echo $MAC; ?>" name="emp_mac" type="hidden" >  
                            </div>   
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Employee name" name="emp_name" type="text">  
                            </div>
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Employee mobile" name="emp_mobile" type="text">  
                            </div>
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="yourmail@email.com" name="emp_email" type="email" >  
                            </div>  
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Employee Designation" name="emp_designation" type="text">  
                            </div>  
   
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Password" name="emp_pass" type="password" value="">  
                            </div>  
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Log in time in 24 hrs eg.9 for 9am" name="emp_logintime" type="text" >  
                            </div> 
                            <div class="form-group m-3">  
                                <input class="form-control" placeholder="Log out time in 24 hrs eg.17 for 5pm" name="emp_logouttime" type="text" >  
                            </div> 


  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  

                    </form>  
                    <!-- <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center>for centered text--> 
                </div>  
            </div>  
        </div>  
    </div>  
</div>  

  

<?php include 'footer.php'; ?>