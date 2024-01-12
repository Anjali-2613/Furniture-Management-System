<?php
      include('../admin/config/dbcon.php');
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
                              <h4>Edit Requested Calls
                                    <a href="./view-requested-call.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <?php
                                    if(isset($_GET['id']))
                                    {
                                          $call_id = $_GET['id'];
                                          $call_query = "SELECT * FROM requested WHERE id = '$call_id' LIMIT 1" ;

                                          $call_run = mysqli_query($con, $call_query);
                                          if(mysqli_num_rows($call_run) > 0)
                                          {
                                               $row = mysqli_fetch_array($call_run);

                                               ?>
                                          
                                                <form action="./code.php" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                      <div class="row">
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Name</label>
                                                                  <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Email</label>
                                                                  <input type="email" name="email" value="<?= $row['email']; ?>" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Mobile Number</label>
                                                                  <input type="tel" name="mobile_number" value="<?= $row['mobile_no']; ?>" class="form-control" required>
                                                            </div> 
                                                            <div class="col-md-12 mb-3">
                                                                  <button type="submit" name="update_requested_data" class="btn btn-primary">Update Feedback</button>
                                                            </div> 
                                                      </div>
                                                </form>

                              
                                                <?php
                                                
                                          }
                                          else
                                          {
                                                ?>
                                                      <h4>No Record Found</h4>
                                                <?php
                                          }
                                    }
                              ?>
                        </div> 
                  </div>         
            </div>
      </div>
</div>

<?php
      include("./includes/footer.php");
      include("./includes/scripts.php");
?>