<?php require_once 'common/header.php';


?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

    <?php require_once 'common/sidebar.php';?>

      <!-- Right Content Column  -->
      <div class="right_column 9h:px-2">
        <div class="page_content_title">
          <h4>Total Donation</h4>
        </div>
        <div class="w-full flex flex-col justify-between items-center md:flex-row gap-5">
          <select onchange="changeShaw(this.value)" class="select md:w-96 w-full">
            <option value="0">All</option>
            <option value="1">Accepted</option>
            <option value="2">Rejected</option>
          </select>
          <div class="relative block md:w-96 w-full">
            <div class="absolute h-full flex items-center inset-y-0 left-3 my-auto text-lg"><i
                class="fa-solid fa-magnifying-glass"></i></div>
            <input onkeyup="searCh(this.value)" type="text" class="input pl-10" placeholder="Search by name, mobile">
          </div>
        </div>

        <!-- Table & Paginations -->
        <div class="flex w-full overflow-x-auto flex-col gap-5 items-center">
          <!-- Table -->
          <div class="overflow-x-auto rounded w-full overflow-hidden">
            <table class="w-full">
              <thead>
                <tr>
                <th class="table_th">Date & Time</th>
                        <th class="table_th">Name</th>
                        <th class="table_th">Contact Number</th>
                        <th class="table_th">Address</th>                       
                        <th class="table_th">Donation Cause</th>  
                        <th class="table_th">Amount</th>
                        <th class="table_th">Payment Method</th>
                        <th class="table_th">Transaction ID</th>
                        <th class="table_th">Reason</th> 
                        <th class="table_th">Status</th>
                </tr>
              </thead>
              <tbody class="tableappend">
               
             
              </tbody>
            </table>
          </div>
          <!-- Table -->

          <!-- Pagination -->
          <?php
          $page=$db->QueryFetchArrayAll("SELECT * FROM `donate`"); 
          ?>
           <div class="w-full flex flex-col lg:flex-row items-center gap-3 paginaton-appender">

              
              </div>
          <!-- Pagination -->
        </div>
        <!-- Table & Paginations -->

      </div>
      <!-- Right Content Column  -->

    </div>
  </main>





<?php require_once 'common/footer.php';?>
<script>
var shawAll=0;
var Limit=10;
var current_page=1;
<?php
if(isset($_GET['x'])){
  $x=$db->EscapeString($_GET['x']); 
  echo " searCh(".$x.");";
  }else{
    echo "changePage(current_page);";
  }
?>



var privPage;
var totalPage= Math.ceil(<?php echo count($page);?>/Limit) ;

function prevPage(page){
    if (page > 5) {
      current_page=page-5;       
    }else{
      current_page=1;
    }
    changePage(current_page);
}

function nextPage(page){
    if (page < totalPage) {
        current_page++;
        
    }else{
      current_page=page;
    }
    changePage(current_page);
}

function changePage(page){
  current_page=page;
  getGata(current_page);
 var btn_next = document.getElementById("btn_next");
   var data='<div class="w-full lg:w-fit p-2.5 lg:p-4 bg-white dark:bg-gray-800 rounded shadow flex gap-3 justify-center">'+
                '<span>Page</span>'+
                '<span>'+current_page+'</span>'+
                '<span>of</span>'+
               ' <span>'+totalPage+'</span>'+
              '</div>'+
              '<ul class="w-full flex justify-between items-center">'+
               ' <li class="w-full">'+
                 ' <a href="#" onclick="prevPage('+current_page+')" class="flex justify-center items-center p-2.5 lg:p-4 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'+
                   ' <span class="sr-only">Previous</span>'+
                    '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"  clip-rule="evenodd"></path>'+
                   ' </svg>'+
                  '</a>'+
                '</li>';

                
          var dta2="";
          for(var i=0; i<5; i++){
            if(current_page<totalPage){ 
              current_page++;        
             var dta2=dta2+'<li class="w-full" onclick="changePage('+current_page+')">'+
                            '<a href="#" class="p-2.5 lg:p-4 block w-full text-center bg-white dark:bg-gray-800 dark:text-white border-r text-base font-medium border-gray-300 dark:border-gray-700">'+current_page+'</a>'+
                        '</li>';     
            }
            
          }
          var data3='<li class="w-full">'+
                 ' <a href="#" onclick="nextPage('+current_page+')" class="flex justify-center items-center p-2.5 lg:p-4 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'+
                   ' <span class="sr-only">Next</span>'+
                    '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">'+
                     '<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>'+
                    '</svg>'+
                  '</a>'+
                '</li>'+
             ' </ul>';
   $('.paginaton-appender').html(data+dta2+data3);

 
  
}
 





function changeShaw(params) {
  shawAll=params;
  getGata(current_page);
}

function getGata(startPos){
  $.ajax({
            type: "POST",
            url: "system/ajax.php",
            data: 'shawAll=' + shawAll + '&Limit=' + Limit+ '&current_page=' + (startPos-1),
            success: function(z) {
              $('.tableappend').html(z);
            }
        });
}

function searCh(e) { 
  $.ajax({
            type: "POST",
            url: "system/ajax.php",
            data: 'serchDonator=' + e + '&limit=' + Limit,
            success: function(z) {
              $('.tableappend').html(z);
            }
        });

}




</script>