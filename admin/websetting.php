<?php
require_once 'sidebar.php';
?>



<!-- Page Content -->
<section class="content_wrapper">
  <?php

  if (isset($_POST['submit'])) {

    /**update site title  */
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['site_url'])) {
      $title = $db->EscapeString($_POST['title']);
      $description = $db->EscapeString($_POST['description']);
      $site_url = $db->EscapeString($_POST['site_url']);
      $site_keywords = $db->EscapeString($_POST['site_keywords']);

      $update = $db->Query("UPDATE `site_config` SET `config_value`='$title' WHERE config_name='site_name'");

      $update = $db->Query("UPDATE `site_config` SET `config_value`='$description' WHERE config_name='site_description'");

      $site_url = $db->Query("UPDATE `site_config` SET `config_value`='$site_url' WHERE config_name='site_url'");
      $site_keywords = $db->Query("UPDATE `site_config` SET `config_value`='$site_keywords' WHERE config_name='site_keywords'");

      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }

    /**update Location */
    if (isset($_POST['location_title']) && isset($_POST['location_desc'])) {
      $title = $db->EscapeString($_POST['location_title']);
      $description = $db->EscapeString($_POST['location_desc']);

      $update = $db->Query("UPDATE `aboutloaction` SET `title`='$title',`discription`='$description' WHERE name='location'");

      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }

    /**update Email */
    if (isset($_POST['email']) && isset($_POST['email_desc'])) {
      $title = $db->EscapeString($_POST['email']);
      $description = $db->EscapeString($_POST['email_desc']);

      $update = $db->Query("UPDATE `aboutloaction` SET `title`='$title',`discription`='$description' WHERE name='email'");

      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }


    /**update Email */
    if (isset($_POST['telephon']) && isset($_POST['telephon_desc'])) {
      $title = $db->EscapeString($_POST['telephon']);
      $description = $db->EscapeString($_POST['telephon_desc']);

      $update = $db->Query("UPDATE `aboutloaction` SET `title`='$title',`discription`='$description' WHERE name='telephon'");

      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }


    /**update Email */
    if (isset($_POST['youtube']) && isset($_POST['linkedin']) && isset($_POST['telegram']) && isset($_POST['twitter'])) {
      $youtube = $db->EscapeString($_POST['youtube']);
      $linkedin = $db->EscapeString($_POST['linkedin']);
      $telegram = $db->EscapeString($_POST['telegram']);
      $twitter = $db->EscapeString($_POST['twitter']);

      $update = $db->Query("UPDATE `social` SET `url`='$youtube'WHERE name='youtube'");
      $update = $db->Query("UPDATE `social` SET `url`='$linkedin'WHERE name='linkedin'");
      $update = $db->Query("UPDATE `social` SET `url`='$telegram'WHERE name='telegram'");
      $twitter = $db->Query("UPDATE `social` SET `url`='$telegram'WHERE name='twitter'");
      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }

    /**update Footer logoimage */
    if (isset($_POST['cradit'])) {
      $cradit = $db->EscapeString($_POST['cradit']);

      $update = $db->Query("UPDATE `social` SET `url`='$cradit'WHERE name='copyright'");
      echo '<p style="text-align: center;color: blue;">Succesfully Update</p>';
    }
  }



  ?>

  <!-- Page Main Content -->
  <div class="add_page_main_content">
    <h1 class="add_page_title">UPDATE WEBSITE INFORMATIONS</h1>
    <form id="setting_form" action="websetting.php" method="post">


      <div>
        <label>Website Name</label>
        <?php
        $update = $db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='site_name'");
        ?>
        <input name="title" type="text" class="input" value="<?php echo $update['config_value'] ?>" class="title" required />
      </div>

      <div>
        <label>Website Description</label>
        <?php
        $update = $db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='site_description'");
        ?>
        <input name="description" type="text" value="<?php echo $update['config_value'] ?>" class="input" required />
      </div>


      <div>
        <label>Website Keyword</label>
        <?php
        $update = $db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='site_keywords'");
        ?>
        <input name="site_keywords" type="text" value="<?php echo $update['config_value'] ?>" class="input" required />
      </div>

      <div>
        <label>Website Url</label>
        <?php
        $update = $db->QueryFetchArray("SELECT * FROM `site_config` WHERE config_name='site_url'");
        ?>
        <input name="site_url" type="text" value="<?php echo $update['config_value'] ?>" class="input" required />
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