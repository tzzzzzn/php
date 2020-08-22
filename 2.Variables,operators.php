<?php
//variables are declares with $ symbol and name of the variable
$name     ="Tharun"; //static way of entering data

$country  ="India";

$age      =8;

$password ="emo ra babu nuv";

$minpass  =6;

if(strlen($password)<$minpass)
    echo "The entered password size is small";
else
    echo "Your name is ".$name.". Your country is ".$country.". Your age is ".$age;
?>