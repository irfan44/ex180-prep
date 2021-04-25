<?php
include "connect.php";
session_start();

//username & role sessionnya kosong!
if (empty($_SESSION['username']) and empty($_SESSION['role'])) {
    include "components/401.php";
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Category | NordPC Store</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
        <script src="https://kit.fontawesome.com/0a6c49d9ac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php include 'components/navbar_store.php'; ?>


        <section class="hero is-primary is-medium mt-5">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        All Category
                    </h1>
                    <span class="icon-text">
                        <span><a href="dashboard.php">Home</a></span>
                        <span class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                        <span><a>Category</a></span>
                    </span>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <a href="kategori_hdd.php">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Hard Drive</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/712kBEVHeXL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">CPU</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/71sC8ErTgnL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">GPU</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/91MWQtTH4bL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Motherboard</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/71YdEN4KxHL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Power Supply</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/814poe+IDsL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Solid State Drive (SSD)</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/91h4HuajdcL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Computer Case</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/71hQt-WSAaL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Cooling</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </body>

    </html>
<?php
}
?>