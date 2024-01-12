<?php

include("./authentication.php");


if(isset($_POST['logout'])){
      // session_destroy();
      unset($_SESSION['auth']);
      unset($_SESSION['auth_role']);
      unset($_SESSION['auth_user']);

      $_SESSION['message'] = "Logged Out Successfully";
      header("location:../index.php");
      exit(0);
}


//add end website content
if(isset($_POST['add_endContent'])){

      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];

      $location = "product_images/";

      $image1 = $_FILES['image1']['name'];
      $image_temp1 = $_FILES['image1']['tmp_name'];
      

      $image2 = $_FILES['image2']['name'];
      $image_temp2 = $_FILES['image2']['tmp_name'];
      

      $image3 = $_FILES['image3']['name'];
      $image_temp3 = $_FILES['image3']['tmp_name'];

      $query = "INSERT INTO we_help_content (`heading`, `paragraph`, `image1`, `image2`, `image3`)
                   VALUES ('$heading', '$paragraph','$image1', '$image2', '$image3')";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            move_uploaded_file($image_temp1, $location.$image1);
            move_uploaded_file($image_temp2, $location.$image2);
            move_uploaded_file($image_temp3, $location.$image3);
            
            $_SESSION['message'] = "Content Added Successfully";
            header('Location: view-websiteEndContent.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: add-websiteEndContent.php');
            exit(0);
      }
}


//edit website end content
if(isset($_POST['edit_EndContent'])){

      $end_id = $_POST['id'];
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];

      $location = "product_images/";

      $image1 = $_FILES['image1']['name'];
      if($image1 != ''){
            $image_temp1 = $_FILES['image1']['tmp_name'];
            // $location1 = "product_images/".$product_image1;
            $a = '';
            if(!empty($_POST['old_image1'])){
                  unlink("product_images/".$_POST['old_image1']);
            }
      }
      else{
            $image1 = $_POST['old_image1'];
            $a = 'true';
      }


      $image2 = $_FILES['image2']['name'];
      if($image2 != ''){
            $image_temp2 = $_FILES['image2']['tmp_name'];
            // $location2 = "product_images/".$product_image2;
            $b = '';
            if(!empty($_POST['old_image2'])){
                  unlink("product_images/".$_POST['old_image2']);
            }
      }
      else{
            $image2 = $_POST['old_image2'];
            $b = 'true';
      }


      $image3 = $_FILES['image3']['name'];
      if($image3 != ''){
            $image_temp3 = $_FILES['image3']['tmp_name'];
            // $location3 = "product_images/".$product_image3;
            $c = '';
            if(!empty($_POST['old_image3'])){
                  unlink("product_images/".$_POST['old_image3']);
            }
      }
      else{
            $image3 = $_POST['old_image3'];
            $c = 'true';
      }

      $query = "UPDATE we_help_content SET heading = '$heading', paragraph = '$paragraph', image1 = '$image1', image2 = '$image2', image3 = '$image3' WHERE id = '$end_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            
            if($a == '' || $b == '' || $c  == ''){
                  move_uploaded_file($image_temp1, $location.$image1);
                  move_uploaded_file($image_temp2, $location.$image2);
                  move_uploaded_file($image_temp3, $location.$image3);
            }
            
            $_SESSION['message'] = "Content Updated Successfully";
            header('Location: view-websiteEndContent.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-websiteEndContent.php');
            exit(0);
      }
}

//delete website end content
if(isset($_POST['delete_endContent'])){
      $end_id = $_POST['delete_endContent'];

      $query = "DELETE FROM we_help_content WHERE id = '$end_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Content Deleted Successfully";
            header('Location: view-websiteEndContent.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-websiteEndContent.php');
            exit(0);
      }

}


