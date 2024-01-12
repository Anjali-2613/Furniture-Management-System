<?php

include "header.php";
  if(!isset($_SESSION['auth'])){
    if(!isset($_SESSION['message'])){
          $_SESSION['message'] = "Register first to give feedback";
    }
    header("Location:./accountRegister.php");
    exit(0);
  }

// Testimonials
if(isset($_POST['submit'])){

  $testimonial_image = $_FILES['image']['name'];
  $testimonial_image_temp = $_FILES['image']['tmp_name'];
  $testimonial_image_folder = "contactUsImages/".$testimonial_image;

  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $checkemail = "SELECT email FROM feedback WHERE email = '$email'";
  $checkemail_run = mysqli_query($con, $checkemail);

  if(mysqli_num_rows($checkemail_run) > 0){
        // Email already exists
    $_SESSION['message'] = "Feedback already exists";
    header("location:../contact.php");
    exit(0);
  }
  else{

    $insert = "SELECT * FROM users WHERE email = $email";
    $insert_query = mysqli_query($con, $insert);

    
      $query = "INSERT INTO `feedback`(`image`, `name`, `email`, `feedback`) VALUES ('$testimonial_image','$name','$email','$feedback')";
    
      $run = mysqli_query($con, $query);
    
      if($run){
            move_uploaded_file($testimonial_image_temp, $testimonial_image_folder);
            $_SESSION['message'] = "Your feedback is submitted successfully";
            header('location:index.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Internal Error!";
      } 
  }
}
?>
	
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1 style="font-weight: 700; font-size:30px; font-family:sans-serif">Contact Us</h1>
				</div>
			</div>
			<div class="col-lg-7">
				
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->  


		<!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-7 pb-4">
            <?php include('./admin/message.php'); ?>
              <form action="./contact.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  
                  <div class="col-6">
                    <div class="form-group">
                      <label for="image" style="font-size:15px; font-weight:300;">Upload Your Photo</label>
                      <input type="file" class="form-control" name="image" style="height: 38px;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name" style="font-size:15px; font-weight:300;">Name</label>
                      <input type="text" name = "name" class="form-control" style="height: 38px;">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email" style="font-size:15px; font-weight:300;">Email address</label>
                      <input type="email" class="form-control" name="email" style="height: 38px;">
                    </div>
                  <div class="col-12">
                    <div class="form-group mb-3">
                      <label for="feedback" style="font-size:15px; font-weight:300;">Feedback</label>
                      <textarea name="feedback" class="form-control"  cols="20" rows="5" style="height: 38px;"></textarea>
                    </div>
                  </div>
                </div> 
                <div class="row"> 
                  <div class="col-6">
                    <button type="submit" name="submit" class="btn btn-primary-hover-outline">Send Message</button>
                  </div>
                </div>  
              </form>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form -->

<?php

include "footer.php";

?>