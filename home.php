<?php
include "connect.php";

$alldata = array();

$alldata['status'] = "success"; 

$categories= getAllData("categories", null, null, false);

$alldata['categories'] = $categories;

//1 = 1 ORDER BY countitems DESC  insted of items_description !=0 
$items= getAllData("itemstopselling", "1 = 1 ORDER BY countitems DESC ", null, false);

$alldata['items'] = $items;

$settings = getAllData("settings" , "1 = 1" , null , false )  ;

$alldata['settings'] = $settings ; 

echo json_encode($alldata);

?>