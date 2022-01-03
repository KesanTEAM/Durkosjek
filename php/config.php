<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_durkosjeks";

$mysqli = mysqli_connect($server, $user, $pass, $database);

if (!$mysqli) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
