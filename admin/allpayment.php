<?php 

require_once 'sidebar.php';

?>


<!-- Page Content -->
<section class="content_wrapper">
    <!-- Page Main Content -->
    <section class="page_main_content">
        <div class="main_content_container">
            <!-- Table -->
            <div class="table_content_wrapper">
                <?php
                       

                        if(isset($_GET['dlt'])&&isset($_GET['id'])){
                            $id=$db->EscapeString($_GET['id']);
                            $dlt=$db->Query("DELETE FROM `payment_methord` WHERE id=$id");
                            if($dlt){
                                echo "Successfully Deleted";
                            }else{        
                                echo "Something Wrong";
                            }
                        }
                ?>
                <div class="page_title">
                    <h4>ALL CAUSES</h4>
                </div>
              

                <div class="table_parent">
                    <div class="table_sub_parent">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Payment Name</span>

                                        </div>
                                    </th>


                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Payment Wallet</span>

                                        </div>
                                    </th>


                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Payment Currency</span>

                                        </div>
                                    </th>
                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Ricive Information</span>

                                        </div>
                                    </th>
                                    

                                   

                                   


                                    <th class="table_th">
                                        <span>Action</span>
                                    </th>
                                </tr>
                                <?php 
                                $dt=$db->QueryFetchArrayAll("SELECT * FROM `payment_methord` ORDER BY id ASC");
                                foreach ($dt as $value) { 
                                ?>
                                <tr class="cc">                                   
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['name'] ?></div>
                                    </td>
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['wallet'] ?></div>
                                    </td>

                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['currency'] ?></div>
                                    </td>

                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['receive_from'] ?></div>
                                    </td>


                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="w-full flex_center gap-1">

                                            <a href="allpayment.php?dlt&id=<?php echo $value['id'] ?>">
                                                <button class="btn table_delete_btn">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <?php }?>
                            </thead>
                            <tbody id="category_wrapper" class="text-sm"></tbody>
                        </table>
                    </div>
                </div>




            </div>
        </div>
    </section>
</section>
<!-- Page Content -->
</main>
<!-- Main Content -->
<script src="dist/js/svg_icons.js"></script>
<script src="dist/js/sidebar_nav.js"></script>
</body>

</html>