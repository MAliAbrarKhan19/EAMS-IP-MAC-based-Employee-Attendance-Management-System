<?php include'header.php'; ?>

  
<?php  
  
include("database/db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 
<?php

    // PHP program to get IP address of client
    $IP = $_SERVER['REMOTE_ADDR'];
    $IPServer = $_SERVER['SERVER_ADDR'];

    // $IP stores the ip address of client
    // echo "Your IP address is: $IP<br><hr>";
    // echo "ServerIP address is: $IPServer";
    // Print the ip address of clien
?>

<?php   
    
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
    <div class="row">  
        <div class="col-md-8 offset-md-2">  
            <div class="card bg-primary text-light p-2">  
                <div class="panel-heading">  
                    <h3 class="card-title">Employee Log In / Log Out</h3>  
                </div>  
                <div class="card-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >
                                IP: <?php echo $IP; ?>
                                <input class="form-control" placeholder="<?php echo $IP; ?>" value="<?php echo $IP; ?>" name="emp_ip" type="hidden" autofocus>  
                            </div> 
                            <div class="form-group"  >
                                MAC  <?php echo $MAC; ?>
                                <input class="form-control" placeholder="<?php echo $MAC; ?>" value="<?php echo $MAC; ?>" name="emp_mac" type="hidden" autofocus>  
                            </div> 
                            <div class="form-group"  > 
                                Email 
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group"> 
                                Password 
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
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