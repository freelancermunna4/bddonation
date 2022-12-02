<?php

require_once 'sidebar.php';


?>
<!-- Page Content -->
<section class="content_wrapper">
    <!-- Page Details Title -->
    <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['title']) && isset($_FILES['img'])) {
      $title = $db->EscapeString($_POST['title']);


        if (empty($title) ) {
          echo '<p style="text-align: center;color: blue;">Please Compale Empty Fild</p>';
        } else {


         

          /**  image */
          $fileName=$_FILES['img']['name'];
          $fileTempName=$_FILES['img']['tmp_name'];
          $fileSize=$_FILES['img']['size'];
          $fileError=$_FILES['img']['error'];
          $fileType=$_FILES['img']['type'];  
          $fileExt=explode('.',$fileName);
          $fileActualExt=strtolower(end($fileExt));
          $allaowed=array('jpeg', 'jpg', 'png', 'gif');
          if(in_array($fileActualExt,$allaowed)){
              if ($fileError===0) {
                if($fileSize<1000000){
                  $fileNameNew=uniqid('',true).".".$fileActualExt;
                  $fileDestination="../upload/".$fileNameNew;
                  move_uploaded_file( $fileTempName,$fileDestination);
  
                }else{
                  echo "Your file is too big!";
                  exit;
                }
                
              }else{
                echo "There is an Error uploading your file!";
                exit;
              }
          }else{
            echo "You cannot upload files this type !";
            exit;
          }

          $tim=time();
          $insrt=$db->Query("INSERT INTO `gallery`(`name`, `image`, `time`) VALUES ('$title','$fileNameNew',$tim)");


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
        <h1 class="add_page_title">Add New Gallery</h1>
        <form id="new_product_form" action="newgallery.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Gallery Name</label>
                <input name="title" type="text" class="input" required />
            </div>

          

            <div>
                <label>Gallery Image (550X550)</label>
                <input name="img" type="file" class="input" required />
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