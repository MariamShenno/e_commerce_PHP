<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "mariam",
"users_email" => "mariam@gmail.com",
"users_phone" => "324234",
"users_verfiycode" => "3243243",       
);
$count = insertData($table , $data);

// Send Email 
$to = "mariamflutter@gmail.com";
$title = "hi";
$body = "I am Mariam";
$header = "From: support@mariammohammed.com". "\n" . "CC: mariam@gmail.com";

mail($to, $title, $body, $header);


getAllData("users" , "1= 1");

//Test send  notification

$notAuth = "" ; 

include "connect.php" ; 
 
sendGCM("hi"  , "How Are You" , "users31" , "" , "") ; 

echo "Send"  ;

?>
