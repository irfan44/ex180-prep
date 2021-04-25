<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | NordPC</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css" />
  <script src="https://kit.fontawesome.com/0a6c49d9ac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <section class="hero is-fullheight" style="background-color: #2e3440">
    <div class="container hero-body">
      <div class="box p-6">
        <h3 class="title is-3">Login</h3>
        <form action="proses_login.php" method="post" onsubmit="return validasi_data(this)">
          <div class="field">
            <label class="label">Username</label>
            <p class="control has-icons-left">
              <input class="input" type="text" placeholder="" name="username" id="username" />
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
            <p class="help is-danger" id="alert-username" style="display: none">
              Masukan username anda
            </p>
          </div>
          <div class="field">
            <label class="label">Password</label>
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="" name="password" id="password" />
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
            <p class="help is-danger" id="alert-password" style="display: none"">Masukan password anda</p>
            </div>
            <div class=" field">
            <div class="control mt-5">
              <button type="submit" class="button is-fullwidth">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    function validasi_data(form) {
      if (form.username.value == "") {
        var element = document.getElementById("username");
        element.classList.add("is-danger");
        var x = document.getElementById("alert-username");
        x.style.display = "block";
        form.username.focus();
        return false;
      } else if (form.password.value == "") {
        var element = document.getElementById("password");
        element.classList.add("is-danger");
        var x = document.getElementById("alert-password");
        x.style.display = "block";
        form.password.focus();
        return false;
      }
    }
  </script>
</body>

</html>