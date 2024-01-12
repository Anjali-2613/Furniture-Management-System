<?php
     
      include("./authentication.php");
      include("./includes/header.php");
?>

<div class="container-fluid px-4">
<h1 class="mt-5"></h1>
      <div class="row">
            <div class="col-md-12">
                  <?php include('./message.php'); ?>
                  <div class="card">
                        <div class="card-header">
                              <h4>View Requested Calls
                                    <!-- <a href="./add-category.php" class="btn btn-primary float-end">Add Category</a> -->
                              </h4>
                        </div>
                        <div class="card-body">

                        <div class="table-responsive">
                              <table class="table table table-bordered table-stripe">
                                    <thead>
                                          <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile No.</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $call = "SELECT * FROM requested";
                                          $call_query = mysqli_query($con, $call);

                                          if(mysqli_num_rows($call_query) > 0){
                                                foreach($call_query as $item){
                                                      ?>
                                    
                                                      <tr>
                                                            <td> <?= $item['id']; ?> </td>
                                                            <td> <?= $item['name']; ?> </td>
                                                            <td> <?= $item['email']; ?> </td>
                                                            <td> <?= $item['mobile_no']; ?> </td>
                                                            <td> <a href="./edit-requested-call.php?id=<?= $item['id']; ?>" class="btn btn-success">Edit</a> </td>
                                                            <td>
                                                                  <form action="./code.php" method="POST">
                                                                        <button type="submit" name="delete_requested_data" value="<?= $item['id'];?>" class="btn btn-danger">Delete</button>
                                                                  </form>
                                                            </td>
                                                      </tr>
                                                      <?php

                                                }
                                          }
                                          else{
                                                ?>
                                                      <tr>
                                                            <td colspan="5">No Record Found</td>
                                                      </tr>
                                                <?php

                                          }

                                    ?>
                                    </tbody>
                              </table>
                        </div>


                        </div>
                  </div>
            </div>
      </div>
</div>

<?php
      include("./includes/footer.php");
      include("./includes/scripts.php");
?>