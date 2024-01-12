<?php

      include "header.php";

      if(isset($_SESSION['auth'])){
            if(!isset($_SESSION['message'])){
                  $_SESSION['message'] = "You are already registered";
            }
            header("Location:index.php");
            exit(0);
       }
?>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1 style="font-weight: 700; font-size:30px; font-family:sans-serif">Register</h1>
				</div>
			</div>
			<div class="col-lg-7">
				
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
<div class="py-5">
      <div class="container">
            <div class="row justify-content-center">
                  <div class="col-md-5">
                        <?php include('./login/message.php'); ?>
                        <div class="card">
                              <div class="card-header">
                                 <h4>Register</h4>   
                              </div>
                              <div class="card-body">
                              <form action="./login/registercode.php" method="POST">
                                    <div class="form-group mb-3">
                                          <label>First Name</label>
                                          <input required type="text" name="fname" placeholder="first name" name="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Last Name</label>
                                          <input type="text" name="lname" placeholder="last name" name="" class="form-control">
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
                              <a href="./accountLogin.php">Already have an account ?</a>    
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>
<?php

include "footer.php";

?>