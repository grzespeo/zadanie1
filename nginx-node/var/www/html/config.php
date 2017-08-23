<?php
   define('DB_SERVER', 'mysql-local:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Rekrutacja');
   define('DB_DATABASE', 'users_db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>

