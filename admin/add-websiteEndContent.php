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
                              <h4>Add Website End Content
                                    <a href="./view-websiteEndContent.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <form action="./code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                          <div class="col-md-8 mb-3">
                                                <label for="">Upload Image 1</label>
                                                <input type="file" name="image1" class="form-control"/>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                                <label for="">Upload Image 2</label>
                                                <input type="file" name="image2" class="form-control"/>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                                <label for="">Upload Image 3</label>
                                                <input type="file" name="image3" class="form-control"/>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                                <label for="">Heading</label>
                                                <input type="text" name="heading" class="form-control" required>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                                <label for="">Paragraph</label>
                                                <textarea name="paragraph" class="form-control" required rows="4"></textarea>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                                <button type="submit" name="add_endContent" class="btn btn-primary">Add Content</button>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>

<?php
      include("./includes/footer.php");
      include("./includes/scripts.php");
?>