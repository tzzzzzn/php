<?php
$name="Thaurn";
$event_name="pub";
$age=10;
$arr=array("allowed"=>"Not restricted","not allowed"=>"Restricted","old man"=>"stay in car");
if($age<18)
    echo $arr["not allowed"];
else if($age>49)
    echo $arr["old man"];
else
    echo $arr["allowed"];
?>
