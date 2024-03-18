<?php

function order_status($status_id=0){
	global $db;
	$status="";
	$res = $db->getRows("SELECT name, order_status_id from order_status");
	if($db->getAffectedRows()>0){ 
		foreach($res as $key => $value){
			$selection='';
			if($value['order_status_id']==$status_id){$selection="selected";}
			$status.="<option value=".$value['order_status_id']." ".$selection.">".$value["name"]."</option>";
		}
	}
	return $status;
}

function get_order_status($status_id){
	global $db;
	$status="Pending";
	$res = $db->getRow("SELECT name from order_status where order_status_id =".$status_id);
	if($db->getAffectedRows()>0){
		$status = $res["name"];
	}
	return $status;
}

function get_order_status_id($status){
	global $db;
	$status_id="Pending";
	$res = $db->getRow("SELECT order_status_id from order_status where name ='".$status."'");
	if($db->getAffectedRows()>0){
		$status_id = $res["order_status_id"];
	}
	return $status_id;
}
function get_wallet_balance($customer_id){
	global $db;
	
	$res = $db->getRow("select supercoin from customer where customer_id='".$customer_id."'");
    
      if(!empty($res)){
            return $res['supercoin'];
        }else{
            return 0;
        }
    return $supercoin;
}


 function update_wallet_balance($new_balance,$customer_id){
  	global $db;

    	$update_wallet = $db->update("update customer set supercoin='$new_balance' where customer_id='$customer_id'");
      
      if ($db->getAffectedRows()>0) {
      	return true;
	}
	   return false;
    }

function add_wallet_transaction($customer_id,$type,$wall_adj,$cncl_amt,$message){
	global $db;
	$save = [  "user_id" => $customer_id,
	           "type" => $type,
	           "supercoins" => $wall_adj,
	           "amount" => $cncl_amt,
	           "status" => 1,
	           "message" => $message ,];
	           $rw_coins = $db->insertAry("coin_transactions",$save);

	
}

function convert_to_parent($measurement,$measurement_unit_id){
	global $db;
    $sql="SELECT * FROM unit WHERE unit_id=".$measurement_unit_id;
    $unit = $db->getRow($sql);
    if(!empty($unit['parent_id'])){
        $stock=$measurement/$unit['conversion'];
    }else{
        $stock = ($measurement)*$unit['conversion'];
    }
        return $stock;
}


function push_login($type1,$fcm_s,$fcm_r,$fcm_w){
	          global $db;

             $message='';
             if ($type1=='W') {  
            $type1='wholesale'; 
            $fcm=$fcm_w;
            $server_key1=$db->getVal("SELECT value FROM settings WHERE variable='wholesale_server_key'");}

            elseif ($type1=='S') { 
            $type1='semi_wholesale';
            $fcm=$fcm_s;
            $server_key1=$db->getVal("SELECT value FROM settings WHERE variable='semi_wholesale_server_key'"); }

            else{ 
            $type1='retail';
            $fcm=$fcm_r; 
            $server_key1= $db->getVal("SELECT value FROM settings WHERE variable='retail_server_key'");}


            $title1='Welcome To Koyambedu Market';

            $json_data1 =[
                
                 "to" => $fcm,
                 "data" => [
                     "body" => $message,
                     "channel_id"=> $type1,
                     "title"=> $title1,
                     "click_action" => 'main',
                     "screen"=>'main',
                     "message" => $message,
                     "image"=>'',
                     "sound" => "ringtone1",
                    
                 ],
                 "notification" => [
                     "body" => $message,
                     "title"=> $title1,
                     "channel_id"=> $type1,
                     "click_action" => 'main',
                     "message" => $message,
                     "image"=>'',
                     "screen"=>'main',
                     "sound" => "ringtone1",

                 ]
            ];


            $data1 = json_encode($json_data1);
            // print_r($data1);exit;
          
           //FCM API end-point
            $url = 'https://fcm.googleapis.com/fcm/send';
            //api_key in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
           
            //header with content_type api key
            $headers1 = array(
                'Content-Type:application/json',
                'Authorization:key='.$server_key1);
            //CURL request to route notification to FCM connection server (provided by Google)
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $url);
            curl_setopt($ch1, CURLOPT_POST, true);
            curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers1);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_POSTFIELDS, $data1);
            $result2 = curl_exec($ch1);
            // print_r($result2);exit;


        }






         function admin_notification_for_item($orders_id,$customer_id,$message,$postStatus,$id){

                global $db;
              $data_order = [
                                "orders_id" => $orders_id,
                                "customer_id" => $customer_id,
                                "notification_status" => 0,
                                "type" => "orders",
                                "notification_message" =>$message ];
                            $db->insertAry(
                                "admin_notifications",
                                $data_order,
                                "where orders_id=".$orders_id);

        }
?>