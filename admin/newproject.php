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
      

   


        if (empty($title) || empty($description)|| empty($price)) {
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

                /** memo igage */
                $fileName2=$_FILES['memo']['name'];
                $fileTempName2=$_FILES['memo']['tmp_name'];
                $fileSize2=$_FILES['memo']['size'];
                $fileError2=$_FILES['memo']['error'];
                $fileType2=$_FILES['memo']['type'];  
                $fileExt2=explode('.',$fileName2);
                $fileActualExt2=strtolower(end($fileExt2));
                $allaowed2=array('jpeg', 'jpg', 'png', 'gif');
                if(in_array($fileActualExt2,$allaowed2)){
                    if ($fileError2===0) {
                      if($fileSize2<1000000){
                        $fileNameNewMemo=uniqid('',true).".".$fileActualExt2;
                        $fileDestination="../upload/".$fileNameNewMemo;
                        move_uploaded_file( $fileTempName2,$fileDestination);

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
          $insrt=$db->Query("INSERT INTO `spend`(`name`, `amount`, `image`, `memo`, `details`, `time`) 
          VALUES ('$title',$price,'$fileNameNew','$fileNameNewMemo','$description',$tim)");


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
        <h1 class="add_page_title">Add New Spend</h1>
        <form id="new_product_form" action="newproject.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Spend Name</label>
                <input name="title" type="text" class="input" required />
            </div>

            <div>
                <label>Spend Description</label>
                <textarea name="description" type="text" placeholder="Portfolio Description" class="input"></textarea>
            </div>
            <div>
                <label>Price</label>
                <input name="price" type="number" class="input" required />
            </div>


            <div>
                <label>Spend Image (550X550)</label>
                <input name="img" type="file" class="input" required />
            </div>

            <div>
                <label>Memo Image (550X550)</label>
                <input name="memo" type="file" class="input" required />
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