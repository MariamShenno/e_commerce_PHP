<?php

include "../connect.php";

$username = filterRequest("username");
$email = filterRequest("email");
$phone = filterRequest("phone");
$verifycode = rand(10000, 99999);
$password = sha1($_POST['password']);

$stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email= ? OR delivery_phone = ?");

$stmt->execute(array($email, $phone));

$count = $stmt->rowCount();

if ($count > 0) {
    printFailure(" phone or email");
} else {
    $data = array(
        "delivery_name" => $username,
        "delivery_email" => $email,
        "delivery_phone" => $phone,
        "delivery_verifycode" => $verifycode,
        "delivery_password" => $password,
    );

    sendEmail($email, "Verify Code Ecommerce", "Verify Code $verifycode");
    insertData("delivery", $data);
}
