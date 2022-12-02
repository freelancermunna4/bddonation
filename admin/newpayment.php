<?php

require_once 'sidebar.php';


?>
<!-- Page Content -->
<section class="content_wrapper">
    <!-- Page Details Title -->
    <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['title']) && isset($_POST['wallet'])&& isset($_POST['currency'])&& isset($_POST['info']) && isset($_POST['msg'])) {
      $title = $db->EscapeString($_POST['title']);
      $wallet = $db->EscapeString($_POST['wallet']);
      $currency = $db->EscapeString($_POST['currency']);
      $info = $db->EscapeString($_POST['info']);
      $msg = $db->EscapeString($_POST['msg']);

        if (empty($title) || empty($wallet)|| empty($currency)|| empty($info)|| empty($msg)) {
          echo '<p style="text-align: center;color: blue;">Please Compale Empty Fild</p>';
        } else {

          $tim=time();
          $insrt=$db->Query("INSERT INTO `payment_methord`(`name`, `msg`, `wallet`, `currency`, `receive_from`, `time`)
           VALUES ('$title','$msg','$wallet','$currency','$info',$tim)");


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
        <h1 class="add_page_title">Add New Payment</h1>
        <form id="new_product_form"  method="post" enctype="multipart/form-data">
            <div>
                <label>Payment Name</label>
                <input name="title" type="text" class="input" placeholder="Bkash" required />
            </div>

            <div>
                <label>Payment Wallet</label>
                <input name="wallet" type="text" class="input" placeholder="017xxxxxxxx" required />
            </div>

            <div>
                <label>Payment Currency</label>
                <input name="currency" type="text" class="input" placeholder="BDT" required />
            </div>

            <div>
                <label>Ricive Information</label>
                <input name="info" type="text" class="input" placeholder="Bkash Number" required />
            </div>

            <div>
                <label>Payment Messege</label>
                <textarea name="msg" type="text" class="input" placeholder="Send Money Bkash Personal Account" required ></textarea>
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