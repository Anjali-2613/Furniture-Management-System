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
                              <h4>View Product
                                    <a href="./add-product.php" class="btn btn-primary float-end">Add Product</a>
                              </h4>
                        </div>
                        <div class="card-body">

                        <div class="table-responsive">
                              <table class="table table table-bordered table-stripe">
                                    <thead>
                                          <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Product Image 1</th>
                                                <th>Product Image 2</th>
                                                <th>Product Image 3</th>
                                                <th>Product Image 4</th>
                                                <th>Old Price</th>
                                                <th>New Price</th>
                                                <th>Availability</th>
                                                <th>Quantity</th>
                                                <th>Color</th>
                                                <th>Recommended Uses</th>
                                                <th>Special Feature</th>
                                                <th>Width</th>
                                                <th>Height</th>
                                                <th>Depth</th>
                                                <th>Components</th>
                                                <th>Material</th>
                                                <th>Number of Doors</th>
                                                <th>Number of Drawers</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $product = "SELECT * FROM product_detail";
                                          $product_query = mysqli_query($con, $product);

                                          if(mysqli_num_rows($product_query) > 0){
                                                foreach($product_query as $item){
                                                      ?>
                                    
                                                      <tr>
                                                            <td> <?= $item['product_id']; ?> </td>
                                                            <td> <?= $item['product_name']; ?> </td>
                                                            <td> <?= $item['category']; ?> </td>
                                                            <td> <?= $item['product_image1']; ?> </td>
                                                            <td> <?= $item['product_image2']; ?> </td>
                                                            <td> <?= $item['product_image3']; ?> </td>
                                                            <td> <?= $item['product_image4']; ?> </td>
                                                            <td>₹<?= $item['old_price']; ?> </td>
                                                            <td>₹<?= $item['new_price']; ?> </td>
                                                            <td> <?= $item['availability']; ?> </td>
                                                            <td> <?= $item['quantity']; ?> </td>
                                                            <td> <?= $item['color']; ?> </td>
                                                            <td> <?= $item['recommended_uses']; ?> </td>
                                                            <td> <?= $item['special_feature']; ?> </td>
                                                            <td> <?= $item['width']; ?> </td>
                                                            <td> <?= $item['height']; ?> </td>
                                                            <td> <?= $item['depth']; ?> </td>
                                                            <td> <?= $item['components']; ?> </td>
                                                            <td> <?= $item['material']; ?> </td>
                                                            <td> <?= $item['doors']; ?> </td>
                                                            <td> <?= $item['drawers']; ?> </td>
                                                            
                                                            <td> <a href="./edit-product.php?product_id=<?= $item['product_id']; ?>" class="btn btn-success">Edit</a> </td>
                                                            <td>
                                                                  <form action="./code.php" method="POST">
                                                                        <button type="submit" name="delete_product" value="<?= $item['product_id'];?>" class="btn btn-danger">Delete</button>
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