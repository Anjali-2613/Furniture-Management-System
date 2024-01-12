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
                              <h4>Edit Website End Content
                                    <a href="./view-websiteEndContent.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <?php
                                    if(isset($_GET['id']))
                                    {
                                          $endContent_id = $_GET['id'];
                                          $endContent = "SELECT * FROM we_help_content WHERE id = '$endContent_id' LIMIT 1" ;

                                          $endContent_query = mysqli_query($con, $endContent);
                                          if(mysqli_num_rows($endContent_query) > 0)
                                          {
                                               $row = mysqli_fetch_array($endContent_query);

                                               ?>
                                          
                                                <form action="./code.php" method="POST" enctype="multipart/form-data">
                                                      <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                      <div class="row">
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Upload New Image 1</label>
                                                                  <input type="text" name="old_image1" value="<?= $row['image1']; ?>"/>
                                                                  <input type="file" name="image1" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Upload New Image 2</label>
                                                                  <input type="text" name="old_image2" value="<?= $row['image2']; ?>"/>
                                                                  <input type="file" name="image2" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Upload New Image 3</label>
                                                                  <input type="text" name="old_image3" value="<?= $row['image3']; ?>"/>
                                                                  <input type="file" name="image3" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Heading</label>
                                                                  <input type="text" name="heading" value="<?= $row['heading']; ?>" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Paragraph</label>
                                                                  <textarea name="paragraph" class="form-control" required rows="4"><?= $row['paragraph']; ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                  <button type="submit" name="edit_EndContent" class="btn btn-primary">Add Content</button>
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