 <?php
      include "header.php";
      

 ?>
 <!-- Start Hero Section -->
      <div class="hero">
            <div class="container">
                  <div class="row justify-content-between" class="object-fit-cover">
                  <?php 
                        $query = "SELECT * FROM intro_content ORDER BY id DESC LIMIT 1";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0){

                              foreach($query_run as $item){

                                    $heading = $item['heading'];
                                    $paragraph = $item['paragraph'];
                                    $image = $item['image'];

                    echo"<div class='col-lg-5'>
                              <div class='intro-excerpt'>
                                    <h2 style='color: #ffff; size:50px; font-family:sans-serif' class = 'object-fit-cover' >$heading</h2>
                                    <p class='mb-4' style='font-size: 120%; font-family:sans-serif' class = 'object-fit-cover'>$paragraph</p>
                                    <p><a href='./shop.php' class='btn btn-secondary me-2'>Shop Now</a></p>
                              </div>
                        </div>
                        <div class='col-lg-7'>
                              <div class='hero-img-wrap'>
                                    <img src='./admin/product_images/$image' style='height: 430px; width:100%' class = 'object-fit-cover border rounded'>
                              </div>
                        </div>";
                              }
                        }
                  ?>      
                  </div>
            </div>
      </div>
      <!-- End Hero Section -->

      <!-- Start Product Section -->
      <div class="product-section">
      <div class="container">
            <div class="row">
            <?php
			
			$query = "SELECT * FROM product_content";
			$query_run = mysqli_query($con, $query);
		
			if(mysqli_num_rows($query_run) > 0){
				
				foreach($query_run as $item){

					$heading = $item['heading'];
					$paragraph = $item['paragraph'];
                  //  <!-- Start Column 1 -->
                 echo  "<div class='col-md-12 col-lg-3 mb-5 mb-lg-0'>
                        <h2 class='mb-4 section-title'>$heading</h2>
                        <p class='mb-4'>$paragraph</p>
                        <p><a href='./shop.php' class='btn'>Explore</a></p>
                  </div> ";
                  // <!-- End Column 1 -->
                        }
                  }
                  ?>
            <?php
			
			$fetch_query = "SELECT * FROM product_detail ORDER BY product_id ASC LIMIT 3";
			$fetch_run = mysqli_query($con, $fetch_query);
		
			if(mysqli_num_rows($fetch_run) > 0){
				
				foreach($fetch_run as $item){

					$product_id = $item['product_id'];
					$product_name = $item['product_name'];
					$product_image1 = $item['product_image1'];
					$new_price = $item['new_price'];
					
						
					echo "<div class='col-12 col-md-4 col-lg-3 mb-5'>
					<a class='product-item' href = './product_detail.php?product_id=$product_id'>
					
					<img src='./admin/product_images/$product_image1' alt = '$product_name' class='img-fluid product-thumbnail' style='font-family: sans-serif;'>

					<h3 class='product-title' style='font-family: sans-serif;'>$product_name</h3>
					<strong class='product-price' style='font-family: sans-serif;'>₹$new_price</strong>
						
						<span class='icon-cross' style='border-radius: 30px; width: 120px; height:35px;'><span style = 'display : inline-block; line-height: 1.5rem; font-family: Inter, sans-serif; font-weight: 600; color: white; vertical-align:middle; text-align:center;  font-size:1rem;' >Interested!</span></span>
					</a>
				</div>" ;
			}
		} 
		?>
                  <!-- Start Column 1 -->
                  <!-- <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                        <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                        <p class="mb-4">One part design and one part security, the Metal Wardrobe is a perfect mix of both. Considering storage volumes through functional yet elegant designs, each of our wardrobes is thoughtfully tailored to make the most of your space. </p>
                        <p><a href="./shop.php" class="btn">Explore</a></p>
                  </div>  -->
                  <!-- End Column 1 -->


                  
                  <!-- Start Column 2 -->
                  <!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item">
                              <img style="max-width:100%; height:auto;" src="./images/image.jpg" class="img-fluid product-thumbnail">
                              <h3 class="product-title">2-Door Almirah</h3>
                              <strong class="product-price">₹20000</strong> -->

                              <!-- <span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span> -->
                        <!-- </a>
                  </div>  -->
                  <!-- End Column 2 -->

                  <!-- Start Column 3 -->
                  <!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item">
                              <img style="max-width:100%; height:auto;" src="images/product-2.jpg" class="img-fluid product-thumbnail">
                              <h3 class="product-title">Sliding Door Almirah</h3>
                              <strong class="product-price">₹30000</strong> -->

                              <!-- <span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span> -->
                        <!-- </a>
                  </div> -->
                  <!-- End Column 3 -->

                  <!-- Start Column 4 -->
                  <!-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item">
                              <img style="max-width:100%; height:auto;" src="./images/product.jpg" class="img-fluid product-thumbnail">
                              <h3 class="product-title">3-Door Almirah</h3>
                              <strong class="product-price">₹35000</strong> -->

                              <!-- <span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span> -->
                        <!-- </a>
                  </div> -->
                  <!-- End Column 4 -->
                       
                        </div>
      </div>
      </div>
      <!-- End Product Section -->

      <!-- Start Why Choose Us Section -->
      <div class="why-choose-section">
      <div class="container">
            <div class="row justify-content-between">
                  <div class="col-lg-6">
                  <?php 
                        $query = "SELECT * FROM service_content ORDER BY id DESC LIMIT 1";
                        $q_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($q_run) > 0){
                              foreach($q_run as $item){

                                    $id = $item['id'];
                                    $heading = $item['heading'];
                                    $paragraph = $item['paragraph'];
                                    $image = $item['image'];

                       echo "<h2 class='section-title' style = 'font-family: sans-serif;'>$heading</h2>
                        <p style = 'font-family: sans-serif;'>$paragraph</p>";
                              
                        ?>

                        <div class="row my-5">
                              <div class="col-6 col-md-6">
                                    <div class="feature">
                                       <div class="icon">   
                                          <img src="./images/icons8-delivery.gif" alt="Image" class="imf-fluid">
                                       </div>   
                                          <h3 style="font-family: sans-serif;">SAFE &amp; SWIFT DELIVERY</h3>
                                          <p style="font-family: sans-serif;">Available in selected cities of Rajasthan only.</p>
                                    </div>
                              </div>

                              <div class="col-6 col-md-6">
                                    <div class="feature">
                                          <div class="icon">
                                                <img src="./images/icons8-installation.gif" alt="Image" class="imf-fluid">
                                          </div>
                                          <h3 style="font-family: sans-serif;">FREE INSTALLATION</h3>
                                          <p style="font-family: sans-serif;">We assemble the product, and clear away the packaging.</p>
                                    </div>
                              </div>

                              <div class="col-6 col-md-6">
                                    <div class="feature">
                                          <div class="icon">
                                                <img src="./images/icons8-price.gif" alt="Image" class="imf-fluid">
                                          </div>
                                          <h3 style="font-family: sans-serif;">PRICING YOU CAN TRUST</h3>
                                          <p style="font-family: sans-serif;">Assured quality at budget-friendly cost.</p>
                                    </div>
                              </div>

                              <div class="col-6 col-md-6">
                                    <div class="feature">
                                          <div class="icon">
                                                <img src="./images/icons8-payment.gif" alt="Image" class="imf-fluid">
                                          </div>
                                          <h3 style="font-family: sans-serif;">DELIVERY CHARGES</h3>
                                          <p style="font-family: sans-serif;">Delivery charges are applicable.</p>
                                    </div>
                              </div>
                              
                        </div>
                  </div>

                  <div class="col-lg-5">
                        <div class="img-wrap">
                              <?php
                                    echo "<img style='max-width:100%; height:auto;' src='./admin/product_images/$image' alt='Image' class='img-fluid object-fit-cover'>";
                                    }
                              }
                              ?>
                        </div>
                  </div>

            </div>
      </div>
      </div>
      <!-- End Why Choose Us Section -->

      <!-- Start We Help Section -->
      <div class="we-help-section">
      <div class="container">
            <div class="row justify-content-between">
                  <?php 
                        $query = "SELECT * FROM we_help_content ORDER BY id DESC LIMIT 1";
                        $q_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($q_run) > 0){
                              foreach($q_run as $item){

                                    $id = $item['id'];
                                    $heading = $item['heading'];
                                    $paragraph = $item['paragraph'];
                                    $image1 = $item['image1'];
                                    $image2 = $item['image2'];
                                    $image3 = $item['image3'];


                  echo "<div class='col-lg-7 mb-5 mb-lg-0'>
                        <div class='imgs-grid'>
                              <div class='grid grid-1'><img style='max-width:100%; height:auto;' class = 'object-fit-cover' src='./admin/product_images/$image1'></div>
                              <div class='grid grid-2'><img style='max-width:100%; height:auto;' class = 'object-fit-cover' src='./admin/product_images/$image2'></div>
                              <div class='grid grid-3'><img style='max-width:100%; height:auto;' class = 'object-fit-cover' src='./admin/product_images/$image3'></div>
                        </div>
                  </div>
                  <div class='col-lg-5 ps-lg-5'>
                        <h2 class='section-title mb-4' style = 'font-family: sans-serif;'>$heading</h2>
                        <p style = 'font-family: sans-serif;'>$paragraph</p>

                        <ul class='list-unstyled custom-list my-4'>
                              <li style = 'font-family: sans-serif;'>2/3/4 DOOR WARDROBES</li>
                              <li style = 'font-family: sans-serif;'>SLIDING WARDROBES</li>
                              <li style = 'font-family: sans-serif;'>WALL MOUNTED WARDROBES</li>
                                
                        </ul>";
                        // <!-- <p><a herf="shop.php" class="btn">Explore</a></p> -->
                               
                  }
                              
            }
                        ?>
                  </div>
            </div>
      </div>
      </div>
      <!-- End We Help Section -->

      <!-- Start Popular Product -->
      <!-- <div class="popular-product">
      <div class="container">
            <div class="row">

                  <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product-item-sm d-flex">
                              <div class="thumbnail">
                                    <img src="images/product-1.png" alt="Image" class="img-fluid">
                              </div>
                              <div class="pt-3">
                                    <h3>Nordic Chair</h3>
                                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                                    <p><a href="#">Read More</a></p>
                              </div>
                        </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product-item-sm d-flex">
                              <div class="thumbnail">
                                    <img src="images/product-2.png" alt="Image" class="img-fluid">
                              </div>
                              <div class="pt-3">
                                    <h3>Kruzo Aero Chair</h3>
                                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                                    <p><a href="#">Read More</a></p>
                              </div>
                        </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product-item-sm d-flex">
                              <div class="thumbnail">
                                    <img src="images/product-3.png" alt="Image" class="img-fluid">
                              </div>
                              <div class="pt-3">
                                    <h3>Ergonomic Chair</h3>
                                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                                    <p><a href="#">Read More</a></p>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
      </div> -->
      <!-- End Popular Product -->

      <!-- Start Blog Section -->
      <!-- <div class="blog-section">
      <div class="container">
            <div class="row mb-5">
                  <div class="col-md-6">
                        <h2 class="section-title">Recent Blog</h2>
                  </div>
                  <div class="col-md-6 text-start text-md-end">
                        <a href="#" class="more">View All Posts</a>
                  </div>
            </div>

            <div class="row">

                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                        <div class="post-entry">
                              <a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
                              <div class="post-content-entry">
                                    <h3><a href="#">First Time Home Owner Ideas</a></h3>
                                    <div class="meta">
                                          <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                        <div class="post-entry">
                              <a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
                              <div class="post-content-entry">
                                    <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                                    <div class="meta">
                                          <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                        <div class="post-entry">
                              <a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
                              <div class="post-content-entry">
                                    <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                                    <div class="meta">
                                          <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                                    </div>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
      </div> -->
      <!-- End Blog Section -->
      

      <!-- Start Testimonial Slider -->
