<?php 
require_once '../include/int.php';

if(empty($data['id']) || $data['id']<1 || $data['admin']<1){    
    header("Location:login.php"); 
   exit();
   
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/css/styles.css" rel="stylesheet" />
    <script type="text/javascript" src="tinymce/js/jquery.min.js"></script>
	<script type="text/javascript" src="tinymce/plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="tinymce/plugin/tinymce/init-tinymce.js"></script>

</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header_container">
            <div class="header_left">
                <!-- LOGO -->
                <div class="header_brand">
                    <a href="<?php echo $config['site_url']; ?>/admin" class="go_home">
                        <div>
                            <span><?php echo $config['site_name']; ?></span>
                            
                        </div>
                    </a>
                </div>

                <button onclick="toggle_nav()" class="menu_icon"></button>

             
            </div>

            <div class="header_right">
                <!-- Header Notifications -->

                <?php
                    if (isset($_POST['logout'])) {
                       session_destroy();
                       header("Location:login.php"); 
                       exit();
                    }

                ?>

                <form id="notifications_button" method="post">
                        <button name="logout" type="logout" style="padding: 5px;background: #fff;border-radius: 5px;">LOG OUT</button>
                </form>
                  

                   
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->