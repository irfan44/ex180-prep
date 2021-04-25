<?php
include "connect.php";
session_start();

//username & role sessionnya kosong!
if (empty($_SESSION['username']) and empty($_SESSION['role'])) {
    include "components/401.php";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Home | NordPC Store</title>
    </head>

    <body>
        <?php include 'components/navbar_store.php'; ?>
        <section class="hero">
            <div class="hero-body">
                <div class="container mt-5">
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-vertical is-parent">
                            <article class="tile is-child notification" style="background-color: #DBDBDB;">
                                <p class="title">50% off on <br> All-in-One PC</p>
                                <figure class="image is-4by3">
                                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_PC_1x._SY304_CB431800965_.jpg">
                                </figure>
                            </article>
                            <article class="tile is-child notification" style="background-color: #EAEAE7;">
                                <p class="title">Special Discount for Macbook Accesories</p>
                                <figure class="image is-4by3">
                                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg">
                                </figure>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification" style="background-color: #1B1B1B; color: #fefefe">
                                <p class="title">Prepare for your gaming needs <br> with 30% off on accesories</p>
                                <br>
                                <figure class="image is-4by3">
                                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80">
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column">
                        <h3 class="is-3 title">Hard Drive</h3>
                    </div>
                    <div class="column is-offset-8" style="text-align: end;">
                        <h6 class="is-6"><a href="kategori_hdd.php" style="text-decoration: none; color: #363636;"> See all</a></h6>
                    </div>
                </div>
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h3 class="is-3 title">All Items</h3>
                <div class="columns">
                    <div class="column">
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                <div class="columns">
                    <div class="column">
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
        </section>
        <?php include 'components/footer.php'; ?>
    </body>

    </html>

<?php
}
?>