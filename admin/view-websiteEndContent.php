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
                              <h4>View Website End Content
                                    <a href="./add-websiteEndContent.php" class="btn btn-primary float-end">Add Content</a>
                              </h4>
                        </div>
                        <div class="card-body">

                        <div class="table-responsive">
                              <table class="table table table-bordered table-stripe">
                                    <thead>
                                          <tr>
                                                <th>Id</th>
                                                <th>Image 1</th>
                                                <th>Image 2</th>
                                                <th>Image 3</th>
                                                <th>Heading</th>
                                                <th>Paragraph</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $endContent = "SELECT * FROM we_help_content";
                                          $endContent_query = mysqli_query($con, $endContent);

                                          if(mysqli_num_rows($endContent_query) > 0){
                                                foreach($endContent_query as $item){
                                                      ?>
                                    
                                                      <tr>
                                                            <td> <?= $item['id']; ?> </td>
                                                            <td> <?= $item['image1']; ?> </td>
                                                            <td> <?= $item['image2']; ?> </td>
                                                            <td> <?= $item['image3']; ?> </td>
                                                            <td> <?= $item['heading']; ?> </td>
                                                            <td> <?= $item['paragraph']; ?> </td>
                                                            <td> <a href="./edit-websiteEndContent.php?id= <?= $item['id']; ?>" class="btn btn-success">Edit</a> </td>
                                                            <td>
                                                                  <form action="./code.php" method="POST">
                                                                        <button type="submit" name="delete_endContent" value="<?= $item['id'];?>" class="btn btn-danger">Delete</button>
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