
<?php 
if (empty($_SESSION['admin_name'])) {
    // Admin loged in check
    header("Location: admin_login.php");
}
 ?>

<div class="row p-3">
    <div class="col-md-10 offset-md-1 p-2">
        <p class="text-primary">Welcome to </p>
        <vr><h1 class="display-1 text-primary">EAMS Admin Panel</h1>
    </div>
</div>