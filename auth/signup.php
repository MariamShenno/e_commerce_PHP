<?php

include "../connect.php";

$username = filterRequest("username");
$email = filterRequest("email");
$phone = filterRequest("phone");
$verifycode = rand(10000, 99999);
$password = sha1($_POST['password']);

$stmt = $con->prepare("SELECT * FROM users WHERE users_email= ? OR users_phone = ?");

$stmt->execute(array($email, $phone));

$count = $stmt->rowCount();

if ($count > 0) {
    printFailure(" phone or email");
} else {
    $data = array(
        "users_name" => $username,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verifycode" => $verifycode,
        "users_password" => $password,
    );

    sendEmail($email, "Verify Code Ecommerce", "Verify Code $verifycode");
    insertData("users", $data);
}
