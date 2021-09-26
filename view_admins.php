<?php include 'header.php'; ?> 
<?php include'checkadminlogin.php'; ?>

<div class="row">
    <div class="col-md-10 offset-md-1">
        <table class="table table-bordered" id="list">
          <thead>
              <tr>
                  <th colspan="8" class="display-2">
                      Administrators Lists
                  </th>
              </tr>
              <tr>
                  <th>ID </th>
                  <th>Name </th>
                  <th>E-mail</th>
                  
              </tr>
          </thead>
          <tbody>
              <?php 
              include("db_conection.php");  

                    $d=$email;
                    $query= "SELECT*FROM admin";
                        $result= mysqli_query($dbcon, $query);
                        $num_rows=mysqli_num_rows($result);
                          // $row = mysqli_fetch_assoc($result);
                            $row=mysqli_fetch_assoc($result);

                    if ($num_rows>0){
                    while ($row = mysqli_fetch_assoc($result)){
              

             ?>
             <tr>
                 <td><?php echo $row['id']; ?></td>
                 <td><?php echo $row['name']; ?></td>
                 <td><?php echo $row['email']; ?></td>
                 
             </tr>

             <?php 
                        }
                    } ?>
          </tbody>
        </table>
    </div>
</div>

 
<?php include 'footer.php'; ?> 
