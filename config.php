<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql-3523faf9-taziyahcharles11-791d.k.aivencloud.com');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_ld4LzUY-jdGhygU39uv');
define('DB_NAME', 'crud_app');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>