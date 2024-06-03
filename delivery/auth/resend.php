<?php
include "../connect.php";

$email = filterRequest("email");

$verfiycode     = rand(10000 , 99999);

$data = array(
    "delivery_verifycode" => $verfiycode
);

updateData("delivery" , $data, "users_email = '$email'");

sendEmail($email ,  "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode");