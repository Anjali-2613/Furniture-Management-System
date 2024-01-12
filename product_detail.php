<?php
      include "header.php";
      error_reporting(0);
 ?>

<style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

      *{
            box-sizing: border-box;
            padding: 0;
            margin:0;
            font-family: "Inter", sans-serif;
      }
      body{
            line-height: 1.5;
      }
      .card-wrapper{
            max-width: 1100px;
            margin: 0 auto;
      }
      img{
            width: 100%;
            display: block;
      }
      .img-display{
            overflow: hidden;
      }
      .img-showcase{
            display: flex;
            width: 100%;
            transition: all 0.5 ease;
      }
      .img-showcase img{
            min-width: 100%;
      }
      .img-select{
            display: flex;
      }
      .img-item{
            margin: 0.3rem;
      }
      .img-item:nth-child(1),
      .img-item:nth-child(2),
      .img-item:nth-child(3){
            margin-right: 0;
      }
      .img-item-hover{
            opacity:0.8;
      }
      .product-content{
            padding:2rem 1rem;
      }
      .product-title{
             font-size: 2rem;
             text-transform: capitalize;
             font-weight: 700;
             position: relative;
             color: #12263a;
             margin: 1rem 0;
      }
      .product-title::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            width: 80px;
            background: #12263a;
      }
      .product-link{
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
      }
      .product-link:hover{
            opacity: 0.9;
      }
      .product-rating{
            color:#ffc107;

      }
      .product-rating span{
            font-weight: 600;
            color: #252525;
      }
      .product-price{
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
            color: #000;
      }
      .product-price span{
            font-weight: 400;
      }
      .last-price span{
            color: #f64749;
            text-decoration: line-through;
      }
      .new-price span{
            color: #256eff;
      }
      .product-detail ul h2{
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
      }
      .product-detail p{
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
      }
      .product-detail ul{
            margin: 1rem 0;
            font-size: 0.9rem;
      }
      .product-detail ul li{
            margin: 0;
            list-style:square;
            color: #000;
            /* background: url(./images/icons8-check-96.png) left center no-repeat ;
            background-size: 22px; */
            padding-left: 0.5rem;
            margin: 0.6rem 0;
            font-weight: 900;
            font-size: 15px;
            opacity: 0.9;
            padding-right: 5px;
      }
      .product-detail ul li span{
            font-weight: 500;
            font-size: 15px;
            color: #000;
      }
      .purchase-info{
            margin: 1.5rem 0;
      }
      .purchase-info input,
      .purchase-info .btn{
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.5rem;
            margin-bottom: 1rem;
      }
      .purchase-info input{
            width: 60px;
      }
      .purchase-info .btn{
            cursor: pointer;
            color: #fff;
      }
      .purchase-info .btn:first-of-type{
            background:#256eff;
      }
      .purchase-info .btn:last-of-type{
            background: #FA7510;
      }
      .purchase-info .btn:hover{
            opacity: 0.9;
      }
      .social-links{
            display: flex;
            align-items: center;
            color: #000;
      }
      .social-links a{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: #000;
            border: 1px solid #000;
            margin: 0 0.2rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.5s ease;
      }
      .social-links a:hover{
            background: #000;
            border-color: transparent;
            color: #fff;
      }
      @media screen and (min-width:992px){
            .card{
                  display: grid;
                  grid-template-columns: repeat(2, 1fr);
                  grid-gap: 1.5rem;
            }
            .card-wrapper{
                  height: 100vh;
                  display: flex;
                  justify-content: center;
                  align-items: center;
            }
            .product-imgs{
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
            }
            .product-content{
                  padding-top: 0;
            }
            .color-groups{
                  display: flex;
                  justify-content: left;
            }
            .color:last-child{
                  margin-right: 0;
            }
      }
      .color-content{
            margin-top:1.5rem;
      }
      .color-content h6{
            /* text-transform: uppercase; */
            font-size: 1rem;
            font-weight: 800;
      }
      .color-content h6 span{
            font-size: 1rem;
            font-weight: 500;
      }
      .color{
            width: 35px;
            height: 35px;
            background: none;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            margin-right: 10px;
            cursor: pointer;
            transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
      }
      .color-pacific-blue{
            background-color: #137186;
      }
      .color-royal-ivory{
            background-color: #C2BBA8;
      }
      .color-russet{
            background-color: #41230e;
      }
      .color-purple{
            background-color: #800080;
      }
      .color:hover{
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.3);
      }
      .active-color{
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
      }
      .color-groups{
            padding: 1rem 0;
            display: flex;
      }
      .product-detail .feature .icon:before{
            background: none;
            display: inline-block;
            position: relative;
            
            
      }
      .product-detail .info-icons{
            display: flexbox;
            padding-left: 1rem;
            padding-right: 1rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
      }
      .progress-label-left{
            float:left;
            margin-right: 0.5rem;
            line-height: 1em;
      }
      .progress-label-right{
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
      }
      .star-light{
            color:#e9ecef;
      }
      