//request call back
if(isset($_POST['requested'])){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile_no  = $_POST['mobile_no'];

      $checkemail = "SELECT email FROM requested WHERE email = '$email'";
      $checkemail_run = mysqli_query($con, $checkemail);

      if(mysqli_num_rows($checkemail_run) > 0){
            // Email already exists
            $_SESSION['message'] = "You have already requested for callback";
            header("location:../shop.php");
            exit(0);
      }
      else{

            $query = "INSERT INTO requested(name, email, mobile_no) 
                        VALUES ('$name', '$email', '$mobile_no')";

            $query_run = mysqli_query($con, $query);

            if($query_run){
                  $_SESSION['message'] = "Explore more. We'll get back to you soon ".$name;
                  header('Location: ../shop.php');
                  exit(0);
            }
            else{
                  $_SESSION['message'] = "Something Went Wrong";
                  header('Location: ../shop.php');
                  exit(0);
            }
      }

}


//delete website service content
if(isset($_POST['delete_serviceContent'])){
      $s_id = $_POST['delete_serviceContent'];

      $query = "DELETE FROM service_content WHERE id = '$s_id' ";
      $query_run = mysqli_query($con, $query);
      
      if($query_run){
            $_SESSION['message'] = "Content Deleted Successfully";
            header('location: view-websiteService.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('location: view-websiteService.php');
            exit(0);
      }
}

//edit website service content
if(isset($_POST['edit_serviceContent'])){
      
      $s_id = $_POST['id'];
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];
      $image  = $_FILES['image']['name'];
      if($image != ''){
            $image_temp = $_FILES['image']['tmp_name'];
            $location = "product_images/".$image;
            $i = '';
            if(!empty($_FILES['old_image'])){
                  unlink("product_images/".$_FILES['old_image']);
            }
      }
      else{
            $image = $_POST['old_image'];
            $i = 'true';
      }

      $query = "UPDATE service_content SET heading = '$heading', paragraph = '$paragraph', image = '$image' WHERE id = '$s_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){

            if($i == ''){
                  move_uploaded_file($image_temp, $location);
            }
            
            $_SESSION['message'] = "Content updated successfully";
            header('location: view-websiteService.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('location: edit-websiteService.php');
            exit(0);
      }
}



//add website service content
if(isset($_POST['add_service'])){

       $heading = $_POST['heading'];
       $paragraph = $_POST['paragraph'];

       $image1 = $_FILES['simage']['name'];
       $image1_temp = $_FILES['simage']['tmp_name'];
       $f = "product_images/".$image1;

       $query = "INSERT INTO service_content(heading, paragraph, image) 
                  VALUES ('$heading', '$paragraph', '$image1')";

       $query_run = mysqli_query($con, $query);

       if($query_run){

            move_uploaded_file($image1_temp, $f);
            $_SESSION['message'] = "New content added successfully";
            header('location: view-websiteService.php');
            exit(0);
       }
       else{
            $_SESSION['message'] = "Something Went Wrong";
            header('location: add-websiteService.php');
            exit(0);
       }

}


//delete website product content
if(isset($_POST['delete_productContent'])){
      $pro_id = $_POST['delete_productContent'];

      $query = "DELETE FROM product_content WHERE id = '$pro_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Content Deleted Successfully";
            header('Location: view-websiteProduct.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-websiteProduct.php');
            exit(0);
      }

}



//edit website product content
if(isset($_POST['edit_productContent'])){
      $pro_id = $_POST['id'];
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];

      $query = "UPDATE product_content SET heading = '$heading', paragraph = '$paragraph' WHERE id = '$pro_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Content updated successfully";
            header('Location: view-websiteProduct.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: edit-websiteProduct.php');
            exit(0);
      }
}




//add website product content
if(isset($_POST['add_productContent'])){
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];

      $query = "INSERT INTO product_content(heading, paragraph) 
                  VALUES ('$heading', '$paragraph')";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "New content added successfully";
            header('Location: view-websiteProduct.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: add-websiteProduct.php');
            exit(0);
      }
}


//delete intro content
if(isset($_POST['delete_intro'])){
      $intro_id = $_POST['delete_intro'];

      $query = "DELETE FROM intro_content WHERE id = '$intro_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Content Deleted Successfully";
            header('Location: view-websiteIntro.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-websiteIntro.php');
            exit(0);
      }

}


