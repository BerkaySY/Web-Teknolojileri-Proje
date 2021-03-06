<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/login.css" />
    <script src="../js/login.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-fullblack text-white sticky-top">
      <div class="container-fluid">
        <h1>BERKAY SARAY</h1>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item px-3">
              <a href="index.html" class="nav-link">Hakkımda</a>
            </li>
            <li class="nav-item px-3">
              <a href="cv.html" class="nav-link">Özgeçmişim</a>
            </li>
            <li class="nav-item px-3">
              <a href="ilgialanlarim.html" class="nav-link">İlgi Alanlarım</a>
            </li>
            <li class="nav-item px-3">
              <a href="sehrim.html" class="nav-link">Şehrim</a>
            </li>
            <li class="nav-item px-3">
              <a href="mirasimiz.html" class="nav-link">Mirasımız</a>
            </li>
            <li class="nav-item px-3">
              <a href="iletisim.html" class="nav-link">İletişim</a>
            </li>
            <li class="nav-item px-3">
              <a href="login.html" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" align="center">
      <div class="row">
        <div class="col-12">
          <div class="card bg-fullblack mt-3 p-5 " style="color: red; background-color: black;">
              <?php
                if($_POST["kullanıcı"] == "b211210040@sakarya.edu.tr" && $_POST["sifre"] == "b211210040"){
                    echo "Hoşgeldiniz " .$_POST["kullanıcı"];
                    echo "<br> Ana Sayfaya Yönlendiriliyorsunuz!";
                    header("refresh:3; ../index.html");
                }
                else{
                    echo "Kullanıcı Adı veya Şifre Hatalı!<br>";
                    echo "Login Sayfasına Yönlendiriliyorsunuz!";
                    header("refresh:3; ../login.html");
                }
              ?>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>