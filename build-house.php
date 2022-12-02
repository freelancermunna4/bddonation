<?php require_once 'common/header.php';?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

    <?php require_once 'common/sidebar.php';?>

      <!-- Right Content Column  -->
      <div class="right_column">
        <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded shadow w-full">
          <h5 class="text-primary dark:text-orange-400 mb-3">
            Do you need help ?
          </h5>
          <p>
            Who doesn't need money? Start earning free coins by watching YouTube
            videos. Is free and it take a couple of minutes to earn coins and
            convert them in real cash, paid to you using our payment methods.
          </p>
        </div>

        <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded shadow w-full">
          <h5 class="text-primary dark:text-orange-400 mb-3">
            Do you need some money?
          </h5>
          <p>
            Who doesn't need money? Start earning free coins by watching YouTube
            videos. Is free and it take a couple of minutes to earn coins and
            convert them in real cash, paid to you using our payment methods.
          </p>
        </div>

        <div>
          <iframe class="w-full rounded overflow-hidden h-[425px]" src="https://www.youtube.com/embed/CEyJRj0zMrg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>

      </div>
    </div>
    <!-- Right Content Column  -->

    </div>
  </main>

  
  <?php require_once 'common/footer.php';?>