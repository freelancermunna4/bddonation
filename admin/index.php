<?php require_once 'sidebar.php';?>
        <!-- Content -->
        <section class="content_wrapper">
            <h4 class="text-xl font-medium">Dashboard</h4>
            <br />
            <div class="home_content">
                <div class="home_card">
                    <div>
                        <div class="card_top">
                            
                            <div class="card_top_info">
                                <p class="card_top_numbers">

                                <?php
                                $totals=$db->QueryFetchArrayAll('SELECT * FROM `donate` WHERE activity=1') ;
                                 $totalhid;
                                foreach ($totals as $total) {
                                    $totalhid=$totalhid+$total['amount'];
                                  }  
                                  echo $totalhid;

                                ?>
                                </p>
                            </div>
                        </div>
                        <div class="card_bottom">
                            <div class="card_percentage">
                                <p>Total Donate Amount</p>

                            </div>
                            <div class="card_line">
                                <div style="width: 60%" class="from-blue-500 via-blue-600 to-blue-700"></div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="home_card">
                    <div>
                        <div class="card_top">
                           
                            <div class="card_top_info">
                                <p class="card_top_numbers">

                                <?php
                                $totals=$db->QueryFetchArrayAll('SELECT * FROM `spend`') ;
                                 $totalspend;
                                foreach ($totals as $total) {
                                    $totalspend=$totalspend+$total['amount'];
                                  }  
                                  echo $totalspend;

                                ?>


                                </p>
                            </div>
                        </div>
                        <div class="card_bottom">
                            <div class="card_percentage">
                                <p>Total Spend Amount</p>

                            </div>
                            <div class="card_line">
                                <div style="width: 60%" class="from-blue-500 via-blue-600 to-blue-700"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_card">
                    <div>
                        <div class="card_top">
                           
                            <div class="card_top_info">
                                <p class="card_top_numbers">

                                <?php
                                $totals=$db->QueryFetchArrayAll('SELECT * FROM `donate` WHERE activity=1') ;
                                 $totalhid=0;
                                foreach ($totals as $total) {
                                    $totalhid++;
                                  }  
                                  echo $totalhid;

                                ?>


                                </p>
                            </div>
                        </div>
                        <div class="card_bottom">
                            <div class="card_percentage">
                                <p>Total Donator</p>

                            </div>
                            <div class="card_line">
                                <div style="width: 60%" class="from-green-500 via-green-600 to-green-700"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_card">
                    <div>
                        <div class="card_top">
                          
                            <div class="card_top_info">
                                <p class="card_top_numbers">
                                   
                                <?php
                                $totals=$db->QueryFetchArrayAll('SELECT * FROM `donate` WHERE activity=0') ;
                                 $totalhid=0;
                                foreach ($totals as $total) {
                                    $totalhid++;
                                  }  
                                  echo $totalhid;

                                ?>

                                </p>
                            </div>
                        </div>
                        <div class="card_bottom">
                            <div class="card_percentage">
                                <p>Total Pending </p>
                            </div>
                            <div class="card_line">
                                <div style="width: 70%" class="from-teal-500 via-teal-600 to-teal-700"></div>
                            </div>
                        </div>
                    </div>
                </div>                  

            </div>
        </section>
        <!-- Content -->
    </main>
    <!-- Main Content -->
    <script src="dist/js/header.js"></script>
    <script src="dist/js/svg_icons.js"></script>
    <script src="dist/js/sidebar_nav.js"></script>
</body>

</html>