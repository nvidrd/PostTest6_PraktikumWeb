<?php
    $server='localhost';
    $user='root';
    $password='';
    $db_name='websitept';
    $conn = mysqli_connect($server, $user, $password, $db_name);
    if (!$conn) {
        die("Gagal terhubung ke databse" . mysqli_connect_error());
    }
?>