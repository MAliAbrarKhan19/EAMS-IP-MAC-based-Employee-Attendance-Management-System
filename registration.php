<?php include'header.php'; ?>
 

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

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-8 offset-md-2"> 
            <div class="card bg-primary text-light p-2 m-4">  
                <div class="card-heading">  
                    <h3 class="card-title">Registration</h3>  
                </div>  
                <div class="card-body p-2">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>
                            <div class="form-group m-1"  >
                                IP: <?php echo $IP; ?>
                                <input class="form-control" placeholder="<?php echo $IP; ?>" value="<?php echo $IP; ?>" name="emp_ip" type="hidden" autofocus>  
                            </div> 
                            <div class="form-group m-1"  >
                                MAC  <?php echo $MAC; ?>
                                <input class="form-control" placeholder="<?php echo $MAC; ?>" value="<?php echo $MAC; ?>" name="emp_mac" type="hidden" autofocus>  
                            </div>   
                            <div class="form-group m-1">  
                                <input class="form-control" placeholder="Employee name" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group m-1">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group m-1">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  

  
<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  
<?php include 'footer.php'; ?>