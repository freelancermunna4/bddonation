<?php
	require_once"include/int.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Public Fund</title>
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/6788eb3be6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
</head>

<body>
  <!-- navbar -->
  <nav class="nav">

    <!-- Layout -->
    <div class="layout h-full">
      <div class="nav_content">
        <!-- NavbarLogo -->
        <a href="index.php">
          <div class="flex items-center justify-center text-2xl font-bold">
            <span class="text-white"><?php echo $config['site_name']; ?> </span>
            <span class="ml-1 text-white"><i class="fa-solid fa-hand-holding-medical"></i></span>
          </div>
        </a>

        <!-- Dark/Light Theme Toggler -->
        <a href="#" class="ml-auto shadow bg-gray-800 mr-4 p-1 rounded-full focus:ring border-0" id="theme-toggle">
          <svg id="theme-toggle-dark-icon" viewBox="0 0 24 24" fill="none" class="hidden w-5 h-5">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z">
            </path>


            <path
              d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z"
              class="fill-sky-500"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z"
              class="fill-sky-500"></path>
          </svg>
          <svg id="theme-toggle-light-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="hidden w-5 h-5">
            <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-sky-500"></path>
            <path
              d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836"
              class="stroke-sky-500"></path>
          </svg>
        </a>

         <!-- Navbar Toggler For Mobile Device -->
         <a href="#" id="toggle_nav_items">
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </a>

        <!-- Navbar Items Overlay For Mobile Device -->
        <div id="nav_items_overaly" class="hidden fixed inset-0 w-full h-full z-40"></div>

        <!-- Nav Links Items -->
        <div id="nav_items">

          <div class="9h:h-[70px] relative flex items-center">
            <button class="nav_sibling_toggler">
              <b class="w-5 block">☰</b>
              <span>Donation Causes</span>
            </button>            
            <div style="transform: scaleY(0)" class="header_sibling_items">

            <?php 
              $caus=$db->QueryFetchArrayALL("SELECT * FROM `cause` ORDER BY id ASC");

              foreach($caus as $p){
                echo '<a href="cause.php?cus='.$p['id'].'" class="nav_items_link"><span>'.$p['causename'].'</span></a>';
              }
            ?>

             
            </div>
          </div>

          <div class="9h:h-[70px] relative flex items-center">
            <button class="nav_sibling_toggler">
              <b class="w-5 block">☰</b>
              <span>Page</span>
            </button>
            <div style="transform: scaleY(0)" class="header_sibling_items">
            <?php 
              $page=$db->QueryFetchArrayALL("SELECT * FROM `page` ORDER BY id ASC");

              foreach($page as $p){
                echo '<a href="page.php?pg='.$p['id'].'" class="nav_items_link"><span>'.$p['pagename'].'</span></a>';
              }
            ?>
              
            
            </div>
          </div>

          <a href="contact-us.php">
            <button class="nav_sibling_toggler">
              <b><i class="fa-solid fa-envelope"></i></b>
              <span> Contact US </span>
            </button>
          </a>

          <a href="donation.php" class="px-5 py-2 bg-white text-black rounded focus:ring">
            <button class="">
              <b><i class="fa-solid fa-hand-holding-medical"></i></b>
              <span> Donation </span>
            </button>
          </a>

        </div>

        <!-- For Alert Message -->

        <div class="absolute top-0 right-0" id="alert_container">

        </div>
        <!-- For Alert Message -->
      </div>
    </div>

  </nav> 