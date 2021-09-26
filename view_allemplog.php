<?php include 'header.php'; ?> 
<?php include'checkadminlogin.php'; ?>

<div class="row">
    <div class="col-md-10 offset-md-1">
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th colspan="8">
                      Employee Lists
                  </th>
              </tr>
              <tr>
                  <th>Name </th>
                  <th>Designation</th>
                  <th>E-mail</th>
                  <th>Password</th>
                  <th>IP Address</th>
                  <th> MAC Address</th>
                  <th>Log in time</th>
                  <th>Log out time</th>
              </tr>
          </thead>
          <tbody>
              <?php 
              include("db_conection.php");  

                    $d=$email;
                    $query= "select * from employee";
                        $result= mysqli_query($dbcon, $query);
                        $num_rows=mysqli_num_rows($result);
                          // $row = mysqli_fetch_assoc($result);
                            $row=mysqli_fetch_assoc($result);

                    if ($num_rows > 0){
                    while ($row = mysqli_fetch_assoc($result)){
              

             ?>
             <tr>
                 <td><?php echo $row['emp_name']; ?></td>
                 <td><?php echo $row['emp_designation']; ?></td>
                 <td><?php echo $row['emp_email']; ?></td>
                 <td><?php echo $row['emp_pass']; ?></td>
                 <td><?php echo $row['emp_ip']; ?></td>
                 <td><?php echo $row['emp_mac']; ?></td>
                 <td><?php echo $row['emp_logintime']; ?>:00 Hrs</td>
                 <td><?php echo $row['emp_logouttime']; ?>:00 Hrs</td>

             </tr>

             <?php 
                        }
                    } ?>
          </tbody>
        </table>
    </div>
</div>

 
<?php include 'footer.php'; ?> 
