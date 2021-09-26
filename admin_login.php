<?php include'header.php'; ?>
 
<div class="container">  
    <div class="row">  
        <div class="col-md-4 offset-md-4">  
            <div class="panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" >  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Email" name="email" type="email">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  

include("db_conection.php");  
  
if(isset($_POST['admin_login']))
{  
    $email=$_POST['email'];  
    $pass=$_POST['pass'];  
  
    $admin_query="select * from admin where email='$email' AND pass='$pass'";  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {           
                    include("db_conection.php");  

                    $d=$email;
                    $query= "select * from admin where email='$d'";
                        $result= mysqli_query($dbcon, $query);
                        // $num_rows=mysqli_num_rows($result);
                  // $row = mysqli_fetch_assoc($result);
                            $row=mysqli_fetch_assoc($result);

        $_SESSION['admin_name']=$row['name'];
        echo "<script>alert('Hello, Mr. ".$_SESSION['name']." You are successfully logged in.');</script>";  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  
<?php include'footer.php'; ?>
