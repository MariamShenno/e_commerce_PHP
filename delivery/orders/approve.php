<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$deliveryid = filterRequest("deliveryid");

$data = array(
    "orders_status" => 3 ,
    "orders_delivery" => $deliveryid
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");

// Message for  user
insertNotify("success", "Your order is on the way", $userid, "users$userid", "none",  "refreshorderpending");

// Message for  admin
sendGCM("warning",  "The Order Has been Approved by delivery" , "services", "none", "none");

// Message for Multiple dlivery 
sendGCM("warning" , "The Order Has been Approved by delivery  " . $deliveryid , "delivery" , "none" , "none"); 
?>