<?php
 require_once 'sidebar.php';

?>
      <!-- Page Content -->
      
<?php 



if(isset($_GET['id']) && isset($_POST['submit'])&& !empty($_POST['message'])){
  $id=$db->EscapeString($_GET['id']);
  $sms_d=$db->EscapeString($_POST['message']);
  $addr=$db->QueryFetchArray("SELECT * FROM `contact` WHERE id=$id");
  $addres=$addr['email'];
  $uname=trim($addr['name']);
  
  $smtp_host=$config['smtp_host'];
  $smtp_username=$config['smtp_username'];
  $smtp_password=$config['smtp_password'];
  $smtp_port=$config['smtp_port'];
  $smtp_secure=$config['secured'];
  $site_email=$config['site_email'];
  $sitename=$config['site_name']; 

 
  sendVarifyCode($smtp_host,$smtp_username,$smtp_password,$smtp_port,$smtp_secure,$site_email,$sitename,$addres,$sms_d,$uname,$id);
  $updt=$db->Query("UPDATE contact SET reply=1 WHERE id=$id");
}
else if(isset($_GET['id'])){
        $id=$db->EscapeString($_GET['id']);
      $user=$db->QueryFetchArray("SELECT * FROM `contact` WHERE id=$id ORDER BY id DESC LIMIT 1");
     ?>

    <section class="content_wrapper">
        <!-- Page Main Content -->
        <div class="add_page_main_content">
          
          <form id="setting_form" action=""method="post">
           
            <div class="col-span-12 flex flex-col">
            <div class="messege" style="padding: 5px;margin-bottom: 10px;color: #3b07f4;border: 2px solid;">
                <?php echo $user['msg']; ?>
              </div>

                        <label for="message">Replay Message</label>
                        <textarea  name="message" class="input min-h-[180px]" id="message" placeholder="Your message..."></textarea>
             </div>      
            <button class="btn submit_btn" name="submit" type="submit">Send</button>            
           
          </form>
          
        </div>
      </section>
      <?php } ?>
      <!-- Page Content -->
    </main>
    <!-- Main Content -->
    <script src="dist/js/svg_icons.js"></script>
    <script src="dist/js/sidebar_nav.js"></script>
  </body>
</html>
<?php
      function sendVarifyCode($smtp_host,$smtp_username,$smtp_password,$smtp_port,$smtp_secure,$site_email,$sitename,$addres,$sms_d,$uname,$id){

        require '../PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 4;                             // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = $smtp_host;  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = $smtp_username;                 // SMTP username
          $mail->Password = $smtp_password;                           // SMTP password
          $mail->SMTPSecure = $smtp_secure;                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = $smtp_port;                                    // TCP port to connect to

          $mail->setFrom($site_email,$sitename);
          $mail->addAddress($addres);     // Add a recipient
          $mail->addReplyTo($site_email, 'Noreplay');

        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Hello '.$uname;
        $mail->Body    = $sms_d;

        if(!$mail->send()) {
            echo 'Code could not be sent.';
          // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
          
            echo 'Submited your Mail...';
            
        }
      }
?>