</style>

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1 style="font-weight: 700; font-size:30px; font-family:sans-serif">Product Details</h1>
				</div>
			</div>
			<div class="col-lg-7">
				
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
<div class="card-wrapper" style="margin-top: 3rem;">
      <div class="card">
                  <?php

                  if(isset($_GET['product_id']))
                  {
                        $id = $_GET['product_id']; 
                        $fetch_query = "SELECT * FROM product_detail WHERE product_id = $id LIMIT 1";
                        $fetch_run = mysqli_query($con, $fetch_query);
            
                        if(mysqli_num_rows($fetch_run) > 0){
                              
                              foreach($fetch_run as $item){

                                    $product_id = $item['product_id'];
                                    $product_name = $item['product_name'];
                                    $category = $item['category'];
                                    $product_image1 = $item['product_image1'];
                                    $product_image2 = $item['product_image2'];
                                    $product_image3 = $item['product_image3'];
                                    $product_image4 = $item['product_image4'];
                                    $old_price = $item['old_price'];
                                    $new_price = $item['new_price'];
                                    $availability = $item['availability'];
                                    $quantity = $item['quantity'];
                                    $color = $item['color'];
                                    $recommended_uses = $item['recommended_uses'];
                                    $special_feature = $item['special_feature'];
                                    $width = $item['width'];
                                    $height = $item['height'];
                                    $depth = $item['depth'];
                                    $components = $item['components'];
                                    $material = $item['material'];
                                    $doors = $item['doors'];
                                    $drawers = $item['drawers'];
            
            //  card left 
      
           echo "<div class='product-imgs'>
           <?php include('./admin/message.php'); ?>
                  <div class='img-display'>
                        <div class='img-showcase'>
                              <img src='./admin/product_images/$product_image1' alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              <img src='./admin/product_images/$product_image2' alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              <img src='./admin/product_images/$product_image3'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              <img src='./admin/product_images/$product_image4'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                        </div>
                  </div>
                  <div class='img-select'>
                        <div class='img-item'>
                              <a href='#' data-id='1'>
                              <img src='./admin/product_images/$product_image1'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              </a>
                        </div>
                        <div class='img-item'>
                              <a href='#' data-id='2'>
                              <img src='./admin/product_images/$product_image2'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              </a>
                        </div>
                        <div class='img-item'>
                              <a href='#' data-id='3'>
                              <img src='./admin/product_images/$product_image3'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              </a>
                        </div>
                        <div class='img-item'>
                              <a href='#' data-id='4'>
                              <img src='./admin/product_images/$product_image4'  alt='almirah image' style = 'class='object-fit-cover border rounded'>
                              </a>
                        </div>
                  </div>
            </div>";
            //  card right
            echo "<div class='product-content'>
                  <h3 class='product-title' style='font-weight: 600; font-size:25px;'>$product_name</h3>
                  <a href='./shop.php' class='product-link'>Explore store</a>
                  <div class='product-price'>
                        <p class='last-price'>Old Price: ₹<span>$old_price</span></p>
                        <p class='new-price'>New Price: ₹<span>$new_price</span></p>
                  </div>
                  <div class='product-detail'>
                  <h2 style='font-weight:700; font-size:1.3rem; color:#000; margin: 1rem 0;'>About this item: </h2>
                        <ul>
                              <li>Availablility: <span>$availability</span></li>
                              <li>Category: <span>$category</span></li>
                              <!-- <li>Shipping Area: <span>All over Rajasthan</span></li> -->
                              <!-- <li>Shipping Fee: <span>Applicable(Based on distance)</span></li> -->
                              <!-- <li>Installation Charges: <span>Free</span></li> -->
                              <li>Color: <span>$color</span></li>
                              <li>Recommended Uses For Product: <span>$recommended_uses</span</li>
                              <li>Special Feature: <span>$special_feature</span></li>
                              <li>Product Dimensions: <span>$depth D x $width W x $height H Centimeters</span></li>
                              <li>Included Components: <span>$components</span></li>
                              <li>Material: <span>Metal</span></li>
                        </ul>
      
                       <hr class='solid'> 
                       <div class='icons-info'>
                              <div class='row g' style='margin-top:-40px; margin-bottom:-70px;'>
                                    <div class='col-6'>
                                          <div class='feature' style='display: flex; align-items:center; justify-content:center; padding-right:50px;'>
                                                <div class='icon'>
                                                      <img src='./images/icons8-open-door-48.png' alt='' width='40px' height='60px'>
                                                </div>
                                                <div class='para' style='display: flex; flex-direction:column;margin-left:10px; margin-top: 50px;'>
                                                      <h3 style='padding-left: 5px; font-weight:700;'>Number of doors</h3>
                                                      <p style='font-weight: 500; font-size:15px; color:#000'>$doors</p>
                                                </div>
                                          </div>      
                                    </div>
                                    <div class='col-6'>
                                    <div class='feature' style='display: flex; align-items:center; justify-content:center;'>
                                                <div class='icon'>
                                                      <img src='./images/icons8-drawers-53.png' alt=''  width='30px;' height='50px;'>
                                                </div>
                                                <div class='para' style='display: flex; flex-direction:column;margin-left:10px; margin-top: 50px;'>
                                                      <h3 style='padding-left: 5px; font-weight:700;'>Number of drawers</h3>
                                                      <p style='font-weight: 500; font-size:15px; color:#000;'>$drawers</p>
                                                </div>
                                          </div> 
                                    </div>
                                    <div class='col-6'>
                                    <div class='feature' style='display: flex; align-items:center; justify-content:center;'>
                                                <div class='icon'>
                                                      <img src='./images/support.png' alt='' width='30px;' height='40px;' style=' margin-bottom:40px; margin-top:10px; padding-left:10px;'>
                                                </div>
                                                <div class='para' style='display: flex; flex-direction:column; margin-left:10px; margin-top: 14px;'>
                                                      <h3 style='padding-left: 5px; font-weight:700;'>Installation Charges</h3>
                                                      <p style='font-weight: 500; font-size:14px; color:#000;'>No Installation Charges</p>
                                                </div> 
                                          </div> 
                                    </div>
                                    <div class='col-6'>
                                    <div class='feature' style='display: flex; align-items:center; justify-content:center;'>
                                                <div class='icon'>
                                                      <img src='./images/delivery.png' alt=''  width='30px;' height='50px;' style='margin-bottom:50px;'>
                                                </div>
                                                <div class='para' style='display: flex; flex-direction:column; margin-left:10px;'>
                                                      <h3 style='padding-left: 5px; font-weight:700;'>Delivery Charges</h3>
                                                      <p style='font-weight: 500; font-size:14px; color:#000'>Based on distance</p>
                                                </div>
                                          </div> 
                                    </div>
                              </div>
                       <hr class='solid'>
                       </div>
                  </div>";
                  ?>
                        <?php 
                                    //check if the user logged in and if it is so then only he/she can request a call back
                                     if(isset($_SESSION['auth_user'])){

                                          $user_email = $_GET['email'];
                                          
                                                echo "<div class='purchase-info'>
                                                            <button type='button' id = 'restrictedButton'  class='btn btn-primary' data-toggle = 'modal' data-target = '#modalA'><i class='bi bi-telephone-inbound'></i><span style='padding-left: 10px;'>Request Call Back</span></button>
                                                      </div>";
                                     }
                                     else{
                                          echo "<div class='purchase-info'>
                                                      <button type='button' id = 'restrictedButton' class='btn btn-primary' data-toggle = 'modal' ><i class='bi bi-telephone-inbound'></i><span style='padding-left: 10px;'>Request Call Back</span></button>
                                                </div>";

                                          echo '<script>
                                                      document.getElementById("restrictedButton").addEventListener("click", function(event) {
                                                            alert("Please login to request a call back.");
                                                            event.preventDefault();
                                                      });
                                                </script>';
                                     }
                        ?>          
                        <?php
                 echo "<div class='social-links'>
                                    <p style='padding-right: 10px; font-weight:500; font-size:15px;'>Share At: </p>
                                    <a>
                                          <i class='bi bi-facebook'></i>
                                    </a>
                                    <a>
                                          <i class='bi bi-whatsapp'></i>
                                    </a>
                                    <a>
                                          <i class='bi bi-instagram'></i>
                                    </a>
                              </div>
                  </div>";
                              }
                        }
                  }    
            ?>
      </div>
