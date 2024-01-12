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
                              <h4>Edit Website Intro Content
                                    <a href="./view-websiteIntro.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <?php
                                    if(isset($_GET['id']))
                                    {
                                          $intro_id = $_GET['id'];
                                          $intro_query = "SELECT * FROM intro_content WHERE id = '$intro_id'" ;

                                          $intro_run = mysqli_query($con, $intro_query);
                                          if(mysqli_num_rows($intro_run) > 0)
                                          {
                                               $row = mysqli_fetch_array($intro_run);

                                               ?>
                                          
                                                <form action="./code.php" method="POST" enctype="multipart/form-data">
                                                      <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                      <div class="row">
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Upload New Intro Image</label>
                                                                  <input type="text" value="<?= $row['image']; ?>" name="old_image">
                                                                  <input type="file" name="intro_image" value="<?= $row['image']; ?>" class="form-control"/>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Heading</label>
                                                                  <input type="text" name="heading" value="<?= $row['heading']; ?>" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-8 mb-3">
                                                                  <label for="">Paragraph</label>
                                                                  <textarea name="paragraph" class="form-control"  required rows="4"><?= $row['paragraph']; ?></textarea>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                  <button type="submit" name="edit_intro" class="btn btn-primary">Edit Content</button>
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