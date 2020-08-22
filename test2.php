<form  method='post' get="#">
    Name    <input type="text" name="ename" placeholder="peru chepu ra" /><br>
    Email   <input type="text" name="eemail" placeholder="email evadu stadu"/><br>
    Password <input type="text" name="password" placeholder="anukuntav ga"/> <br>
    <input type="submit" value="submit">
</form>
<?php
    function display()
    {
        echo "Name is : ".$_POST['ename'];
        echo "<br>Your Email is : ".$_REQUEST['eemail'];
    }
    display();
?>