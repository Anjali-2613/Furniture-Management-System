<?php
    session_start();
    include("./includes/header.php");
    include("./includes/navbar.php")
?>

<div class="py-5">
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-5">


                        <?php include('message.php'); ?>
                        <div class="card">
                              <div class="card-header">
                                 <h4>Register</h4>   
                              </div>
                              <div class="card-body">
                              <form action="./registercode.php" method="POST">
                                    <div class="form-group mb-3">
                                          <label>First Name</label>
                                          <input required type="text" name="fname" placeholder="first name" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Last Name</label>
                                          <input required type="text" name="lname" placeholder="last name" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Email Id</label>
                                          <input required type="email" name="email" placeholder="Email Address" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Password</label>
                                          <input required type="password" name="password" placeholder="Password" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Confirm Password</label>
                                          <input required type="password" name="cpassword" placeholder="Confirm Password" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <button required type= "submit" name="register_btn" class="btn btn-primary">Register</button>
                                    </div>
                              </form>      
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<?php
      include("./includes/footer.php");
?>