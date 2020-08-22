<form action="10._gettest.php"> 
    <input type="text" name="ename"  />  <!--s-->
    <input type="submit" name="sub" value="submit" />
</form>

<form method="get" action="10.2_requesttest.php">
   <input type="text" name="ename" >
   <input type="submit" name="sub" value="submit" />
</form>
<?php
    echo $_GET['ename']."wil not be  printed later as the action page is different";
    //$_GET is used to pass data between forms through urls
    //Using _GET is not that much secure
    //By using _GET we can only pass text type of data
    //By default method of a form is get and the action of a page is to same page
?>