</div> 
</div>

<!-- <div class="container">
      <div class="card-wrapper" style="margin-top:10rem; margin-bottom:10rem; height:100vh;">
            <div class="card">
                   <div class="card-header" style="margin-bottom:18rem;">Customer reviews</div>
                  <div class="card-body" style="display: grid; width:1100px;">
                        <div class="row" style=" padding-top:20px; ">
                                    <h4 style="color:#000; font-weight:700; font-size:20px;" aria-hidden="true">Customer reviews</h4>
                              <div class="col-sm-4 text-center">
                                    <h5 class="text-warning mt-4 mb-4">
                                          <b><span id="average_rating">0.0</span> / 5</b>
                                    </h5>
                                    <div class="mb-3">
                                          <i class="bi bi-star"></i>
                                          <i class="bi bi-star"></i>
                                          <i class="bi bi-star"></i>
                                          <i class="bi bi-star"></i>
                                          <i class="bi bi-star"></i>
                                    </div>
                                    <h3 style="font-weight:600; font-size:16px; color:#000;"><span id="total_review" style="font-weight:600; font-size:16px; color:#000;">0</span> Review</h3>
                              </div>
                              <div class="col-sm-4">
                                    <p>
                                          <div class="progress-label-left"><b>5</b> <i class="bi bi-star-fill" style="color:#ffc107"></i></div>

                                          <div class="progress-label-right"><span id="total_five_star_review">(0)</span></div>

                                          <div class="progress">
                                                <div id="five_star_progress" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                                          </div>
                                    </p>
                                    <p>
                                          <div class="progress-label-left"><b>4</b> <i class="bi bi-star-fill" style="color:#ffc107"></i></div>
                                                                                     
                                          <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div> 

                                          <div class="progress">
                                                <div id="four_star_progress" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                                          </div> 
                                    </p>
                                    <p>
                                          <div class="progress-label-left"><b>3</b> <i class="bi bi-star-fill" style="color:#ffc107"></i></div>
                                                                                    
                                          <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>

                                          <div class="progress">
                                                <div id="three_star_progress" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                                          </div>
                                    </p>
                                    <p>
                                          <div class="progress-label-left"><b>2</b> <i class="bi bi-star-fill" style="color:#ffc107"></i></div>
                                                                                    
                                          <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>

                                          <div class="progress">
                                                <div id="two_star_progress" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                                          </div>
                                    </p>
                                    <p>
                                          <div class="progress-label-left"><b>1</b> <i class="bi bi-star-fill" style="color:#ffc107"></i></div>
                                                                                    
                                          <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>

                                          <div class="progress">
                                                <div id="one_star_progress" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" ></div>
                                          </div>
                                    </p>
                              </div>
                              <div class="col-sm-4 text-center">
                                    <h3 class="mt-4 mb-3" style="color:#000; font-weight:600; font-size:20px;">Write Review Here</h3>
                                    <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                              </div>
                        </div>
                  </div>      
            </div> 
            <div class="mt-5" id="review_content"></div>
      </div>         
