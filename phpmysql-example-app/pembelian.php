<?php
$_POST["total"] = $_POST["price"] * $_POST["quantity"];
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


        <section class="hero is-primary is-small p-4 mt-4">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Purchases
                    </h1>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <form class="field">
                    <h3 class="is-3 title">Item : </h3>
                    <div class="field-body">
                        <div class="field">
                            <?php
                            echo "<p class=subtitle is-4>$_POST[item]</p>";
                            ?>
                        </div>
                    </div>
                    <br>
                    <h3 class="is-3 title">Quantity : </h3>
                    <div class="field-body">
                        <div class="field">
                            <?php
                            echo "<p  class=subtitle is-4>$_POST[quantity]</p>";
                            ?>
                        </div>
                    </div>
                    <br>
                    <h3 class="is-3 title">Price : </h3>
                    <div class="field-body">
                        <div class="field">
                            <?php
                            echo "<p  class=subtitle is-4>$ $_POST[price]</p>";
                            ?>
                        </div>
                    </div>
                    <br>
                    <h3 class="is-3 title">Total : </h3>
                    <div class="field-body">
                        <div class="field">
                            <?php
                            echo "<p  class=subtitle is-4>$ $_POST[total]</p>";
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <div class="container">
            <div class="buttons">
                <a class="button is-primary" href="dashboard.php">
                    <strong>Return to Dashboard</strong>
                </a>
            </div>
        </div>

        <?php include 'components/footer.php'; ?>
    </body>

    </html>
<?php
}
?>