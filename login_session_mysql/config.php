<?php
/*
You would need special privileges to create or to delete 
a MySQL database. So assuming you have access to root user, 
you can create any database using mysql mysqladmin binary.
*/
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>