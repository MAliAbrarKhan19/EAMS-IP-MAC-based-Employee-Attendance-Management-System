<?php include 'header.php'; ?> 
<?php 
if (empty($_SESSION['admin_name'])) {
    // Admin loged in check
    header("Location: admin_login.php");
}
 ?>

<div class="row">
    <div class="col-md-10 offset-md-1">
        
    </div>
</div>

 
<?php include 'footer.php'; ?> 
