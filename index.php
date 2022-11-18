<?php

error_reporting(0);

$number = $_POST["number"];


$data = json_decode($_COOKIE['cookie']);

if(count($data)<1){
  $data=array();
}

if($number != -1){

array_push($data,$number);

setcookie('cookie', json_encode($data), time()+10);

}

if($number==-1){


sort($data);

$num = array_reverse($data);

foreach($num as $value){
  echo $value . "<br>";
}

}else{
    include "user.html";
}

?>
