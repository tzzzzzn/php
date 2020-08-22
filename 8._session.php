<?php
session_start();
//echo $_SESSION['NAME'];// This can be accessed only if the session_start() is used
echo $_SESSION['arr']['CM'];
echo "<br>".$_SESSION['NAME'];
?>
