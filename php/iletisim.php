<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim</title>
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
    <link rel="stylesheet" href="../css/iletisim.css" />
    <script src="../js/iletisim.js"></script>
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
    <?php header("refresh:5; url=../iletisim.html"); ?>
    <div class="container mt-5 ">
      <div class="row">
      <div class="col-3"></div>
      <div class="col-6 py-3 mb-5"  style="background-color: black ;" >
          <h2 class="text-center" style="color: aqua;">Form Bilgileri</h2>
          <div class="card m-2" style="background-color: black;">
            <div class="card-body" style="background-color: aquamarine;">
              <table class="text-center table table-dark" >
                  <tr>
                      <th>Ad: </th>
                      <td><?php echo $_POST["ad"]; ?></td>
                  </tr>
                  <tr>
                      <th>Soyad: </th>
                      <td><?php echo $_POST["soyad"]; ?></td>
                  </tr>
                  <tr>
                      <th>Email: </th>
                      <td><?php echo $_POST["email"]; ?></td>
                  </tr>
                  <tr>
                      <th>Telefon: </th>
                      <td><?php echo $_POST["telefon"]; ?></td>
                  </tr>
                  <tr>
                      <th>Doğum Tarihi: </th>
                      <td><?php echo $_POST["dogum-tarihi"]; ?></td>
                  </tr>
                  <tr>
                      <th>Cinsiyet: </th>
                      <td><?php echo $_POST["cinsiyet"]; ?></td>
                  </tr>
                  <tr>
                      <th>Bilinen Yazılım Dilleri: </th>
                      <td><?php 
                        if(isset($_POST["programlama"])){
                            $diller = $_POST["programlama"];
                            foreach($diller as $dil){
                                echo $dil . ',';
                            };
                        }
                        else{
                            echo("-");
                        }
                        
                          ?>
                        </td>
                  </tr>
                  <tr>
                      <th>Mesaj Konusu: </th>
                      <td><?php echo $_POST["konu"]; ?></td>
                  </tr>
                  <tr>
                      <th>Mesaj: </th>
                      <td class="dolutabloClass"><?php echo $_POST["mesaj"]; ?></td>
                  </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    
    <footer class="bg-fullblack py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 id="footer-h3">BERKAY SARAY</h3>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li class="text-white mb-3">Sayfalar</li>
              <li>
                <a href="index.html" class="footer-link">Hakkımda</a>
              </li>
              <li>
                <a href="cv.html" class="footer-link">Özgeçmişim</a>
              </li>
              <li>
                <a href="ilgialanlarim.html" class="footer-link">İlgi Alanlarım</a>
              </li>
              <li>
                <a href="sehrim.html" class="footer-link">Şehrim</a>
              </li>
              <li>
                <a href="mirasimiz.html" class="footer-link">Mirasımız</a>
              </li>
              <li>
                <a href="iletisim.html" class="footer-link">İletişim</a>
              </li>
              <li>
                <a href="login.html" class="footer-link">Login</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li class="text-white mb-3">Sosyal Medya</li>
              <li>
                <a href="https://www.linkedin.com/in/berkay-saray-81b9a1219/" class="footer-link">LinkedIn</a>
              </li>
              <li>
                <a href="https://github.com/BerkaySY" class="footer-link">GitHub</a>
              </li>
              <li>
                <a href="https://www.instagram.com/berkaysarayy/" class="footer-link">Instagram</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>