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
                              <h4>View Category
                                    <a href="./add-category.php" class="btn btn-primary float-end">Add Category</a>
                              </h4>
                        </div>
                        <div class="card-body">

                        <div class="table-responsive">
                              <table class="table table table-bordered table-stripe">
                                    <thead>
                                          <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $category = "SELECT * FROM categories";
                                          $category_run = mysqli_query($con, $category);

                                          if(mysqli_num_rows($category_run) > 0){
                                                foreach($category_run as $item){
                                                      ?>
                                    
                                                      <tr>
                                                            <td> <?= $item['id']; ?> </td>
                                                            <td> <?= $item['name']; ?> </td>
                                                            <td> <?= $item['description']; ?> </td>
                                                            <td> <?php if($item['status'] == '1'){echo 'Hidden';} else{echo 'Visible';} ?>
                                                            </td>
                                                            <td> <a href="./edit-category.php?id=<?= $item['id']; ?>" class="btn btn-success">Edit</a> </td>
                                                            <td>
                                                                  <form action="./code.php" method="POST">
                                                                        <button type="submit" name="delete_category" value="<?= $item['id'];?>" class="btn btn-danger">Delete</button>
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