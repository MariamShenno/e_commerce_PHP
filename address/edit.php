<?php

include '../connect.php';

$table = "address";

$addressid = filterRequest("addressid");
$name = filterRequest("name");
$city = filterRequest("city");
$street = filterRequest("street");
$lat = filterRequest("lat");
$long = filterRequest("long");

$data = array(
"address_name" => $name,
"address_city" => $city,
"address_street" => $street,
"address_latitude" => $lat,
"address_longitude" => $long,
);

updateData($table , $data , "address_id = $addressid");

?>