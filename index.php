<?php
 include "database.php";

 $obj = new Database();

//  $obj->insert("crud", ['name'=>'raiyan', 'email'=>'raf@gmail.com', 'mobile'=>'12345', 'password'=>'pass']);
//  echo "Insert result is: ";
//  print_r($obj->getResult());

$obj->update("crud", ['name'=>'syed', 'email'=>'syed@gmail.com', 'mobile'=>'12345', 'password'=>'pass'], 'id="2');
echo "<br/>";
print_r($obj->getResult());