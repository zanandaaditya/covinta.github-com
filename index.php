<!-- <?php
  $url = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
  $provinsi = json_decode($url, true);

  $url = file_get_contents('https://api.kawalcorona.com/positif/');
  $dunia_positif = json_decode($url, true);

  $url = file_get_contents('https://api.kawalcorona.com/sembuh/');
  $dunia_sembuh = json_decode($url, true);

  $url = file_get_contents('https://api.kawalcorona.com/meninggal/');
  $dunia_meninggal = json_decode($url, true);

  $url = file_get_contents('https://api.kawalcorona.com/indonesia/');
  $indonesia = json_decode($url, true);


?> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body>
    <div class="cover">
    <div class="container">
  <nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style=""></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="ASSETS/LOGO.png" alt="" srcset="" class="img-fluid">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Call Center</a>
      </li>
    </ul>
  </div>
  <div class="custom-control custom-switch">
    <input type="checkbox" name="theme" class="custom-control-input" id="switch">
    <label for="switch" class="custom-control-label"></label>
  </div>
  </nav>
  </div>

  <!-- Section Jumbotron -->
  <section class="section-jumbotron">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6">
          <h3>USE YOUR MASK WHEN <br/>
              YOU GOING OUT
          </h3>
          <p>Safe your health and keep protect your family</p>
          <a href="" class="btn btn-contact btn-success border-0">Contact Us</a>
        </div>
        <div class="col-lg-6 mt-3">
          <img src="ASSETS/3622110.png" class="img-fluid container-fluid">
        </div>

      </div>
  </div>
  </section>
</div>

<!-- SECTION Statistik -->
<div class="container">
  <section id="stats" class="section-stats row justify-content-between">
    <div class="col-lg-3 col-md-2 col-sm-12 stats-detail p-1 d-flex flex-column text-center">
      <h2>201</h2>
      <p>Affected Country</p>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-12 stats-detail p-1 text-center">
      <h2><?= $dunia_positif['value'] ?></h2>
      <p>Cases Confirmed</p>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-12 stats-detail p-1 text-center">
      <h2 class="recovered"><?= $dunia_sembuh['value'] ?></h2>
      <p>Recovered Cases</p>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-12 stats-detail p-1 text-center">
      <h2><?= $dunia_meninggal['value'] ?></h2>
      <p>Deaths</p>
    </div>
  </section>
</div>

<!-- Section Whats Covid -->
  <section class="section-content">
    <div class="container">
      <div class="judul text-center mb-4">
        Whats Covid-19 ?
      </div>
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-center">
          <img src="ASSETS/4336003.png" class="img-fluid">
        </div>
        <div class="col-lg-6 content-exp text-center mt-3">
          Coronavirus disease (COVID-19) is
          an infectious disease caused by a
          newly discovered coronavirus.
          <br/>
          Most people who fall sick with
          COVID-19 will experience mild to
          moderate symptoms and recovered
          without special treatment.
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION BREAK -->
  <section class="section-break">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="judul text-center d-flex align-items-center" style="padding-top: 30px;">
          <h3>YOUR LIFE ITS VERY IMPORTANT, SO KEEP SAVE YOUR HEALTH</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-end">
    <div class="container">
      <div class="judul text-center mb-4">
        How to Keep Save ?
      </div>
      <div class="row">
        <div class="col-lg-12">
          <img src="ASSETS/3749934.png" class="img-fluid container-fluid">
        </div>
      </div>
    </div>
  </section>

<!-- Indonesia Break -->
<section class="section-indonesia">
    <div class="container">
      <?php foreach($indonesia as $id): ?>
      <div class="row d-flex align-items-center">
        <div class="col-lg-3 col-md-3 col-sm-12 stats-detail p-1 text-center">
          <img src="ASSETS/Indonesia-Flag.png" class="mt-4">
          <p class="pt-4"><?= $id['name'] ?></p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 stats-detail p-1 text-center">
          <h2><?= $id['positif'] ?></h2>
          <p>Cases Confirmed</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 stats-detail p-1 text-center">
          <h2 class="recovered"><?= $id['sembuh'] ?></h2>
          <p>Recovered Cases</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 stats-detail p-1 text-center">
          <h2><?= $id['meninggal'] ?></h2>
          <p>Deaths</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
