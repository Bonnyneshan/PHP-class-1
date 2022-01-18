<?php

echo "Method of converting String to Integer <br>";

/*==================================
 Converting String to Integer Start
===================================*/

$number1 = "10230";

$number2 = ( Int ) $number1;


echo "String value =" .$number1. "<br>";

echo "String to Int-1 =".$number2. "<br>";

echo "String to Int-2 =" .(int) $number1. "<br>";

/*==================================
  Converting String to Integer End
===================================*/

var_dump($number1, $number2);

?>