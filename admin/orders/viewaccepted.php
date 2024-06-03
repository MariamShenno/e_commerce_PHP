<?php 

include "../../connect.php" ; 
 
getAllData('ordersview' , "1 = 1 AND orders_status != 0 OR orders_status != 4") ; 
// or anther code 
//getAllData('ordersview' , "1 = 1 AND orders_status =  1 OR orders_status =  2 OR orders_status =  3") ; 
?>