</section>

<!-- Section Provinsi -->
<section class="section-end">
  <div class="container">
    <div class="row">
      <div class="col ">
        <div class="judul text-center mb-4 mx-auto">
          Provinces of Indonesia
        </div>
      </div>
    </div>
    <div class="province-content">
      <div class="row">
        <div class="col">
          <table class="table table-responsive-sm text-center border-0">
              <tr>
                <th class="prov">Id</th>
                <th class="prov">Provinces</th>
                <th class="positive">Positive</th>
                <th class="recovered">Recovered</th>
                <th class="positive">Deaths</th>
                <th class="positive">Active</th>
              </tr>
            <?php
                  $id=1;
                  foreach ($provinsi as $prv):
                  $pos = $prv['attributes']['Kasus_Posi'];
                  $sem = $prv['attributes']['Kasus_Semb'];
                  $meni = $prv['attributes']['Kasus_Meni'];
                ?>
              <tr>
                <td class="prov provi">
                  <?= $id; ?>
                </td>
                <td class="text-center prov provi">
                  <?= $prv['attributes']['Provinsi']; ?>
                </td>
                <td class="align-middle positive">
                  <?= $pos = $prv['attributes']['Kasus_Posi']; ?>
                </td>
                <td class="align-middle recovered">
                  <?= $semb = $prv['attributes']['Kasus_Semb']; ?>
                </td>
                <td class="align-middle positive">
                  <?= $meni = $prv['attributes']['Kasus_Meni']; ?>
                </td>
                <td class="align-middle positive">
                  <?= $act = $pos - ($sem + $meni);?>
                </td>
              </tr>
            <?php
              $id++;
              endforeach;
            ?>

          </table>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<section class="section-footer border-top">
        <di class="container">
            <div class="row justify-content-center mt-3 mb-5">
                <div class="mr-5 ">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">JOB</a>
                    </div>
                </div>
                <div class="mr-5 ">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">TERMS</a>
                    </div>
                </div>
                <div class="mr-5 ">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">DEVELOPER</a>
                    </div>
                </div>
                <div class="mr-5 ">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">PARTNER</a>
                    </div>
                </div>
                <div class="mr-5 ">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">PRIVACY POLICY</a>
                    </div>
                </div>
                <div class="">
                    <div class="img-socmed d-flex flex-row text-center">
                        <a href="">GALLERY</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-5">
                <div class="col-auto text-gray-500 font-weight-light">
                    <p>2020 Copyright Covinta . All right reserved . Made by Zananda Aditya</p>
                </div>
            </div>
        </div>
</footer>
    <!-- Akhir Footer -->

    <script>
      var checkbox = document.querySelector('input[name=theme]');

      checkbox.addEventListener('change', function() {
        if(this.checked) {
          trans()
          document.documentElement.setAttribute('data-theme','dark')
          localStorage.setItem('data-theme','dark')
        } else {
          trans()
          document.documentElement.setAttribute('data-theme','light')
          localStorage.setItem('data-theme','light')
        }
      })

      let trans = () => {
        document.documentElement.classList.add('transition');
        window.setTimeout(() => {
          document.documentElement.classList.remove('transition')
        }, 1000)
      }
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
  $(document).ready(function(){
    //memanggil fungsi menampilka data
    semuaData();


    function semuaData(){
      $.ajax({
        url : 'https://api.kawalcorona.com/indonesia/',
        success : function(data){
          try{
            var json = data;
            var positif = data.positif;
            var meninggal = data.meninggal;
            var sembuh = data.sembuh;
            var dirawat = data.dirawat;

            alert(positif);
          }
          catch
          {
            alert ('ERROR');
          }
        }
      });
    }
  })
</script> -->
  </body>
</html>
