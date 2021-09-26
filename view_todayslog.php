<?php include 'header.php'; ?> 
<?php include'checkadminlogin.php'; ?>

<div class="row" id="list">
    <div class="col-md-10 offset-md-1">
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th colspan="8" class=" display-3 ">
                      View Todays Log
                  </th>
              </tr>
              <tr>
                  <th>Date </th>
                  <th>SL </th>
                  <th>Name </th>
                  <th>IP Address</th>
                  <th> MAC Address</th>
                  <th> Current Status</th>
                  <th>Log in time</th>
                  <th>Log out time</th>
                  <th>Remark </th>
                  <th> Details</th>
              </tr>
          </thead>
          <tbody>
              <?php 
              include("db_conection.php");  

                    $d=$date;
                    $query= "SELECT*FROM attendance WHERE emp_date='$d'";
                        $result= mysqli_query($dbcon,$query);
                        $num_rows=mysqli_num_rows($result);
                          // $row = mysqli_fetch_assoc($result);
                         $row=mysqli_fetch_assoc($result);

                    if ($num_rows > 0){
                    while ($row = mysqli_fetch_assoc($result)){
              

             ?>
             <tr>
                 <td><?php echo $row['emp_date']; ?></td>
                 <td><?php echo $row['sl']; ?></td>
                 <td><?php echo $row['emp_name']; ?></td>
                 <td><?php echo $row['emp_ip']; ?></td>
                 <td><?php echo $row['emp_mac']; ?></td>
                 <td><?php echo $row['emp_status']; ?></td>
                 <td><?php echo $row['logintime'].":".$row['loginmin']; ?> Hrs</td>
                 <td><?php echo $row['logouttime'].":".$row['logoutmin']; ?> Hrs</td>
                 <td><?php echo $row['remark']; ?></td>
                 <td></td>


             </tr>

             <?php 
                        }
                    } ?>
          </tbody>
        </table>
    </div>
</div>

 
<?php include 'footer.php'; ?> 