</div> -->

<!-- REVIEW -->
<!-- <div class="modal" id="review_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title">Submit Review</h5>
                        <button style="border: none; background-color:#fff; font-weight:500; font-size:1.3rem;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <h4 class="text-center mt-2 mb-4">
                              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1" data-index="1"></i>
                              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2" data-index="2"></i>
                              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3" data-index="3"></i>
                              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4" data-index="4"></i>
                              <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5" data-index="5"></i>
                        </h4>

                        <input type="hidden" value="" class="starRateV">
                        <input type="hidden" value="" class="rateDate">

                        <div class="form-group" style="margin-bottom: 0.8rem;">
                              <input type="text" name="user_name" id="id_user_name" class="form-control" placeholder="Enter Your Name"/>
                        </div>
                        <div class="form-group">
                               <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here" cols="20" rows="5"></textarea>
                        </div>

                        <div class="rate-error" style="font-size:14px; color:crimson; font-family:sans-serif; margin-bottom:5px; font-weight:500;"></div>

                        <div class="form-group text-center mt-4">
                              <button type="button" class="btn btn-primary" id="save_review"  >Submit</button>
                        </div>
                  </div>
            </div>
      </div>
</div> -->

<!-- Modal A -->
<?php
            
       if(isset($_SESSION['auth_user'])){
            
            $user_name = $_SESSION['auth_user']['user_name'];
            $user_email = $_SESSION['auth_user']['user_email'];
       
            if(isset($_GET['product_id']))
            {
                  $id = $_GET['product_id']; 
                  $fetch_query = "SELECT * FROM product_detail WHERE product_id = $id LIMIT 1";
                  $fetch_run = mysqli_query($con, $fetch_query);

                  if(mysqli_num_rows($fetch_run) > 0){

                        foreach($fetch_run as $item){

                              $product_id = $item['product_id'];
                              $product_name = $item['product_name'];
                              $category = $item['category'];
                              $product_image1 = $item['product_image1'];
                              $new_price = $item['new_price'];

echo "<div class='modal fade modal-xl' id='modalA' tabindex='-1' role='dialog' aria-labelledby='modalALabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='modalALabel'>Connect with 'Dolly Steel Furniture'</h5>
                  <button style='border: none; background-color:#fff; font-weight:500; font-size:1.3rem;' type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                  </button>
            </div>
            <div class='modal-body'>
              <div class='row' name = 'left side modal'>
                  
                   <div class=col-md-6' style = 'width:50%;'>   
                        <div style = 'display:flex; width:200px ; height:auto; margin-bottom:1.5rem;'>
                              <img src='./admin/product_images/$product_image1' alt='almirah image'  class='object-fit-cover border rounded' style = 'max-width = 100px; height = 100px;'>
                        </div>     
                        <div>
                              <p style = 'font-size: 15px; font-weight: 400; color:#000;'>Product Name: $product_name</p>
                        </div>
                        <div>
                              <p style = 'font-size: 15px; font-weight: 400; color:#000;'>Category: $category</p>
                        </div>
                        <div>
                              <p style = 'font-size: 15px; font-weight: 400; color:#000;'>Price: ₹$new_price</p>
                        </div>     
                   </div>
                  <div class='col-md-6'>
                  <div>
                        <form action='./admin/code.php' method='POST'>
                              <div class='row'>
                                    <div class='col-md-12 mb-3'>
                                          <label for='name' style='font-weight:500; font-size:15px; color:#000;'>Your Name:</label>
                                          <input type='text' name='name' class='form-control' placeholder='Enter your name' value = '$user_name' required>
                                    </div>
                                    <div class='col-md-12 mb-3'>
                                          <label for='email' style='font-weight:500; font-size:15px; color:#000;'>Your Email:</label>
                                          <input type='email' name='email' class='form-control' placeholder='Enter your email' value = '$user_email' required>
                                    </div>
                                    <div class='col-md-12 mb-3'>
                                          <label for='mobile number' id = 'phoneNumber' style='font-weight:500; font-size:15px; color:#000;'>Mobile number:</label>
                                          <input type='tel' name='mobile_no' class='form-control' value = '+91 ' pattern='^((\[0-9]{10})|(0[0-9]{10}))$' min='0' max='13' placeholder='Enter your mobile number' required>
                                          <p style='font-size: 12px;'>We'll contact you on this number</p>
                                    </div>
                                    <div class='col-md-6 mb-3'>
                                          <button type='submit'  name = 'requested' class='btn btn-secondary'>Submit</button>
                                    </div>
                              </div>      
                        </form>
                  </div>      
                  </div>
               </div>   
             </div> 
            </div>
        </div>
    </div>
</div>";
                        }                
                  }
            }  
      }    