//edit website intro content
if(isset($_POST['edit_intro'])){
      
      $intro_id = $_POST['id'];
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];
      $image  = $_FILES['intro_image']['name'];
      if($image != ''){
            $image_temp = $_FILES['intro_image']['tmp_name'];
            $location = "product_images/".$image;
            $i = '';
            if(!empty($_FILES['old_image'])){
                  unlink("product_images/".$_FILES['old_image']);
            }
      }
      else{
            $image = $_POST['old_image'];
            $i = 'true';
      }

      $query = "UPDATE intro_content SET heading = '$heading', paragraph = '$paragraph', image = '$image' WHERE id = '$intro_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){

            if($i == ''){
                  move_uploaded_file($image_temp, $location);
            }
            
            $_SESSION['message'] = "Intro updated successfully";
            header('Location: view-websiteIntro.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: edit-websiteIntro.php');
            exit(0);
      }
}


//add intro content
if(isset($_POST['add_intro'])){
      
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];

      $image  = $_FILES['intro_image']['name'];
      $image_temp = $_FILES['intro_image']['tmp_name'];
      $location = "product_images/".$image;

      $query = "INSERT INTO intro_content(heading, paragraph, image) 
                  VALUES ('$heading', '$paragraph', '$image')";

      $query_run = mysqli_query($con, $query);

      if($query_run){

            move_uploaded_file($image_temp, $location);
            $_SESSION['message'] = "New Intro added successfully";
            header('Location: view-websiteIntro.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: add-websiteIntro.php');
            exit(0);
      }
}

//edit requested data
if(isset($_POST['update_requested_data'])){
      $call_id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile_no = $_POST['mobile_number'];

      $query = "UPDATE requested SET name = '$name', email = '$email', mobile_no = '$mobile_no' WHERE id = '$call_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Requested Data Updated Successfully";
            header('Location: view-requested-call.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-requested-call.php');
            exit(0);
      }
}

//delete requested data
if(isset($_POST['delete_requested_data'])){
      $call_id = $_POST['delete_requested_data'];

      $query = "DELETE FROM requested WHERE id = '$call_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Data Deleted Successfully";
            header('Location: view-requested-call.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-requested-call.php');
            exit(0);
      }

}

//edit feedback
if(isset($_POST['update_feedback'])){
      $feedback_id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $feedback = $_POST['feedback'];

      $query = "UPDATE feedback SET name = '$name', feedback = '$feedback', email = '$email' WHERE id = '$feedback_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Feedback Updated Successfully";
            header('Location: view-feedback.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-feedback.php');
            exit(0);
      }
}


//delete feedback
if(isset($_POST['delete_feedback'])){
      $feedback_id = $_POST['delete_feedback'];

      $query = "DELETE FROM feedback WHERE id = '$feedback_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Feedback Deleted Successfully";
            header('Location: view-feedback.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-feedback.php');
            exit(0);
      }

}


//delete product
if(isset($_POST['delete_product'])){
      $product_id = $_POST['delete_product'];

      $query = "DELETE FROM product_detail WHERE product_id = '$product_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Product Deleted Successfully";
            header('Location: view-product.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-product.php');
            exit(0);
      }

}


