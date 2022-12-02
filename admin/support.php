<?php
 require_once 'sidebar.php';
?>

   

      <!-- Page Content -->
      <section class="content_wrapper">
       <?php 

       if(isset($_POST['submit'])){

        /**update site title */
          if(isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['whatsapp'])){
            $mobile=$db->EscapeString($_POST['mobile']);
            $email=$db->EscapeString($_POST['email']);
            $whatsapp=$db->EscapeString($_POST['whatsapp']);
            

            $update=$db->Query("UPDATE `support` SET `mobile`='$mobile',`email`='$email',
            `whatsapp`='$whatsapp' WHERE 1");
          
            

            echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
          }

           

 }?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE WEBSITE FOOTR INFORMATIONS</h1>
          <?php
                $update=$db->QueryFetchArray("SELECT * FROM `support` WHERE  id=1");
               ?>
          <form id="setting_form" action=""method="post">
          
            <div>
              <label>Mobile No.</label>              
              <input
                name="mobile"
                type="text"
                class="input"
                value="<?php echo $update['mobile'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Email</label>
             
              <input
                name="email"
                type="text"
                class="input"
                value="<?php echo $update['email'] ?>"
                class="title"
                required />
            </div>
            <div>
              <label>Whats App</label>
            
              <input
                name="whatsapp"
                type="text"
                class="input"
                value="<?php echo $update['whatsapp'] ?>"
                class="title"
                required />
            </div>
                 
            <button class="btn submit_btn" name="submit" type="submit">Update</button>
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
