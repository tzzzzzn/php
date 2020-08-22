<?php
function print_age($age)
{
    echo "The entered value ".$age;
}
print_age(18);
print_age(20);
print_age(34);
function filter_var1($var, $op)
{
    if($op=="sub")
    {
        echo $var-10;
    }
    else if($op=="mul")
        echo $var*$var;
    else if($op=="add")
        echo $var+$var;
    else
        echo $var;
}
filter_var1(3,"add");
?>