<?php
 require_once 'sidebar.php';
?>

   

      <!-- Page Content -->
      <section class="content_wrapper">
       <?php 

       if(isset($_POST['submit'])){

        /**update site title */
          if(isset($_POST['copiright'])&&isset($_POST['facebook'])&&isset($_POST['instagram'])&&isset($_POST['twiter'])&&isset($_POST['github'])){
            $copiright=$db->EscapeString($_POST['copiright']);
            $facebook=$db->EscapeString($_POST['facebook']);
            $instagram=$db->EscapeString($_POST['instagram']);
            $twiter=$db->EscapeString($_POST['twiter']);
            $github=$db->EscapeString($_POST['github']);
            

            $update=$db->Query("UPDATE `footer` SET `copiright`='$copiright',`facebook`='$facebook',
            `instagram`='$instagram',`twiter`='$twiter',`github`=' $github' WHERE 1");
          
            

            echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
          }

           

 }?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE WEBSITE FOOTR INFORMATIONS</h1>
          <?php
                $update=$db->QueryFetchArray("SELECT * FROM `footer` WHERE  id=1");
               ?>
          <form id="setting_form" action="footer.php"method="post">
          
            <div>
              <label>Copiright</label>              
              <input
                name="copiright"
                type="text"
                class="input"
                value="<?php echo $update['copiright'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Facebook</label>
             
              <input
                name="facebook"
                type="text"
                class="input"
                value="<?php echo $update['facebook'] ?>"
                class="title"
                required />
            </div>
            <div>
              <label>Instagram</label>
            
              <input
                name="instagram"
                type="text"
                class="input"
                value="<?php echo $update['instagram'] ?>"
                class="title"
                required />
            </div>
            <div>
              <label>Twitter</label>
            
              <input
                name="twiter"
                type="text"
                class="input"
                value="<?php echo $update['twiter'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Github</label>
            
              <input
                name="github"
                type="text"
                class="input"
                value="<?php echo $update['github'] ?>"
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
