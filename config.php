<?php
/* Database credentials for Aiven MySQL */
define('DB_SERVER', 'mysql-3523faf9-taziyahcharles11-791d.k.aivencloud.com');
define('DB_PORT', 15534);
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', 'AVNS_ld4LzUY-jdGhygU39uv');
define('DB_NAME', 'crud_app');

/* Connect to MySQL */
$link = mysqli_init();

/* Enable SSL — REQUIRED by Aiven */
mysqli_ssl_set($link, NULL, NULL, __DIR__ . "/ca.pem", NULL, NULL);

/* Attempt connection */
mysqli_real_connect(
    $link,
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT,
    NULL,
    MYSQLI_CLIENT_SSL
);

/* Check connection */
if (mysqli_connect_errno()) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
