<?php
define('IS_AJAX', true);
require('../include/int.php');
//SELECT * FROM `donate` ORDER BY id ASC LIMIT 1,10
//pass: V7b6Zn+q5Tv5

if(isset($_POST['getBank'])){
  $getBank= $db->QueryFetchArrayAll("SELECT * FROM `payment_methord` ORDER BY id ASC "); 

  $a=array();

  foreach ($getBank as $bank) { 

    $b=array(
      "message", $bank['name'],
      "wallet",  $bank['msg'],
      "currency",  $bank['currency'],
      "receive_from",  $bank['receive_from'],

    );

    array_push($a,
    $bank['name'],
    $b
    );
  }
  echo json_encode($a);
}


/* start of donation fund function by arif*/
if(isset($_POST['amount'])&&isset($_POST['paymethod'])&&isset($_POST['name_inpute'])&&isset($_POST['cause_area'])&&isset($_POST['email_input'])&&isset($_POST['payment_input'])&&isset($_POST['trx_id'])&&isset($_POST['address'])){
  
  $amount=$db->EscapeString($_POST['amount']);
  $paymethod=$db->EscapeString($_POST['paymethod']);
  $riciveNumber=$db->EscapeString($_POST['riciveNumber']);
  $name_inpute=$db->EscapeString($_POST['name_inpute']);
  $cause_area=$db->EscapeString($_POST['cause_area']);
  $email_input=$db->EscapeString($_POST['email_input']);
  $payment_input=$db->EscapeString($_POST['payment_input']);
  $trx_id=$db->EscapeString($_POST['trx_id']);
  $address=$db->EscapeString($_POST['address']);
  $tim=time();
 
  
  
  $subminDonation= $db->Query("INSERT INTO `donate`( `pay_method`, `amount`, `ricive_phon`, `name`, `cause`, `email_number`, `mail`, `address`, `trx_id`, `reason`, `time`) 
  VALUES ('$paymethod','$amount','$riciveNumber','$name_inpute','$cause_area','$payment_input','$email_input','$address','$trx_id','waiting',$tim)");

   if ($subminDonation) {
    echo "Success";
  }else{
   echo "Something Wrong";
  }
  
 

}

//set hide donator by arif  
if(isset($_POST['amount'])&&isset($_POST['paymethod']) &&isset($_POST['riciveNumber'])&&isset($_POST['cause_area'])&&isset($_POST['hidden'])){
  
  $amount=$db->EscapeString($_POST['amount']);
  $paymethod=$db->EscapeString($_POST['paymethod']);
  $cause_area=$db->EscapeString($_POST['cause_area']);  
  $riciveNumber=$db->EscapeString($_POST['riciveNumber']);
  $tim=time();


  $subminDon= $db->Query("INSERT INTO `hide_donate`( `pay_method`,`amount`, `ricive_phon`,`cause`, `time`)
   VALUES ('$paymethod',$amount,'$riciveNumber','$cause_area',$tim)");

   if ($subminDon) {
    echo "Success";
   }else{
    echo "Something Wrong";
   }
  
 

}


/* serch from by arif */
if(isset($_POST['serchDonator'])&&isset($_POST['limit'])){

  $serchDonator=$db->EscapeString($_POST['serchDonator']);
  $limit=$db->EscapeString($_POST['limit']);
  $result= $db->QueryFetchArrayAll("SELECT * FROM `donate` WHERE name LIKE '%$serchDonator%' OR email_number LIKE '%$serchDonator%' OR address LIKE '%$serchDonator%'OR trx_id LIKE '%$serchDonator%' ORDER BY id ASC LIMIT  $limit");

  foreach ($result as $results) {

    $activity='<td class="table_td font-bold yo">Pending</td>';     
    if ($results['activity']==1) {
      $activity='<td class="table_td font-bold grn">Accepted</td>';
    }
    if ($results['activity']==2) {
      $activity='<td class="table_td font-bold red">Reject</td>';
    }
////
    $email_number = substr($results['email_number'], -2);
    $email_f='**********'.$email_number;
////

    $pay_method = substr($results['pay_method'], -2);
    $pay_methodf='**********'.$pay_method;
    ///

    echo '<tr>
    <td class="table_td" style="min-width: 160px;">
        <span>'.date('d-m-Y',$results['time']).'</span>
        <br>
        <span>'.date('h:i a',$results['time']).'</span>
      </td>
      <td class="table_td">'.$results['name'].'</td>      
      <td class="table_td">'.$email_f.'</td>
      <td class="table_td">'.$results['address'].'</td>
      <td class="table_td">'.$results['cause'].'</td>
      <td class="table_td">'.$results['amount'].' ৳</td>      
      <td class="table_td">'.$pay_methodf.'</td>
      <td class="table_td">'.$results['trx_id'].'</td>
      <td class="table_td">'.$results['reason'].'</td>
    '.$activity.'   
   </tr>';
  }
} 

/* get data from by arif */
if(isset($_POST['shawAll'])&&isset($_POST['Limit'])&&isset($_POST['current_page'])){

  $shawAll=$db->EscapeString($_POST['shawAll']);
  $Limit=$db->EscapeString($_POST['Limit']);
  $current_page=$db->EscapeString($_POST['current_page']);
  $result="";
  if($shawAll != 0){
    $result= $db->QueryFetchArrayAll(" SELECT * FROM `donate` WHERE activity= $shawAll ORDER BY id DESC LIMIT $current_page, $Limit");
    
  }else{
    $result= $db->QueryFetchArrayAll(" SELECT * FROM `donate` ORDER BY id DESC LIMIT $current_page,$Limit");
  }
  

  foreach ($result as $results) {

      $activity='<td class="table_td font-bold yo">Pending</td>';     
      if ($results['activity']==1) {
        $activity='<td class="table_td font-bold grn">Accepted</td>';
      }
      if ($results['activity']==2) {
        $activity='<td class="table_td font-bold red">Reject</td>';
      }

      $email_number = substr($results['email_number'], -2);
      $email_f='**********'.$email_number;
  ////
  
      $pay_method = substr($results['pay_method'], -2);
      $pay_methodf='**********'.$pay_method;
      ///

      echo '<tr>
      <td class="table_td" style="min-width: 160px;">
        <span>'.date('d-m-Y',$results['time']).'</span>
        <br>
        <span>'.date('h:i a',$results['time']).'</span>
      </td>
      <td class="table_td">'.$results['name'].'</td>      
      <td class="table_td">'.$email_f.'</td>
      <td class="table_td">'.$results['address'].'</td>
      <td class="table_td">'.$results['cause'].'</td>
      <td class="table_td">'.$results['amount'].' ৳</td>      
      <td class="table_td">'.$pay_methodf.'</td>
      <td class="table_td">'.$results['trx_id'].'</td>
      <td class="table_td">'.$results['reason'].'</td>
      
     
      '.$activity.'   
    </tr>';
    }
}  
/* end of donation fund function by arif*/



/* start of spand page function by arif*/
if(isset($_POST['shawAll'])&&isset($_POST['Limit'])&&isset($_POST['pagenum'])){

  $shawAll=$db->EscapeString($_POST['shawAll']);
  $Limit=$db->EscapeString($_POST['Limit']);
  $current_page=$db->EscapeString($_POST['pagenum']);
  $result="";
 
  $result= $db->QueryFetchArrayAll("SELECT * FROM `spend` ORDER BY id DESC LIMIT $current_page,$Limit");
 
  

  foreach ($result as $results) {

     echo '<tr>
                    <td class="table_td" style="min-width: 160px;">
                      <span>'.date('d-m-Y',$results['time']).'</span>
                      <br>
                      <span>'.date('h:i a',$results['time']).'</span>
                    </td>
                    <td class="table_td">'.$results['name'].'</td>image
                    <td class="table_td">'.$results['amount'].'</td>
                    <td class="table_td">
                      <img onclick="show_popup_image(`upload/'.$results['image'].'`)"
                        class="w-20 rounded-sm" src="upload/'.$results['image'].'"
                        alt="'.$results['name'].'">
                    </td>

                    <td class="table_td">
                      <img onclick="show_popup_image(`upload/'.$results['memo'].'`)"
                        class="w-20 rounded-sm" src="upload/'.$results['memo'].'"
                        alt="'.$results['name'].'">
                    </td>
                    <td class="table_td">'.$results['details'].'</td>
                   </tr>';
    }
} 

/* end of spand page function by arif*/ 

/* start of gallery page function by arif*/
if(isset($_POST['shawAll'])&&isset($_POST['Limit'])&&isset($_POST['gallery'])){

  $shawAll=$db->EscapeString($_POST['shawAll']);
  $Limit=$db->EscapeString($_POST['Limit']);
  $current_page=$db->EscapeString($_POST['gallery']);
  $result="";
 
  $result= $db->QueryFetchArrayAll("SELECT * FROM `gallery` ORDER BY id DESC LIMIT $current_page,$Limit");
 
  

  foreach ($result as $results) {

/*
          <div class="col-span-6 lg:col-span-4">
            <p class="text-lg tracking-wider font-semibold text-primary mb-1">Lorem ipsum dolor</p>
            <img class="w-full h-auto rounded object-cover object-left-top"
              src="https://i.ibb.co/47XVM4D/istockphoto-1316145932-170667a.jpg" alt="">
          </div>
  */        


     echo '<div class="col-span-6 lg:col-span-4">
     <p class="text-lg tracking-wider font-semibold text-primary mb-1">'.$results['name'].'</p>
     <img class="w-full h-auto rounded object-cover object-left-top"
       src="upload/'.$results['image'].'" alt="">
   </div>';
                  
    }
} 

/* end of gallery page function by arif*/ 



?>