//edit product details
if(isset($_POST['update_product'])){

      $product_id = $_POST['product_id'];
      $name = $_POST['name'];
      $category = $_POST['category'];

      $location = "product_images/";

      $product_image1 = $_FILES['product_image1']['name'];
      if($product_image1 != ''){
            $product_image_temp1 = $_FILES['product_image1']['tmp_name'];
            // $location1 = "product_images/".$product_image1;
            $image1 = '';
            if(!empty($_POST['old_image1'])){
                  unlink("product_images/".$_POST['old_image1']);
            }
      }
      else{
            $product_image1 = $_POST['old_image1'];
            $image1 = 'true';
      }


      $product_image2 = $_FILES['product_image2']['name'];
      if($product_image2 != ''){
            $product_image_temp2 = $_FILES['product_image2']['tmp_name'];
            // $location2 = "product_images/".$product_image2;
            $image2 = '';
            if(!empty($_POST['old_image2'])){
                  unlink("product_images/".$_POST['old_image2']);
            }
      }
      else{
            $product_image2 = $_POST['old_image2'];
            $image2 = 'true';
      }


      $product_image3 = $_FILES['product_image3']['name'];
      if($product_image3 != ''){
            $product_image_temp3 = $_FILES['product_image3']['tmp_name'];
            // $location3 = "product_images/".$product_image3;
            $image3 = '';
            if(!empty($_POST['old_image3'])){
                  unlink("product_images/".$_POST['old_image3']);
            }
      }
      else{
            $product_image3 = $_POST['old_image3'];
            $image3 = 'true';
      }


      $product_image4 = $_FILES['product_image4']['name'];
      if($product_image4 != ''){
            $product_image_temp4 = $_FILES['product_image4']['tmp_name'];
            // $location4 = "product_images/".$product_image4;
            $image4 = '';
            if(!empty($_POST['old_image4'])){
                  unlink("product_images/".$_POST['old_image4']);
            }
      }
      else{
            $product_image4 = $_POST['old_image4'];
            $image4 = 'true';
      }



      $old_price = $_POST['old_price'];
      $new_price = $_POST['new_price'];
      $availability = $_POST['availability'];
      $quantity = $_POST['quantity'];
      $color = $_POST['color'];
      $recommended_uses = $_POST['recommended_uses'];
      $special_feature = $_POST['special_feature'];
      $width = $_POST['width'];
      $height = $_POST['height'];
      $depth = $_POST['depth'];
      $components = $_POST['components'];
      $material = $_POST['material'];
      $doors = $_POST['doors'];
      $drawers = $_POST['drawers'];

      $query = "UPDATE product_detail SET product_name='$name', category='$category', product_image1 = '$product_image1', product_image2 = '$product_image2', product_image3 = '$product_image3', product_image4 ='$product_image4', old_price = '$old_price', new_price = '$new_price', availability = '$availability', quantity = '$quantity', color = '$color', 
      recommended_uses = '$recommended_uses', special_feature = '$special_feature', width = '$width', height = '$height', depth = '$depth', components = '$components', material = '$material', doors = '$doors', drawers = '$drawers' WHERE product_id = '$product_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            
            if($image1 == '' || $image2 == '' || $image3  == '' || $image4  == ''){
                  move_uploaded_file($product_image_temp1, $location.$product_image1);
                  move_uploaded_file($product_image_temp2, $location.$product_image2);
                  move_uploaded_file($product_image_temp3, $location.$product_image3);
                  move_uploaded_file($product_image_temp4, $location.$product_image4);
            }
            
            $_SESSION['message'] = "Product Updated Successfully";
            header('Location: view-product.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-product.php');
            exit(0);
      }
}


//request call back
if(isset($_POST['requested'])){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile_no  = $_POST['mobile_no'];

      $query = "INSERT INTO requested(name, email, mobile_no) 
                  VALUES ('$name', '$email', '$mobile_no')";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Explore more. We'll get back to you soon";
            header('Location: ../shop.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: ../shop.php');
            exit(0);
      }
}

