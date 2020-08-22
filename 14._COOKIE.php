<?php

//cookies are used to store server information there are two types of cookies one gets deleted ones browser gets closed and other 
//will be deleted after some defined time
// to create a cookie we have to use a function create cookie
if(setcookie("IDK","something fishy"))// this will destroy once browser is closed
{
    echo "Cookie created.";
}
echo $_COOKIE['IDK'];
// to create a cookie we have to use a function create cookie
if(setcookie("IDK","something fishy",time(+60*60)))// this will destroy once browser is closed
{
    echo "Cookie created.";
}
echo $_COOKIE['IDK'];

?>