<?php
	
?> 
    <!-- Left Links Column -->
	<div class="left_column">

<div class="left_column_box">
  <h6 class="flex gap-1 items-center sm:pl-2 text-cyan-600 dark:text-cyan-500">
	<span><i class="fa-solid fa-money-bill"></i></span>
	<span>Total Funds</span>
  </h6>
  <div class="flex items-center justify-start gap-5 p-2">
	<div
	  class="w-14 h-14 bg-primary text-white rounded shadow flex items-center justify-center text-3xl font-semibold">
	  ৳
	</div>
	<div class="flex flex-col items-start space-y-1">
	  	<h4>
		<?php 
		  $totalDep= $db->QueryFetchArrayAll("SELECT * FROM `donate`WHERE activity=1"); 
		  $total=0;
		  foreach ($totalDep as $dep) {
			$total=$total+$dep['amount'];
		  }
		  echo $total;
		?>
		</h4>

	</div>
  </div>

  <div class="left_column_box_border">

	<div class="flex items-center gap-2">
	  <h6>Spend  Funds:</h6>
	  <h5>
	  <?php 
		  $spend= $db->QueryFetchArrayAll("SELECT * FROM `spend`ORDER BY id DESC"); 
		  $totalsp=0;
		  foreach ($spend as $spends) {
			$totalsp=$totalsp+$spends['amount'];
		  }
		  echo $totalsp;
		?>
	    ৳</h6>
	</div>
	<div class="flex items-center gap-2 mt-2">
	  <h6>Available Funds:</h6>
	  <h5>
	  <?php 
		 
		  echo $total-$totalsp;
		?>
	 
	 
	  ৳</h6>
	</div>

	<div
	  class="bg-gradient-to-r from-gray-200 via-gray-100 to-gray-50 dark:from-gray-600 dark:via-gray-800 dark:to-gray-800 h-0.5 w-full my-3">
	</div>
	<div class="flex gap-2">
	  <a href="donation.php" class="block w-full">
		<button class="btn block min-w-full">
		  Donate
		</button>
	  </a>
	</div>
  </div>
</div>


<div class="left_column_box">
  <h6 class="flex gap-1 items-center sm:pl-2 text-primary dark:text-cyan-500">
	<span>☰</span>
	<span>Fund Details</span>
  </h6>
  <div class="left_column_box_border flex flex-col gap-3">


	<a href="total-donation.php">
	  <button class="left_column_box_btn">
		<b><i class="fa-solid fa-wallet"></i>
		</b>
		<span>Total Donation</span>
	  </button>
	</a>

	<a href="total-spent.php">
	  <button class="left_column_box_btn">
		<b><i class="fa-solid fa-wallet"></i>
		</b>
		<span>Total Spend </span>
	  </button>
	</a>

  </div>
</div>

<div class="left_column_box">
  <h6 class="flex gap-1 items-center sm:pl-2 text-primary dark:text-cyan-500">
	<span>☰</span>
	<span>Track Transaction</span>
  </h6>
  <div class="relative w-full">
	<div class="absolute h-full flex items-center inset-y-0 left-3 my-auto text-lg"><i
		class="fa-solid fa-magnifying-glass"></i></div>
		<form name="form" action="total-donation.php" method="get">
  <input type="text" name="x" class="input pl-10" placeholder="Search by name, mobile, transaction id">
</form>

  </div>
</div>

<div class="left_column_box">
          <h6 class="flex gap-1 items-center sm:pl-2 text-primary dark:text-cyan-500">
            <span>☰</span>
            <span>Donation Causes</span>
          </h6>
          <div class="left_column_box_border flex flex-col gap-3">

		 <?php
			$cause=$db->QueryFetchArrayALL("SELECT * FROM `cause` ORDER BY id ASC");
			foreach($cause as $c){
		 ?>


            <a href="cause.php?cus=<?php echo $c['id']; ?>">
              <button class="left_column_box_btn">
                <b><i class="fa-solid fa-wallet"></i>
                </b>
                <span><?php echo $c['causename']; ?></span>
              </button>
            </a>
        <?php } ?>

          </div>
        </div>


        <div class="left_column_box">
          <h6 class="flex gap-1 items-center sm:pl-2 text-primary dark:text-cyan-500">
            <span>☰</span>
            <span>Gallery</span>
          </h6>
          <div class="left_column_box_border flex flex-col gap-3">
            <a href="gallery.php">
              <button class="left_column_box_btn">
                <b><i class="fa-solid fa-wallet"></i>
                </b>
                <span>Gallery</span>
              </button>
            </a>
          </div>
        </div>

<div class="left_column_box">
  <h6 class="flex gap-1 items-center sm:pl-2 text-primary dark:text-cyan-500">
	<span><i class="fa-solid fa-circle-info"></i></span>
	<span>
	  Support
	</span>
  </h6>
  <div class="left_column_box_border flex flex-col gap-3">
<?php $support=$db->QueryFetchArray("SELECT* FROM support WHERE id=1") ?>
	<div class="text-lg">
	  <span><i class="fa-solid fa-phone"></i></span>
	  <a href="tel:<?php echo $support['mobile'] ?>"><?php echo $support['mobile'] ?></a>
	</div>
	<div class="text-lg">
	  <span><i class="fa-solid fa-envelope"></i></span>
	  <a href="mailto:<?php echo $support['email'] ?>"><?php echo $support['email'] ?></a>
	</div>
	<div class="text-lg">
	  <span><i class="fa-brands fa-whatsapp-square"></i></span>
	  <a href="whatsapp://send?abid=<?php echo $support['whatsapp'] ?>&text=Hello%2C%20Admin!"><?php echo $support['whatsapp'] ?></a>
	</div>

  </div>
</div>
</div>
<!-- Left Links Column -->