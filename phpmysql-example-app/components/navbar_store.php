<?php
session_start();
?>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container mt-2">
        <div class="navbar-brand">
            <a class="navbar-item" href="dashboard.php">
                <img src="assets/img/logo_store.svg" width="128" height="28" />
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="dashboard.php"> Home </a>
                <a class="navbar-item" href="kategori.php"> Category </a>
                <a class="navbar-item"> About </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <?php
                    echo "Welcome, " . $_COOKIE[$_SESSION['username']] . "!";
                    ?>
                    <div class="buttons ml-4">
                        <a class="button" href="logout.php">
                            <strong>Logout</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>