<?php
 require_once 'sidebar.php';
?>

   

      <!-- Page Content -->
      <section class="content_wrapper">
       <?php 

        /**update site title */
       if(isset($_POST['about'])){       
          if(isset($_POST['title'])&&isset($_POST['desc'])){
            $title=$db->EscapeString($_POST['title']);
            $desc=$db->EscapeString($_POST['desc']);
            $update=$db->Query("UPDATE `page` SET  `pagetitle`='$title',`pagediscription`='$desc' WHERE id=1");
          

            echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
          }}
          

          
        /**update site title */
       if(isset($_POST['trms'])){       
        if(isset($_POST['title'])&&isset($_POST['desc'])){
          $title=$_POST['title'];
          $desc=$_POST['desc'];
          $update=$db->Query("UPDATE `page` SET  `pagetitle`='$title',`pagediscription`='$desc' WHERE id=2");
        

          echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
        }}
        
          /**update site title */
       if(isset($_POST['policy'])){       
        if(isset($_POST['title'])&&isset($_POST['desc'])){
          $title=$db->EscapeString($_POST['title']);
          $desc=$db->EscapeString($_POST['desc']);
          $update=$db->Query("UPDATE `page` SET  `pagetitle`='$title',`pagediscription`='$desc' WHERE id=3");

          echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
        }} 
          


          



        
          
          ?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE About Us</h1>
          <?php
                $updat=$db->QueryFetchArray("SELECT * FROM `page` WHERE  id=1");
               ?>
          <form id="setting_form" action=""method="post">   
          <div>
              <label>Title</label>              
              <input
                name="title"
                type="text"
                class="input"
                value="<?php echo $updat['pagetitle'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Discription</label>              
              <textarea
                name="desc"
                type="text"
                class="input"
                class="title"
                required ><?php echo $updat['pagediscription'] ?></textarea>
            </div>           
                 
            <button class="btn submit_btn" name="about" type="submit">Update</button>
          </form>          
        </div>

 <!-- Page Main Content -->
 <div class="add_page_main_content" style="margin-top: 10px;">
          <h1 class="add_page_title">UPDATE Terms and Condition</h1>
          <?php
                $updat=$db->QueryFetchArray("SELECT * FROM `page` WHERE  id=2");
               ?>
          <form id="setting_form" action=""method="post">   
          <div>
              <label>Title</label>              
              <input
                name="title"
                type="text"
                class="input"
                value="<?php echo $updat['pagetitle'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Discription</label>              
              <textarea
                name="desc"
                type="text"
                class="input"
                class="title"
                required ><?php echo $updat['pagediscription'] ?></textarea>
            </div>           
                 
            <button class="btn submit_btn" name="trms" type="submit">Update</button>
          </form>          
        </div>

        
       <!-- Page Main Content -->
 <div class="add_page_main_content" style="margin-top: 10px;">
          <h1 class="add_page_title">UPDATE Privecy and Policy</h1>
          <?php
                $updat=$db->QueryFetchArray("SELECT * FROM `page` WHERE  id=3");
               ?>
          <form id="setting_form" action=""method="post">   
          <div>
              <label>Title</label>              
              <input
                name="title"
                type="text"
                class="input"
                value="<?php echo $updat['pagetitle'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Discription</label>              
              <textarea
                name="desc"
                type="text"
                class="input"
                class="title"
                required ><?php echo $updat['pagediscription'] ?></textarea>
            </div>           
                 
            <button class="btn submit_btn" name="policy" type="submit">Update</button>
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