//add new product
if(isset($_POST['add_product'])){

      $name = $_POST['name'];
      $category = $_POST['category'];

      $location = "product_images/";

      $product_image1 = $_FILES['product_image1']['name'];
      $product_image_temp1 = $_FILES['product_image1']['tmp_name'];
      

      $product_image2 = $_FILES['product_image2']['name'];
      $product_image_temp2 = $_FILES['product_image2']['tmp_name'];
      

      $product_image3 = $_FILES['product_image3']['name'];
      $product_image_temp3 = $_FILES['product_image3']['tmp_name'];
     

      $product_image4 = $_FILES['product_image4']['name'];
      $product_image_temp4 = $_FILES['product_image4']['tmp_name'];

      $old_price = $_POST['old_price'];
      $new_price = $_POST['new_price'];
      $availability = $_POST['availability'];
      $quantity = $_POST['quantity'];
      $color = $_POST['color'];
      $recommended_uses = $_POST['recommended_uses'];
      $special_feature = $_POST['special_feature'];
      $width = $_POST['width'];
      $height = $_POST['height'];
      $depth = $_POST['depth'];
      $components = $_POST['components'];
      $material = $_POST['material'];
      $doors = $_POST['doors'];
      $drawers = $_POST['drawers'];

      $query = "INSERT INTO product_detail (`product_name`, `category`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `old_price`, `new_price`, `availability`, `quantity`, `color`, `recommended_uses`, `special_feature`, `width`, `height`, `depth`, `components`, `material`, `doors`, `drawers`)
                   VALUES ('$name', '$category','$product_image1', '$product_image2', '$product_image3', '$product_image4', '$old_price', '$new_price', '$availability','$quantity', '$color', '$recommended_uses', '$special_feature','$width', '$height', '$depth', '$components', '$material', '$doors', '$drawers')";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            move_uploaded_file($product_image_temp1, $location.$product_image1);
            move_uploaded_file($product_image_temp2, $location.$product_image2);
            move_uploaded_file($product_image_temp3, $location.$product_image3);
            move_uploaded_file($product_image_temp4, $location.$product_image4);
            
            $_SESSION['message'] = "Product Added Successfully";
            header('Location: view-product.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-product.php');
            exit(0);
      }
}

//add new category
if(isset($_POST['add_category'])){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $navbar_status  = $_POST['navbar_status'] == true ? '1' : '0';
      $status = $_POST['status'] == true ? '1' : '0';

      $query = "INSERT INTO categories (name, description, navbar_status, status)
                   VALUES ('$name', '$description', '$navbar_status', '$status')";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Category Added Successfully";
            header('Location: view-category.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-category.php');
            exit(0);
      }

}

//edit category
if(isset($_POST['update_category'])){
      $category_id = $_POST['category_id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
      $navbar_status  = $_POST['navbar_status'] == true ? '1' : '0';
      $status = $_POST['status'] == true ? '1' : '0';

      $query = "UPDATE categories SET name = '$name', description = '$description', navbar_status = '$navbar_status', status = '$status' 
      WHERE id = '$category_id' ";

      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Category Updated Successfully";
            header('Location: view-category.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-category.php');
            exit(0);
      }
}

//delete category
if(isset($_POST['delete_category'])){
      $category_id = $_POST['delete_category'];

      $query = "DELETE FROM categories WHERE id = '$category_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Category Deleted Successfully";
            header('Location: view-category.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-category.php');
            exit(0);
      }

}

//delete admin/user
if(isset($_POST['delete_user'])){
      $user_id = $_POST['delete_user'];

      $query = "DELETE FROM users WHERE id = '$user_id'";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Admin/User Deleted Successfully";
            header('Location: view-register.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-register.php');
            exit(0);
      }
}


//add new admin or user
if(isset($_POST['add_user'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role_as = $_POST['role_as'];
      $status = $_POST['status'] == true ? '1' : '0' ;

      $query = "INSERT INTO users (fname, lname, email, password, role_as, status) VALUES ('$fname', '$lname', '$email', '$password', '$role_as', '$status')";
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "New Admin/User Added Successfully";
            header('Location: view-register.php');
            exit(0);
      }
      else{
            $_SESSION['message'] = "Something Went Wrong";
            header('Location: view-register.php');
            exit(0);
      }
}

//edit existing admin or user
if(isset($_POST['update_user'])){
      $user_id = $_POST['user_id'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role_as = $_POST['role_as'];
      $status = $_POST['status'] == true ? '1' : '0' ;

      $query = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', role_as = '$role_as', status = '$status' 
                  WHERE id = '$user_id' ";
      
      $query_run = mysqli_query($con, $query);

      if($query_run){
            $_SESSION['message'] = "Updated Successfully";
            header('Location: view-register.php');
            exit(0);
      }

}

?>