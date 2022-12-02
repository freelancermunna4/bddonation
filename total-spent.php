<?php require_once 'common/header.php';?>

  <!-- Content Above Navbar -->
  <main class="main_column">

    <!-- Layout -->
    <div class="layout flex flex-col gap-5 md:flex-row md:justify-between">

    <?php require_once 'common/sidebar.php';?>

      <!-- Right Content Column  -->
      <div class="right_column">
        <div class="page_content_title">
          <h4>Total Spent</h4>
        </div>
        <div class="rounded max-w-[100%] overflow-x-auto">




          <!-- Table & Paginations -->
          <div class="flex w-full overflow-x-auto flex-col gap-5 items-center">
            <!-- Table -->
            <div class="overflow-x-auto rounded w-full overflow-hidden">
              <table class="w-full">
                <thead>
                  <tr>
                    <th class="table_th">Date</th>
                    <th class="table_th">Item Name</th>
                    <th class="table_th">Amount</th>
                    <th class="table_th">Image</th>
                    <th class="table_th">Memo</th>
                    <th class="table_th">Details</th>
                  </tr>
                </thead>
                <tbody class="tableappend">
                 

                </tbody>
              </table>
            </div>
            <!-- Table -->

          <!-- Pagination -->
              
          <div class="w-full flex flex-col lg:flex-row items-center gap-3 paginaton-appender">
                  
           </div>
           <!-- Pagination -->
          </div>
          <!-- Table & Paginations -->



        </div>
      </div>
      <!-- Right Content Column  -->

    </div>
  </main>


  <!-- Image Popup -->
  <div onclick="destroy_image_popup()" id="image_popup"
    class="hidden fixed inset-0 m-auto w-full h-screen bg-black bg-opacity-50 z-40"></div>

  <div id="image_popup_overlay" class=" hidden fixed inset-0 m-auto justify-center items-center w-fit h-fit z-50">

    <button onclick="destroy_image_popup()"
      class="absolute top-3 right-9 z-50 bg-white w-9 h-9 rounded-full text-black text-xl"><i
        class="fa-solid fa-xmark"></i></button>

    <img id="popup_image_link" class="max-w-[95%]" alt="">

  </div>




  <script>
    const image_popup = document.getElementById("image_popup")
    const image_popup_overlay = document.getElementById("image_popup_overlay")
    const popup_image_link = document.getElementById("popup_image_link")

    function show_popup_image(image) {
      image_popup.classList.remove('hidden')
      image_popup.classList.add('flex')
      image_popup_overlay.classList.remove('hidden')
      popup_image_link.setAttribute("src", image)
    }

    function destroy_image_popup() {
      image_popup.classList.add('hidden')
      image_popup.classList.remove('flex')
      image_popup_overlay.classList.add('hidden')
      popup_image_link.removeAttribute("src")
    }





//js code 
<?php
     $page=$db->QueryFetchArrayAll("SELECT * FROM `spend`"); 
 ?>
var shawAll=0;
var Limit=10;
var current_page=1;
var privPage;
var totalPage= Math.ceil(<?php echo count($page);?>/Limit) ;
changePage(current_page);
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


function getGata(startPos){
  $.ajax({
            type: "POST",
            url: "system/ajax.php",
            data: 'shawAll=' + shawAll + '&Limit=' + Limit+ '&pagenum=' + (startPos-1),
            success: function(z) {
              console.log(z);
              $('.tableappend').html(z);
            }
        });
}












  </script>


  <?php require_once 'common/footer.php';?>