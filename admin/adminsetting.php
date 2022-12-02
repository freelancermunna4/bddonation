<?php
 require_once 'sidebar.php';
?>

   

      <!-- Page Content -->
      <section class="content_wrapper">
       <?php 

       if(isset($_POST['submit'])){

        /**update site title */
          if(isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['whatsapp'])){
            $name=$db->EscapeString(trim($_POST['mobile']));
            $email=$db->EscapeString(trim($_POST['email']));
            $password=$db->EscapeString(trim($_POST['whatsapp']));
            

            $update=$db->Query("UPDATE `users` SET `username`='$name',`email`='$email',
            `password`='$password' WHERE 1");
          
            

            echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
          }

           

 }?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE ADMIN INFORMATIONS</h1>
          <?php
                $update=$db->QueryFetchArray("SELECT * FROM `users` WHERE  id=1");
               ?>
          <form id="setting_form" action=""method="post">
          
            <div>
              <label>Name</label>              
              <input
                name="mobile"
                type="text"
                class="input"
                value="<?php echo trim($update['username']) ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Email</label>
             
              <input
                name="email"
                type="text"
                class="input"
                value="<?php echo trim($update['email']) ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Whats App</label>
            
              <input
                name="whatsapp"
                type="text"
                class="input"
                value="<?php echo trim($update['password']) ?>"
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
