<?php
 require_once 'common/header.php';

if(isset($_GET['cus'])){
  $id=$_GET['cus'];
?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

    <?php require_once 'common/sidebar.php';?>

    <?php 
    $dsc=$db->QueryFetchArray("SELECT * FROM `cause` WHERE id=".$id);
    ?>

      <!-- Right Content Column  -->
      <div class="right_column">
        <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded shadow w-full">
          <h5 class="text-primary dark:text-orange-400 mb-3">
            <?php echo $dsc['causetitle'] ?>
          </h5>
          <p>
          <?php echo base64_decode($dsc['causediscription']);?>
          </p>
        </div>

       
      </div>
      <!-- Right Content Column  -->

    </div>
  </main>

  <?php }else{
  ?>
<!-- Content Above Navbar -->
<main class="main_column">

<!-- Layout -->
<div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

<?php require_once 'common/sidebar.php';?>



  <!-- Right Content Column  -->
  <div class="right_column">
    <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded shadow w-full">
      <h5 class="text-primary dark:text-orange-400 mb-3">
       404
      </h5>
      <p>
      Not Found any Cause Area ..!
      </p>
    </div>

   
  </div>
  <!-- Right Content Column  -->

</div>
</main>


<?php
  } 
  ?>
  <script src="js/nav.js"></script>
  <script src="js/index.js"></script>

  <?php require_once 'common/footer.php';?>