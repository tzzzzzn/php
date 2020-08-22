<?php

// filter is used to do 2 operation 1.validation 2.sanitize
//First step is to sanitize and second step is to validate the the data both works on same functino 

//To do so we have filter_var(variable,FORMAT U WANT)
//echo $_GET['var']."<br>";
if(filter_var($_GET['var'],FILTER_VALIDATE_EMAIL)){
       $newvar= filter_var($_GET['var'],FILTER_SANITIZE_EMAIL);
           echo $newvar;

}
?>


<form>
    <input type="text" name="var">
    <input type="submit" name="waste">
</form>