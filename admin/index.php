<?php
      include("./config/dbcon.php");
      include("./authentication.php");
      include("./includes/header.php");
?>

<div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
      </ol> -->
      <?php include('./message.php'); ?>
      <div class="row">
            <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Total Responses
                        <?php
                              $call = "SELECT * FROM requested";
                              $call_query = mysqli_query($con, $call);

                              if($call_total = mysqli_num_rows($call_query)){
                                    echo "<h4 class = 'mb-0'>$call_total</h4>";
                              }
                              else{
                                    echo "<h4 class = 'mb-0'>0</h4>";
                              }
                        ?>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="view-requested-call.php">View All Responses</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                  <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Products
                  <?php
                        $product_query = "SELECT * FROM product_detail";
                        $product_query_run = mysqli_query($con, $product_query);

                        if($product_total = mysqli_num_rows($product_query_run)){
                              echo "<h4 class = 'mb-0'>$product_total</h4>";
                        }
                        else{
                              echo "<h4 class = 'mb-0'>0</h4>";
                        }
                        ?>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="view-product.php">View All Products</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                  <div class="card bg-success text-white mb-4">
                  <div class="card-body">Users
                  <?php
                        $user_query = "SELECT * FROM users";
                        $user_query_run = mysqli_query($con, $user_query);

                        if($user_total = mysqli_num_rows($user_query_run)){
                              echo "<h4 class = 'mb-0'>$user_total</h4>";
                        }
                        else{
                              echo "<h4 class = 'mb-0'>0</h4>";
                        }
                        ?>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="view-register.php">View All Users</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                  <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Feedback
                  <?php      
                        $feedback_query = "SELECT * FROM feedback";
                        $feedback_query_run = mysqli_query($con, $feedback_query);

                        if($feedback_total = mysqli_num_rows($feedback_query_run)){
                              echo "<h4 class = 'mb-0'>$feedback_total</h4>";
                        }
                        else{
                              echo "<h4 class = 'mb-0'>0</h4>";
                        }
                        ?>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="£">View All feedbacks</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
                  </div>
            </div>
      </div>
</div>

<?php
      include("./includes/footer.php");
      include("./includes/scripts.php");
?>