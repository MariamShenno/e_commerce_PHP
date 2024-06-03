<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

// delivery stage مرحلة الاستلام
$data = array(
    "orders_status"=> 4
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 3");

// Message for  user
insertNotify("success", "Your Order has been deliverd", $userid, "users$userid", "none",  "refreshorderpending");

// Message for  admin
sendGCM("warning",  "The Order has been deliverd to The Customer" , "services", "none", "none");
?>