<?php
//To connect to sql server manually we use the function sqli_connect which takes 
//four parameters 1.server name,2.username,3.password,4.database
    $server   = 'localhost';
    $user     = 'root@localhost';
    $pass     = '';
    $database = 'db';

        $connect=sqli_connect($server,$user,$pass,$database);
        if($connect)
            echo "data base connection is successful";
        else
            echo "database connection failed".sqli_error($connect);
?>