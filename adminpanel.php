<?php include 'header.php'; ?> 
<?php include'checkadminlogin.php'; ?>


<div class="row p-1 ">
    <div class="col-md-3 offset-md-2 p-1"> <a href="registration.php" class="btn btn-outline-info btn-lg">Register an Employee</a> </div>
    <div class="col-md-3 p-1"><a href="reg_admin.php" class="btn btn-outline-danger btn-lg">Register an Admin</a></div>
    <div class="col-md-3 p-1"><a href="view_users.php" class="btn btn-outline-info btn-lg">View Employee List</a></div>
</div>
<div class="row p-1">
    <div class="offset-md-2 col-md-4 p-1"> <a href="view_allemplog.php" class="btn btn-outline-success btn-lg">View All Employee Log </a> </div>
	
    <div class="col-md-4 p-1"> <a href="view_users.php" class="btn btn-outline-primary btn-lg">View Today's Log </a> </div>
</div> 
<?php include 'footer.php'; ?> 
