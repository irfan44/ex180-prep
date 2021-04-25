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
        <title>Hard Drive | Category | NordPC Store</title>
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
                        Hard Drives
                    </h1>
                    <span class="icon-text">
                        <span><a href="dashboard.php">Home</a></span>
                        <span class="icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                        <span><a>Hard Drive</a></span>
                    </span>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h4 class="is-4 title">Showing 8 products</h4>
                <div class="columns">
                    <div class="column">
                        <a href="detail_barang.php?barang=seagate-barracuda-2TB">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image container" style="width: 50%;">
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate BarraCuda 2TB Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$55.59</p>
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
                                        <img src="https://m.media-amazon.com/images/I/51ayLOHhy5S._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Western Digital 1 TB WD Blue PC Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$39.99</p>
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
                                        <img src="https://m.media-amazon.com/images/I/815kscMthwL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate IronWolf 8 TB NAS Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$184.99</p>
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
                                        <img src="https://m.media-amazon.com/images/I/71dA-buk6oL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Western Digital 4TB WD Red NAS Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$94.99</p>
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
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate BarraCuda 2TB Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$55.59</p>
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
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate BarraCuda 2TB Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$55.59</p>
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
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate BarraCuda 2TB Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$55.59</p>
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
                                        <img src="https://m.media-amazon.com/images/I/71Czt9ypIbL._AC_UY218_.jpg" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4 class="is-4">Seagate BarraCuda 2TB Internal Hard Drive HDD</h4>
                                        <p class="subtitle is-6">$55.59</p>
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