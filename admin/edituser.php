<?php

require_once 'sidebar.php';


if (isset($_POST['submit'])) {
  if (isset($_POST['title']) && isset($_POST['email']) && 
  isset($_POST['adress'])&& isset($_POST['amount'])&& isset($_POST['method'])
  && isset($_POST['bankinfo'])&& isset($_POST['trxid'])&& isset($_POST['ids'])) {

    $name = trim($db->EscapeString($_POST['title']));
    $email = $db->EscapeString($_POST['email']);
    $adress = $db->EscapeString($_POST['adress']);
    $amount = $db->EscapeString($_POST['amount']);
    $method = $db->EscapeString($_POST['method']);
    $bankinfo = $db->EscapeString($_POST['bankinfo']);
    $trxid = $db->EscapeString($_POST['trxid']);
    $uid = $db->EscapeString($_POST['ids']);
    

    /**,`passwords`='[value-5]' */
    
    $insrt = $db->Query("UPDATE `donate` SET `pay_method`='$method',`amount`='$amount',`name`='$name',
    `email_number`='$bankinfo',`mail`='$email',`address`='$adress',`trx_id`='$trxid' WHERE id=$uid");

    if ($insrt) {
      echo '<p style="text-align: center;color: blue;">Succesfully Update Coustomer Information</p>';
    } else {
      echo '<p style="text-align: center;color: blue;">Something Wrong</p>';
    }
  }
}




if (isset($_GET['edit']) && isset($_GET['id'])) {
  $i = $_GET['id'];
  $user = $db->QueryFetchArray("SELECT * FROM `donate` WHERE id=$i");

?>
  <!-- Page Content -->
  <section class="content_wrapper">
    <!-- Page Details Title -->



    <!-- Page Main Content -->
    <div class="add_page_main_content">
      <h1 class="add_page_title">Edit Donator</h1>
      <form id="new_product_form" action="edituser.php" method="post" enctype="multipart/form-data">
        <div>
          <label> Name</label>
          <input name="title" type="text" value="<?php echo $user['name']?>" class="input" required />
        </div>

        <div>
          <label>Contact Email</label>
          <input name="email" type="email" value="<?php echo $user['mail'] ?>" class="input" required />
        </div>
        <div>
          <label>Address</label>
          <input name="adress" type="text" value="<?php echo $user['address'] ?>" class="input" required />
        </div>
        <div>
          <label>Amount</label>
          <input name="amount" type="text" value="<?php echo $user['amount'] ?>" class="input" required />
        </div>
        <div>
          <label>Payment Method</label>
          <input name="method" type="text" value="<?php echo trim($user['pay_method']); ?>" class="input" required />
        </div>
        <div>
          <label>Sender Number/Email/BankInfo</label>
          <input name="bankinfo" type="text" value="<?php echo $user['email_number'] ?>" class="input" required />
        </div>
        <div>
          <label>Transaction id</label>
          <input name="trxid" type="text" value="<?php echo $user['trx_id'] ?>" class="input" required />
        </div>

        <div>         
          <input name="ids" type="text" class="input"  value="<?php echo $user['id'] ?>" style="display: none;" required />
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

<?php
} else {
  header("Location:alluser.php");
}
?>