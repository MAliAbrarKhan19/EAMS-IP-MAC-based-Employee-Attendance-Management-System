<?php include'header.php'; ?>

  
<?php
include("db_conection.php");  

// logout code 
if(isset($_POST['logout']))  
{ 
    $_SESSION['emp_email']=0;
    session_start(); 

    session_destroy();  
    echo "<script> alert('LOGOUT success!!you are out');</script>"; 
    //header("Location:index.php");//use for the redirection to some page  

}  
// login Code PHP Starts  
  
if(isset($_POST['login']))  
{  
    $emp_email=$_POST['emp_email'];  
    $emp_pass=$_POST['emp_pass'];  
  
    $check_user="select*from employee WHERE emp_email='$emp_email' AND emp_pass='$emp_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        $_SESSION['emp_email']=$emp_email; 
        include 'loginfunction.php'; 
        echo "<script> alert('success!!".$_SESSION['email']."you are in');window.open('index.php');</script>";  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
} 
// login Code PHP Ends  



?> 
<script type="text/javascript">
    // alert
</script>
<?php

    // PHP program to get IP address of client
    $IP = $_SERVER['REMOTE_ADDR'];
    $IPServer = $_SERVER['SERVER_ADDR'];
    // $IP stores the ip address of client
    // echo "Your IP address is: $IP<br><hr>";
    // echo "ServerIP address is: $IPServer";
    // Print the ip address of clien
   
    //Get mac and IP
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

<!-- // loged in block -->
<?php 
    if (!empty($_SESSION['emp_email'])) {
            
?>
<div class="row">
    <div class="col-md-12">
        <div class=" text-info">
            <h1>
                <?php echo $_SESSION['emp_email']; ?> is logged in successfully.
            </h1>
        </div>        
    </div>
</div>
<?php 
        }    
 ?>
<!-- // loged in block -->

    <div class="row mt-3" >  
        <div class="col-md-8 offset-md-2">  
            <div class="card bg-primary text-light p-2">  
                <div class="panel-heading">  
                    <h3 class="card-title">Employee Log In / Log Out</h3>  
                </div>  
                <div class="card-body">  
                    <form role="form" method="post">  
                        <fieldset>  
                            <div class="form-group m-3"  >

                                IP: <?php echo $IP; ?>
                                <input class="form-control" placeholder="<?php echo $IP; ?>" value="<?php echo $IP; ?>" name="emp_ip" type="hidden" autofocus>  
                            </div>

                            <div class="form-group m-3"  >
                                MAC  <?php echo $MAC; ?>
                                <input class="form-control" placeholder="<?php echo $MAC; ?>" value="<?php echo $MAC; ?>" name="emp_mac" type="hidden" autofocus>  
                            </div> 
                            <div class="form-group m-3"  > 
                                Email 
                                <input class="form-control" placeholder="E-mail" name="emp_email" type="email" autofocus>  
                            </div>  
                            <div class="form-group m-3"> 
                                Password 
                                <input class="form-control" placeholder="Password" name="emp_pass" type="password" value="">  
                            </div>  
  
                            <div class="m-1 p-2"> 
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
                                <input class="btn btn-lg btn-danger btn-block" type="submit" value="logout" name="logout" >  
                            </div>
                            <!-- this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div> 


<?php include 'footer.php'; ?>
