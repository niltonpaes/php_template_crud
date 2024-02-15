<?php
// used to connect to the database - MAC
// $host = "localhost:8889";
// $db_name = "php_template_crud";
// $username = "root";
// $password = "root";

// used to connect to the database - Hostinger
$host = "127.0.0.1:3306";
$db_name = "u806017736_crud";
$username = "u806017736_crud";
$password = "slaughter#SQL23";


try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
