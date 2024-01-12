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
                              <h4>Choose new Product
                                    <a href="./view-product.php" class="btn btn-danger float-end">BACK</a>
                              </h4>
                        </div>
                        <div class="card-body">
                              <?php
                                    if(isset($_GET['product_id']))
                                    {
                                          $product_id = $_GET['product_id'];
                                          $product_query = "SELECT * FROM product_detail WHERE product_id = '$product_id' LIMIT 1" ;

                                          $product_run = mysqli_query($con, $product_query);
                                          if(mysqli_num_rows($product_run) > 0)
                                          {
                                               $row = mysqli_fetch_array($product_run);

                                               ?>
                                          
                                                <form action="./code.php" method="POST" enctype="multipart/form-data">
                                                      <input type="hidden" name="product_id" value="<?= $row['product_id']; ?>">
                                                      <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Name</label>
                                                                  <input type="text" name="name" value="<?= $row['product_name']; ?>" class="form-control" required />
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Category</label>
                                                                  <select name="category" required class="form-control">
                                                                        <option><?= $row['category']; ?></option>
                                                                        <option>Almirah</option>
                                                                        <option>Wall Door</option>
                                                                  </select>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Choose new product image 1</label>
                                                                  <input type="text" value="<?= $row['product_image1']; ?>" name="old_image1">
                                                                  <input type="file" class="form-control"  name="product_image1">   
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Choose new product image 2</label>
                                                                  <input type="text" value="<?= $row['product_image2']; ?>" name="old_image2">
                                                                  <input type="file" class="form-control"  name="product_image2">
                                                                  
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Choose new product image 3</label>
                                                                  <input type="text" value="<?= $row['product_image3']; ?>" name="old_image3">
                                                                  <input type="file" class="form-control"  name="product_image3">
                                                                  
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Choose new product image 4</label>
                                                                  <input type="text" value="<?= $row['product_image4']; ?>" name="old_image4">
                                                                  <input type="file" class="form-control" name="product_image4">
                                                                  
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">New Price</label>
                                                                  <input type="currency" class="form-control" value="<?= $row['new_price']; ?>" min="10000" max="150000" name="new_price" >
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Old Price</label>
                                                                  <input type="currency" class="form-control" value="<?= $row['old_price']; ?>" min="10000" max="150000" name="old_price">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Availability</label>
                                                                  <select name="availability" required class="form-control">
                                                                        <option><?= $row['availability']; ?></option>
                                                                        <option>In Stock</option>
                                                                        <option>Out of Stock</option>
                                                                  </select>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Available Quantity</label>
                                                                  <input type="number" name="quantity" min="0" value="<?= $row['quantity']; ?>" class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Color</label>
                                                                  <input type="text" name="color" class="form-control" value="<?= $row['color']; ?>" required />
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Recommended Uses</label>
                                                                  <input type="text" name="recommended_uses" class="form-control" value="<?= $row['recommended_uses']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Special Feature</label>
                                                                  <input type="text" name="special_feature" class="form-control" value="<?= $row['special_feature']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Width</label>
                                                                  <input type="number" name="width" min="0" max="200"  step="0.01" value="<?= $row['width']; ?>" class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Height</label>
                                                                  <input type="number" name="height" min="0" max="200"  step="0.01" value="<?= $row['height']; ?>" class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Depth</label>
                                                                  <input type="number" name="depth" min="0" max="200"  step="0.01" value="<?= $row['depth']; ?>" class="form-control" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Components</label>
                                                                  <input type="text" name="components"  class="form-control" value="<?= $row['components']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Material</label>
                                                                  <input type="text" name="material" class="form-control" value="<?= $row['material']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Number of Doors</label>
                                                                  <input type="number" name="doors" class="form-control" value="<?= $row['doors']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                  <label for="">Number of Drawers</label>
                                                                  <input type="number" name="drawers" class="form-control" value="<?= $row['drawers']; ?>" required/>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                  <button type="submit" name="update_product" class="btn btn-primary">Update Product</button>
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