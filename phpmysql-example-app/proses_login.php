<?php
    session_start();
    include "connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username='$username' and password='$password'");
    $jum_data = mysqli_num_rows($query);

    if ($jum_data > 0) {
        # code...
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        setcookie($_SESSION['username'],$username,time()+60000);

        header("location:dashboard.php");
    }
    else {
        header("location:login.php");
    }
