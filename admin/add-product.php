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
                              <h4>Add Product
                                    <a href="./view-product.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <form action="./code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                          <div class="col-md-6 mb-3">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Category</label>
                                                <select name="category" required class="form-control">
                                                      <option>--Select Category--</option>
                                                      <option>Almirah</option>
                                                      <option>Wall Door</option>
                                                </select>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Upload product image 1</label>
                                                <input type="file" class="form-control" name="product_image1">
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Upload product image 2</label>
                                                <input type="file" class="form-control" name="product_image2">
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Upload product image 3</label>
                                                <input type="file" class="form-control" name="product_image3">
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Upload product image 4</label>
                                                <input type="file" class="form-control" name="product_image4">
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Old Price</label>
                                                <input type="currency" name="old_price" min="10000" max="150000" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">New Price</label>
                                                <input type="currency" name="new_price" min="100000" max="150000" class="form-control" required>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Availability</label>
                                                <select name="availability" required class="form-control">
                                                      <option>--Select Availability--</option>
                                                      <option>In Stock</option>
                                                      <option>Out Of Stock</option>
                                                </select>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Available Quantity</label>
                                                <input type="number" name="quantity" min="0" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Color</label>
                                                <input type="text" name="color" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Recommended Uses</label>
                                                <input type="text" name="recommended_uses" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Special Feature</label>
                                                <input type="text" name="special_feature" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Width</label>
                                                <input type="number" name="width" min="0" max="200"  step="0.01" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Height</label>
                                                <input type="number" name="height" min="0" max="200" step="0.01"  class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Depth</label>
                                                <input type="number" name="depth" min="0" max="200"  step="0.01" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Components</label>
                                                <input type="text" name="components"  class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Material</label>
                                                <input type="text" name="material" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Number of Doors</label>
                                                <input type="number" name="doors" class="form-control" required/>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label for="">Number of Drawers</label>
                                                <input type="number" name="drawers" class="form-control" required/>
                                          </div>
                                          <div class="col-md-12 mb-3">
                                                <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
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