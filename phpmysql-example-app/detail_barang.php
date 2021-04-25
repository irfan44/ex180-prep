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
        <title>Seagate BarraCuda 2TB Internal Hard Drive HDD | NordPC Store</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
        <script src="https://kit.fontawesome.com/0a6c49d9ac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/detail_barang.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <?php include 'components/navbar_store.php'; ?>

        <section class="section">
            <div class="container">
                <span class="icon-text">
                    <span><a style="text-decoration: none; color: #363636;" href="dashboard.php">Home</a></span>
                    <span class="icon">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span><a style="text-decoration: none; color: #363636;" href="kategori_hdd.php">Hard Drive</a></span>
                    <span class="icon">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span><a style="text-decoration: none; color: #363636;" href="detail_barang.php">Seagate BarraCuda 2TB Internal Hard Drive HDD</a></span>
                </span>
                <div class="columns mt-2">
                    <div class="column">
                        <figure class="image is-80 mx-6">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/71Czt9ypIbL._AC_SL1500_.jpg">
                        </figure>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 mb-6">Seagate BarraCuda 2TB Internal Hard Drive HDD – 3.5 Inch SATA 6Gb/s 7200 RPM 256MB Cache 3.5-Inch</h3>
                        <p class="subtitle is-4"><strong>$55.59</strong></p>

                        <p class="subtitle is-5">
                            Brand : Seagate
                            <br>
                            Capacity : 2 TB
                            <br>
                            Form Factor : 3.5-Inch
                            <br>
                            Hardware Interface : SATA 6.0 Gb/s
                            <br>
                            Read Speed : 220 Megabytes Per Second
                        </p>
                        <form class="field" method="POST" action="pembelian.php">
                            <label class="label mr-4">Quantity</label>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input style="width: 20%" class="input" type="number" name="quantity" placeholder="">
                                    </p>
                                    <p style="display: none;">
                                        <input name="item" type="text" value="Seagate BarraCuda 2TB Internal Hard Drive HDD – 3.5 Inch SATA 6Gb/s 7200 RPM 256MB Cache 3.5-Inch " />
                                        <input name="price" type="number" value="55.59" />
                                    </p>
                                </div>
                            </div>
                            <button class="button is-fullwidth mt-4" type="submit">
                                <strong>Buy Now</strong>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">
            <div class="container">
                <h4 class="is-4 title">Details</h4>
                <p class="subtitle is-5">Upgrading with the reliable family of cost-effective Barracuda drives will improve the efficiency of data processing and retrieval. Improved efficiency provides instant access to data, which means faster game load times, quicker open rates for applications, and speedy file transfers.
                    <br>
                    <br>
                    Brand : Seagate
                    <br>
                    Capacity : 2 TB
                    <br>
                    Form Factor : 3.5-Inch
                    <br>
                    Hardware Interface : SATA 6.0 Gb/s
                    <br>
                    Read Speed : 220 Megabytes Per Second
                </p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h4 class="is-4 title">Related Product</h4>
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