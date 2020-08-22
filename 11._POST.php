<form method="post" action="10.1_posttest.php">
    Name   : <input type="text" name="user">
    Mobile : <input type="text" name="mobile">
    <input type="submit" name="sub" value="submit">
</form>

<form method="post" action="10.2_requesttest.php">
   <input type="text" name="ename" >
   <input type="submit" name="sub" value="submit" />
</form>

<?php
//_POST is used to send data securely rather than like _GET
//By using _POST we can send large data not only text images,audio etc
//In form we need to declare the method as post to get secured
?>