?>

<!-- Modal B -->
<!-- <div class='modal fade' id='modalB' tabindex='-1' role='dialog' aria-labelledby='modalBLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='modalBLabel'>modal B</h5>
                <button style='border: none; background-color:#fff; font-weight:500; font-size:1.3rem;' type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>modal B content</p>
                <button type='submit' class='btn btn-secondary' onclick='openFinalModal();'>
                    Open modal C
                </button>
            </div>
        </div>
    </div>
</div> -->

<!-- Modal C -->
<!-- <div class='modal fade' id='modalC' tabindex='-1' role='dialog' aria-labelledby='modalCLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='modalCLabel'>modal C</h5>
                <button style='border: none; background-color:#fff; font-weight:500; font-size:1.3rem;' type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>modal C content</p>
                <button type='submit' class='btn btn-secondary'>
                    Open modal C
                </button>
            </div>
        </div>
    </div>
</div> -->
                 
<!-- <script>
    function openNextModal() {
        // Trigger the modal B to open after form submission
        $('#modalA').modal('hide');
        $('#modalB').modal('show');
    }

    function openFinalModal() {
        // Trigger the modal C to open after form submission
        $('#modalB').modal('hide');
        $('#modalC').modal('show');
    }
</script> -->


<script type="text/javascript">

    

       


      

   

    // JavaScript to handle input value
    document.getElementById("phoneNumber").addEventListener("input", function() {
        // Remove any non-numeric characters
        this.value = this.value.replace(/\D/g, "");
        
        // Add the +91 prefix
        this.value = "+91" + this.value;
    });

      //change product's multiple images
      const imgs = document.querySelectorAll('.img-select a');
      const imgBtns = [...imgs];
      let imgId = 1;

      imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                  event.preventDefault();
                  imgId = imgItem.dataset.id;
                  slideImage();
            });
      });

      function slideImage(){
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
      }
      
      window.addEventListener('resize', slideImage);

      //change product color on color selection
      const COLOR_BTNS = document.querySelectorAll('.color');
      COLOR_BTNS.forEach(color => {
            color.addEventListener('click', () => {
                  let colorNameClass = color.className;
                  if(!color.classList.contains('active-color')){
                        let colorName = colorNameClass.slice(colorNameClass.
                        indexOf('-') + 1, colorNameClass.length);
                        resetActiveBtns();
                        color.classList.add('active-color');
                  }
            });
      });
      
      //resetting all color btns
      function resetActiveBtns(){
            COLOR_BTNS.forEach(color =>{
                  color.classList.remove('active-color');
            });
      }

      // //set new color on the card right
      // function setNewColor(color){
      //       document.querySelector('.banner-right img')
      // }

 // review

