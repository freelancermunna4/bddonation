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
            Do you need some money?
          </h5>
          <p>
            Who doesn't need money? Start earning free coins by watching YouTube
            videos. Is free and it take a couple of minutes to earn coins and
            convert them in real cash, paid to you using our payment methods.
          </p>
        </div>

        <div class="bg-gray-100 dark:bg-gray-800 p-5 rounded shadow w-full">
          <h5 class="text-primary dark:text-orange-400">
            Invite your friends and get more coins!
          </h5>
          <p class="my-3">
            Invite your friends using your special affiliate URL and receive
            0% of their earnings for life
          </p>
          <div class="relative">
            <input id="copy_ref_val"
              class="p-3 w-full text-xs sm:text-base font-semibold dark:bg-gray-300 text-black outline-none rounded-sm ring-1 shadow"
              type="text" value="https://Public Fund.com/?ref=8" />
            <button id="copy_ref_btn" class="absolute text-primary inset-y-0 right-2 flex items-center">
              <i class="fas fa-copy"></i>
            </button>
          </div>
        </div>

        <div class="w-full">
          <iframe class="w-full rounded overflow-hidden h-[425px]" src="https://www.youtube.com/embed/CEyJRj0zMrg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
      <!-- Right Content Column  -->

    </div>
  </main>

  <script src="js/nav.js"></script>
  <script src="js/index.js"></script>

  <?php require_once 'common/footer.php';?>