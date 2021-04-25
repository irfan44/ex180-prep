<?php
    $namaserver = "localhost";
    $username = "root";
    $password = "";
    $koneksi = mysqli_connect($namaserver, $username, $password);
    mysqli_select_db($koneksi, "db_rpl2021") or die ("Database not found");
    //echo "Database connected";
?>