//  $(document).ready(function(){

//       var rating_data = 0;
     
//       //open review dialog
//       $('#add_review').click(function(){ 

//             $('#review_modal').modal('show');
            
//       }); 

//       //submitting star review
//       $(document).on('mouseenter', '.submit_star', function(){

//             var rating = $(this).data('rating');

//             reset_background();

//             for(var count = 1; count <= rating; count++){

//                   $('#submit_star_'+count).addClass('text-warning');

//             }
//       });

//       function reset_background(){

//             for(var count = 1; count <= 5;count++){

//                   $('#submit_star_'+count).addClass('star-light');

//                   $('#submit_star_'+count).removeClass('text-warning');

//             }
//       }

//       $(document).on('mouseclick', '.submit_star', function(){

//             reset_background();

//       });

//       $(document).on('click', '.submit_star', function(){

//             rating_data = $(this).data('rating');

//       });

//       $('#save_review').click(function(){

//             var user_name = $('#user_name').val();

//             var user_review = $('#user_review').val();

//             // var rating_data = $('#rating_data').val();

//             if(user_name == '' || user_review == ''){

//                   $(".rate-error").html("Please fill all the fields");
//                   return false;

//             }
//             else{

//                   $(".rate-error").html("");

//                   // var $form = $(this).closest(".model_content");

//                   // rating_data = $form.find()
//                   // user_name = $form.find('.user_name').val();
//                   // user_review = $form.find('.user_review').val(); 
//                   // var date = $form.find(".rateDate").val();



//                   $.ajax({

//                         url: "submit_rating.php",
//                         method: "POST",
//                         data: {
//                               rating_data:rating_data, 
//                               user_name:user_name, 
//                               user_review:user_review
//                         },
//                         success: function(data){

//                               $('#review_modal').modal('hide');
//                               alert(data);

//                         }
//                   })

//             }

//       });

      
// });
// function submit_insert(){
//       let name = document.getElementById('name');
//       let rname= document.getElementById('user_name');
//       let taxarea= document.getElementById('taxarea');
// }
           
</script>

<?php

      include "footer.php";

?> 