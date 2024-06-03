<?php 

include "../connect.php" ; 


$userid = filterRequest("id") ; 


getAllData('ordersview' , "orders_usersid = '$userid' AND orders_status =  4"); 

 // 0 - await
 // 1 - prepare
 // 2 - delivery 
 // 3 - on the way
 //  4 - It was received 
    
?>