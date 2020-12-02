<?php 
   
// Task 2: Use the autoloading feature.
spl_autoload_register(function($className) {
    include_once 'utilities/'. $className . '.php';
});

$items = new Items();
$data = $items->get_items();

$array1 = array("company"=>"augmedix", "id"=>"2");
// $array2 = array("company"=>"scl", "id"=>"2");
// $array3 = array("company"=>"augmedix", "id"=>"321");

$key1 = "company";  
$key2 = "faisal";  
$key3 = ["company","id"];  

$item_flag = $items->hasItem($array1,$key1);

// echo($item_flag) . "<br/>";

// task 2
$final_array = $items->only($array1,$key2);

// echo "<pre>";
// print_r($final_array);
// echo "</pre>";
// die("stop");