
<?php require_once 'common/header.php';?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">
      
 <?php require_once 'common/sidebar.php';?>


    
      <!-- Right Content Column  -->
      <div class="right_column">
        <div class="page_content_title">
          <h4>DONATION</h4>
        </div>
        <div class="rounded p-5 space-y-5 bg-gray-100 dark:bg-gray-800">


          <div>
            <div class="flex flex-col lg:flex-row gap-5">

              <div class="w-full">
                <div class="w-full flex flex-col justify-start">
                  <label class="mb-1">Donation Amount</label>
                  <div class="w-full flex relative">
                    <span class="input_icon">
                      ৳
                    </span>
                    <input required id="deposit_amount_input" type="number" placeholder="100" class="input_with_icon"
                      name="email" />
                      
                  </div>
                </div>
                <div id="total_payment"></div>
              </div>

              <div class="w-full flex flex-col justify-start">
              <input style="height: 0px !important;"/> 
                          
                <label class="mb-1">Payment Method</label>                
                <select required id="select_payment_method" class="select paymethod">                
                  <option disabled selected value="">Select</option>
                </select>               
              </div>              
            </div>
            
            <div id="payment_message"></div>
          </div>

          <div class="flex border rounded p-3 items-center justify-start gap-2">
            <input class="styled-checkbox" onchange="hidem()" id="hide_entity_checkbox" type="checkbox" value="value1">            
            <label for="hide_entity_checkbox">Hide my identity!</label>
          </div>

          <div class="hide_when_check flex flex-col lg:flex-row gap-5">
            <div class="w-full flex flex-col justify-start">
              <label class="mb-1">Full name</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-user"></i>
                </span>
                <input required type="text" id="name-inpute" class="input_with_icon" placeholder="Name" />
              </div>
            </div>

            <div class="hide_when_check w-full flex flex-col justify-start">
              <label class="mb-1" for="address">Your Address</label>
              <div class="w-full flex relative">
                <span class="input_icon">
                  <i class="fa-solid fa-address-book"></i>
                </span>
                <input required type="text" class="input_with_icon" id="address" placeholder="Address" />
              </div>
            </div>
          </div>

          <div class="w-full flex flex-col justify-start">
            <label class="mb-1">Donation Cause</label>
            <select required id="select_payment_method" onchange="causeArea(this.value)"  class="select">
              <option selected value="All">All</option>
              <?php
                $cause=$db->QueryFetchArrayAll('SELECT * FROM `cause_area` ORDER BY id ASC');
                foreach ($cause as $causess) {
                echo ' <option value="'. $causess['name'].'">'. $causess['name'].'</option>';
              }
              ?>
              
            </select>
          </div>

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1" id="payment_label1">Enter Your Contact Email</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-wallet"></i>
              </span>
              <input required type="text" id="payment_input1" class="input_with_icon" name="email1"
                placeholder="Contact Email" />
            </div>
          </div>





          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1" id="payment_label">Enter Your (Email/Number)</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-wallet"></i>
              </span>
              <input required type="text" id="payment_input" class="input_with_icon" name="email"
                placeholder="Wallet" />
            </div>
          </div>

          <div class="hide_when_check w-full flex flex-col justify-start">
            <label class="mb-1">Please Enter Your Transaction ID</label>
            <div class="w-full flex relative">
              <span class="input_icon">
                <i class="fa-solid fa-file-lines"></i>
              </span>
              <input required type="text" id="trx_id" class="input_with_icon" name="email" placeholder="transaction id" />
            </div>
          </div>

          <div class="flex items-center justify-start gap-2">
            <input required class="styled-checkbox" onchange="turms()" id="checkbox2" type="checkbox" value="value1">
            <label for="checkbox2">
              I agree with <a href="term-and-condition.html" class="underline text-blue-500">terms and condition</a>
            </label>
          </div>

          <button type="submit" class="btn btn-submit">Request</button>

</div>



      </div>
      <!-- Right Content Column  -->

    </div>
  </main>

  <script src="js/donation.js"></script>


  <?php require_once 'common/footer.php';?>