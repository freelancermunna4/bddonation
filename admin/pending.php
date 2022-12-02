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
                        if(isset($_GET['aprov'])&&isset($_GET['id'])){
                            $id=$db->EscapeString($_GET['id']);
                            $dlt=$db->Query("UPDATE `donate` SET `activity`=1 WHERE id=$id");
                            if($dlt){
                                echo "Successfully Aproved";
                            }else{        
                                echo "Something Wrong";
                            }
                        }

                        if(isset($_GET['dlt'])&&isset($_GET['id'])){
                            $id=$db->EscapeString($_GET['id']);
                            $dlt=$db->Query("UPDATE `donate` SET `activity`=2 WHERE id=$id");
                            if($dlt){
                                echo "Successfully Deleted";
                            }else{        
                                echo "Something Wrong";
                            }
                        }
                ?>
                <div class="page_title">
                    <h4>ALL DONATIONS</h4>
                </div>
              

                <div class="table_parent">
                    <div class="table_sub_parent">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Name</span>

                                        </div>
                                    </th>
                                  
                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Admin Account</span>

                                        </div>
                                    </th>


                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Amount</span>

                                        </div>
                                    </th>

                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Send Method</span>

                                        </div>
                                    </th>

                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Send From</span>

                                        </div>
                                    </th>

                                    <th class="table_th">
                                        <div class="table_th_div">
                                            <span>Tranjection Id</span>

                                        </div>
                                    </th>


                                    <th class="table_th">
                                        <span>Action</span>
                                    </th>
                                </tr>
                                <?php 
                                $dt=$db->QueryFetchArrayAll("SELECT * FROM `donate`WHERE activity=0  ORDER BY id DESC LIMIT 50");
                                foreach ($dt as $value) { 
                                ?>
                                <tr class="cc">                                   
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['name'] ?></div>
                                    </td>
                                    
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['ricive_phon'] ?></div>
                                    </td>
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['amount'] ?></div>
                                    </td>
                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['pay_method'] ?></div>
                                    </td>

                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['email_number'] ?></div>
                                    </td>

                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="text-center"><?php echo $value['trx_id'] ?></div>
                                    </td>

                                    


                                    <td class="p-3 border whitespace-nowrap">
                                        <div class="w-full flex_center gap-1">
                                        <a href="pending.php?aprov&id=<?php echo $value['id'] ?>">
                                                <button class="btn table_view_btn">Aprove</button>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a href="pending.php?dlt&id=<?php echo $value['id'] ?>">
                                                <button class="btn table_delete_btn">Reject</button>
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
