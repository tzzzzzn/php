<?php

//the variables created by GLOBALS can be be accessed in this file anywhere
// Super global variables are created like indexed arrays.

$GLOBALS['users']="Tharun";
echo $users;
$something=5;
function mul()
{
    $GLOBALS['mul']=$GLOBALS['something']*$GLOBALS['something'];
}
mul();
echo $GLOBALS['mul'];
//_SESSION global variable is created when we are using it we need to use session_start.
//this variable can be accessed in different files we have used in 8._session
session_start();
$_SESSION['NAME']="Tharun";

$_SESSION['arr']=array("i"=>"Tharun","CM"=>"Cheif Minister");
?>