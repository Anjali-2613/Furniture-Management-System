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
                              <h4>Add Category
                                    <a href="./view-category.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <form action="./code.php" method="POST">
                                    <div class="row">
                                          <div class="col-md-8 mb-3">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                          </div>
                                          <div class="col-md-8 mb-3">
                                                <label for="">Description</label>
                                                <textarea name="description" class="form-control" required rows="4"></textarea>
                                          </div>
                                          <!-- <div class="col-md-12 mb-3">
                                                <label for="">Meta title</label>
                                                <input type="text" name="meta_title" max="191" class="form-control" required>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Meta Description</label>
                                                <textarea name="meta_description" class="form-control" required rows="4"></textarea>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Meta Keyword</label>
                                                <textarea name="meta_keyword" class="form-control" required rows="4"></textarea>
                                          </div> -->
                                          <div class="col-md-6 mb-3">
                                          <label for="">Navbar Status</label>
                                                <input type="checkbox" name="navbar_status" width="70px" height="70px"/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                          <label for="">Status</label>
                                                <input type="checkbox" name="status" width="70px" height="70px"/>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                                <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
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