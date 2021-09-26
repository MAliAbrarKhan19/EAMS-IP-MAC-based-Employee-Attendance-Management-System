
<?php 
if (empty($_SESSION['admin_name'])) {
    // Admin loged in check
    header("Location: admin_login.php");
}
 ?>

<div class="row p-3">
    <div class="border-start border-info border-4 col-md-10 offset-md-1 p-2">
        <p class="text-primary h4">Welcome to </p>
        <h1 class="display-1 text-primary  ">EAMS Admin Panel</h1>
    </div>
</div>