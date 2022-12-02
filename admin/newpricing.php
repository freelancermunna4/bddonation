<?php

require_once 'sidebar.php';


?>
<!-- Page Content -->
<section class="content_wrapper">
  <!-- Page Details Title -->
  <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['title']) && isset($_POST['description'])&& isset($_POST['price'])) {
      $title = $db->EscapeString($_POST['title']);
      $description = $db->EscapeString($_POST['description']);
      $price = $db->EscapeString($_POST['price']);
      $listing = $db->EscapeString($_POST['listing']);
      $downloadlink = $db->EscapeString($_POST['downloadlink']);
     
   


        if (empty($title) || empty($description)) {
          echo '<p style="text-align: center;color: blue;">Please Compale Empty Fild</p>';
        } else {
       

          $tim=time();
            $insrt=$db->Query("INSERT INTO `pricingplan`(`title`, `discription`, `amount`, `linking`, `downloadlink`) VALUES (' $title','$description',$price,'$listing','$downloadlink')");


            if ($insrt) {
              echo '<p style="text-align: center;color: blue;">Succesfully Added Content</p>';
            }else{
              echo '<p style="text-align: center;color: blue;">Something Wrong</p>';
            }

        }

    }
  }


  ?>
  

  <!-- Page Main Content -->
  <div class="add_page_main_content">
    <h1 class="add_page_title">PRICING PLANS</h1>
    <form id="new_product_form" action="newpricing.php"method="post" enctype="multipart/form-data">
      <div>
        <label>Pricing Name</label>
        <input
                name="title"
                type="text"
                class="input"
                required />
      </div>
      <div>
        <label>Pricing Price</label>
        <input
                name="price"
                type="number"
                class="input"
                required />
      </div>
     
      <div>
        <label>Pricing Description</label>
        <textarea
                  name="description" 
                  type="text"
                  required 
                  placeholder="Portfolio Description"                  
                  class="input"></textarea>
      </div>
     

      <div>
        <label>Services Listing (Separeted by ' , ')</label>
        <textarea
                  name="listing" 
                  type="text" 
                  placeholder="Services Listing"                  
                  class="input"></textarea>
      </div>

      

      <div>
        <label>Download Link</label>
        <input
                name="downloadlink"
                type="text"
                class="input"
                required />
      </div>
    

      

      <button class="btn submit_btn" name="submit" type="submit" value="submit">Submit</button>
    </form>
  </div>
</section>
<!-- Page Content -->
</main>
<!-- Main Content -->
<script src="dist/js/svg_icons.js"></script>
<script src="dist/js/sidebar_nav.js"></script>
</body>

</html>