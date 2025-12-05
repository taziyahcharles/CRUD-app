<?php
/* Database credentials for Aiven MySQL */
define('DB_SERVER', 'mysql-3523faf9-taziyahcharles11-791d.k.aivencloud.com');
define('DB_PORT', 15534);
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_ld4LzUY-jdGhygU39uv');
define('DB_NAME', 'crud_app');

/* Build connection string with SSL disabled */
$server_with_port = DB_SERVER . ':' . DB_PORT;

/* Attempt connection */
$link = mysqli_connect(
    $server_with_port,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    null,
    null,
    MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT // disable cert checking
);

/* Check connection */
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
