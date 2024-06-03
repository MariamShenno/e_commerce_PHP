<?php

include '../connect.php';

$table = "address";

$userid = filterRequest("userid");
$name = filterRequest("name");
$city = filterRequest("city");
$street = filterRequest("street");
$lat = filterRequest("lat");
$long = filterRequest("long");

$data = array(
"address_userid" => $userid,
"address_name" => $name,
"address_city" => $city,
"address_street" => $street,
"address_latitude" => $lat,
"address_longitude" => $long,
);

insertData($table , $data);

?>