<div class="testimonial-section">
      <div class="container">
            <div class="row">
                  <div class="col-lg-7 mx-auto text-center">
                        <h3 class="section-title" style="font-family: sans-serif;">Testimonials</h3>
                  </div>
            </div>

            <div class="row justify-content-center">
                  <div class="col-lg-12">
                        <div class="testimonial-slider-wrap text-center">

                              <div id="testimonial-nav">
                                    <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                                    <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                              </div>

                              <div class="testimonial-slider">
                                     <?php
                                          $fetch_query = "SELECT * FROM feedback";
                                          $fetch_run = mysqli_query($con, $fetch_query);

                                           if(mysqli_num_rows($fetch_run) > 0){

                                                foreach($fetch_run as $item){
                  
                                                      $image = $item['image'];
                                                      $name = $item['name'];
                                                      $feedback = $item['feedback'];

                                   echo "<div class='item'>
                                          <div class='row justify-content-center'>
                                                <div class='col-lg-8 mx-auto'>
                                                     <div class='testimonial-block text-center'>
                                                            <blockquote class='mb-1'>
                                                                  <p style = 'font-family: sans-serif;'>$feedback</p>
                                                            </blockquote>
                                                            <div class='author-info'>
                                                                  <div class='author-pic'>
                                                                        <img style='max-width:10rem; height:auto;' src='./ContactUsImages/$image' class='img-fluid'>
                                                                  </div>
                                                                  <h4 class='font-weight-bold' style = 'font-size:20px; font-weight : 200; font-family: sans-serif;'>$name</h4>
                                                            </div>
                                                            
                                                      </div>
                                                </div>
                                          </div>
                                    </div>";
                                                                  }
                                                            }     
                                                      ?>  
                                    <!-- END item -->
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!-- End Testimonial Slider -->

<?php

      include "footer.php";

?>      