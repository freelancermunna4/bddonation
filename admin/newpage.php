<?php

require_once 'sidebar.php';


?>
<!-- Page Content -->
<section class="content_wrapper">
    <!-- Page Details Title -->
    <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['title']) && isset($_POST['tex'])) {
      $pnam = $db->EscapeString($_POST['pnam']);
      $title = $db->EscapeString($_POST['title']);      
      $tex = $_POST['tex'];       
      $article_code = base64_encode($tex);
          $insrt=$db->Query("INSERT INTO `page`(`pagename`, `pagetitle`, `pagediscription`) VALUES ('$pnam','$title',' $article_code')");


            if ($insrt) {
              echo '<p style="text-align: center;color: blue;">Succesfully Added Content</p>';
            }else{
              echo '<p style="text-align: center;color: blue;">Something Wrong</p>';
            }
           
        

    }
  }


  ?>


    <!-- Page Main Content -->
    <div class="add_page_main_content" style="max-width: 90%;">
        <h1 class="add_page_title">Add New Page</h1>
        <form id="new_product_form" action="" method="post" enctype="multipart/form-data">

        <div>
                <label>Page Name</label>
                <input name="pnam" type="text" class="input" required />
            </div>

            <div>
                <label>Page Title</label>
                <input name="title" type="text" class="input" required />
            </div>

            <textarea name="tex" class="tinymce" style="height: 500px;"></textarea>


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