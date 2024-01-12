<?php

      include "header.php";

 ?>

		
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1 style="font-weight: 700; font-size:30px; font-family:sans-serif">Shop</h1>
				</div>
			</div>
			<div class="col-lg-7">
				
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<div class="row">	
		<?php
			
			$fetch_query = "SELECT * FROM product_detail";
			$fetch_run = mysqli_query($con, $fetch_query);
		
			if(mysqli_num_rows($fetch_run) > 0){
				
				foreach($fetch_run as $item){

					$product_id = $item['product_id'];
					$product_name = $item['product_name'];
					$product_image1 = $item['product_image1'];
					$new_price = $item['new_price'];
					
						
					echo "<div class='col-12 col-md-4 col-lg-3 mb-5'>
					<a class='product-item' href = './product_detail.php?product_id=$product_id'>
					
						<img src='./admin/product_images/$product_image1' alt = '$product_name' class='img-fluid product-thumbnail'>

					<h3 class='product-title'>$product_name</h3>
					<strong class='product-price'>₹$new_price</strong>
						
					<span class='icon-cross' style='border-radius: 30px; width: 120px; height:35px;'><span style = 'display : inline-block; line-height: 1.5rem; font-family: Inter, sans-serif; font-weight: 600; color: white; vertical-align:middle; text-align:center;  font-size:1rem;' >Interested!</span></span>
					</a>
				</div>" ;
			}
		} 
		?>
			<!-- Start Column 1 -->
			

					
				
			
			<!-- End Column 1 -->
				
			<!-- Start Column 2 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-1.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Nordic Chair</h3>
					<strong class="product-price">$50.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div>  -->
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-2.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Kruzo Aero Chair</h3>
					<strong class="product-price">$78.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div> -->
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-3.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Ergonomic Chair</h3>
					<strong class="product-price">$43.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div> -->
			<!-- End Column 4 -->


			<!-- Start Column 1 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-3.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Nordic Chair</h3>
					<strong class="product-price">$50.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div>  -->
			<!-- End Column 1 -->
				
			<!-- Start Column 2 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-1.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Nordic Chair</h3>
					<strong class="product-price">$50.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div>  -->
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-2.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Kruzo Aero Chair</h3>
					<strong class="product-price">$78.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div> -->
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<!-- <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="#">
					<img src="images/product-3.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Ergonomic Chair</h3>
					<strong class="product-price">$43.00</strong>

					<span class="icon-cross" style="border-radius: 0%; width: 120px;"><span style="color: white; width:300px; height:300px; font-size:18px;">Interested!</span></span>
				</a>
			</div> -->
			<!-- End Column 4 -->

		</div>
	</div>
</div>

<?php

      include "footer.php";

 ?>