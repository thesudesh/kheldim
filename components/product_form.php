<?php
   // if(isset($message)){
   //    foreach($message as $message){
   //       echo '
   //       <div class="message">
   //          <span>'.$message.'</span>
   //          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
   //       </div>
   //       ';
   //    }
   // }

// Manually Inserted
if (isset($message))
{
   foreach ((array) $message as $message)
   {
      echo '
      <div class="message">
       <span>'.$message.'</span>
       <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}


?>

<form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         
         <div class="inputBox">
            <b><span>Product Name: (required)</span></b>
            <input type="text" class="box" required maxlength="100" placeholder="enter product name" name="name">
         </div>

         <div class="inputBox">
            <b><span>Product Price: (required)</span></b>
            <input type="number" min="0" class="box" required max="9999999999" placeholder="enter product price" onkeypress="if(this.value.length == 10) return false;" name="price">
         </div>
        
         <div class="inputBox">
            <b><span>Image 01: (required)</span></b>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        
        <div class="inputBox">
            <b><span>Image 02: (required)</span></b>
            <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
        <br>
        <div class="inputBox">
            <center><b>
            <span>Product Category: (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="enter the product category" name="category" required>
            </b></center>
         <br>  
         <div class="inputBox">
           <center><b>
            <span>Product Description: (optional)</span>
            <textarea name="details" placeholder="enter product details" class="box" maxlength="500" cols="30" rows="10"></textarea>
            </b></center>
         </div>
      </div>
      
      <input type="submit" value="add product" class="btn" name="add_product">
   </form>
