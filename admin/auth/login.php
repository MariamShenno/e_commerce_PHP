<?php

include "../../connect.php" ;


$email = filterRequest("email");
$password = sha1($_POST['password']);

// $stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email= ? AND delivery_password = ? AND delivery_approve =1 ");

// $stmt->execute(array($email, $password));

// $count = $stmt->rowCount();

// result($count);

getData("admin", "admin_email= ? AND admin_password = ?", 
array(
    $email, $password
),
);