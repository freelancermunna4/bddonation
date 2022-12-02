<?php
 require_once 'sidebar.php';
?>

   

      <!-- Page Content -->
      <section class="content_wrapper">
       <?php 

       if(isset($_POST['submit'])){

        /**update site title    */
          if(isset($_POST['smtp_host'])&&isset($_POST['smtp_port'])&&isset($_POST['smtp_username'])&&isset($_POST['smtp_password'])&&isset($_POST['site_email'])&&isset($_POST['noreply_email'])){
            $smtp_host=$db->EscapeString($_POST['smtp_host']);
            $smtp_port=$db->EscapeString($_POST['smtp_port']);
            $smtp_username=$db->EscapeString($_POST['smtp_username']);
            $smtp_password=$db->EscapeString($_POST['smtp_password']);
            $site_email=$db->EscapeString($_POST['site_email']);
            $noreply_email=$db->EscapeString($_POST['noreply_email']);
            $secured=$db->EscapeString($_POST['secured']);

            $update=$db->Query("UPDATE `site_config` SET `config_value`='$smtp_host' WHERE config_name='smtp_host'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$smtp_port' WHERE config_name='smtp_port'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$smtp_username' WHERE config_name='smtp_username'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$smtp_password' WHERE config_name='smtp_password'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$site_email' WHERE config_name='site_email'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$noreply_email' WHERE config_name='noreply_email'");
            $update=$db->Query("UPDATE `site_config` SET `config_value`='$secured' WHERE config_name='secured'");
            

            echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
          }

           

 }?>

        <!-- Page Main Content -->
        <div class="add_page_main_content">
          <h1 class="add_page_title">UPDATE WEBSITE EMAIL INFORMATIONS</h1>
          <form id="setting_form" action="mailsetting.php"method="post">

          
            <div>
              <label>Smtp Host</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='smtp_host'");
               ?>
              <input
                name="smtp_host"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Smtp Port</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='smtp_port'");
               ?>
              <input
                name="smtp_port"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>
            <div>
              <label>Smtp Username</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='smtp_username'");
               ?>
              <input
                name="smtp_username"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>
            <div>
              <label>Smtp Password</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='smtp_password'");
               ?>
              <input
                name="smtp_password"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Smtp Security (ssl/tls)</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='secured'");
               ?>
              <input
                name="secured"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>Site Email</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='site_email'");
               ?>
              <input
                name="site_email"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
                class="title"
                required />
            </div>

            <div>
              <label>No Replay Email</label>
              <?php
                $update=$db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='noreply_email'");
               ?>
              <input
                name="noreply_email"
                type="text"
                class="input"
                value="<?php echo $update['config_value'] ?>"
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
