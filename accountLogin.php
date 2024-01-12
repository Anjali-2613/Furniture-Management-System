<?php
 include "header.php";

 if(isset($_SESSION['auth'])){
      if(!isset($_SESSION['message'])){
            $_SESSION['message'] = "You are already logged in";
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
					<h1 style="font-weight: 700; font-size:30px; font-family:sans-serif">Login</h1>
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
                                 <h4>Login</h4>   
                              </div>
                              <div class="card-body">
                                  
                                    <form action="./login/logincode.php" method="POST">
                                    <div class="form-group mb-3">
                                          <label>Email Id</label>
                                          <input type="email" name="email" required placeholder="Enter Email Address" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <label>Password</label>
                                          <input type="password" name="password" required placeholder="Enter Password" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                          <button  type="submit" name="login_btn" class="btn btn-primary">Login</button>
                                    </div>
                                    </form>
                                    <a href="./accountRegister.php">Create new account</a>
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