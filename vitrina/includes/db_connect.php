<?php
$db_host = "localhost";
$db_port = "5432";
$db_name = "vitrina";
$db_user = "dbuser";
$db_pass = "Vitrina";
$db_salt = "NaCl";//проверить нормально ли хранится соль

$db_conn = pg_connect("host={$db_host} port={$db_port} dbname={$db_name} user={$db_user} password={$db_pass}");

if (!$db_conn) {
    die("<b>Error</b>: Unable to connect to database");
}
?>