<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include "../admin/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>polsek paiton Website Template - mhrp_20</title>

  <!-- Google fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link href="assets/css/style-starter.css?version=<?php echo filemtime('assets/css/style-starter.css'); ?>" rel="stylesheet">
</head>

<body>
  <!-- header -->
  <header class="w3l-header">
    <div class="hero-header-11">
      <div class="hero-header-11-content">
        <div class="container">
          <nav class="navbar navbar-expand-sm navbar-light py-md-1 py-0 px-0">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logopolsek.png" width="60px" height="70px" alt="logo" /></a>
            <!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item active">
                  <a class="nav-link" href=".">beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @@about-active">
                  <a class="nav-link" href=".?hal=biodata">Profil</a>
                </li>

                <li class="nav-item @@about-active">
                  <a class="nav-link" href=".?hal=berita">Berita</a>
                </li>
                <li class="nav-item @@services-active">
                  <a class="nav-link" href=".?hal=agenda">Agenda</a>
                </li>
                <li class="nav-item @@contact-active">
                  <a class="nav-link" href=".?hal=galeri">Galeri</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- //header -->
  <!--  Main banner section -->
  <section class="w3l-main-banner">
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="container">
          <div class="banner-item">
            <div class="banner-info text-center">
              <h3 class="banner-text">
                POLSEK PAITON
              </h3>
              <p class="my-2 mb-sm-3">
                Jl. Raya pakuniran No.366, dusun kota sukodadi, sukodadi, kec. paiton, probolinggo, jawa timur 67291
</p>
            </div>
            <div class="banner-view">

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <?php
    $hal = @$_GET['hal'];
    $beranda = "hal/beranda.php";
    $p = "hal/$hal.php";
    if (!empty($hal) & file_exists($p)) {
      include "$p";
    } else {
      include "$beranda";
    }
    ?>
  </div>

  <section class="w3l-contacts-12" id="contact">
    <div class="container py-5">
      <div class="contacts12-main py-md-3">
        <div class="header-section text-center">
          <h3 class="mb-md-5 mb-4">Kritik dan Saran
        </div>
        <form action="" method="post">
          <div class="main-input">
            <input type="text" name="xmail" placeholder="Enter your mail" class="contact-input" required="" />
            <textarea class="contact-textarea contact-input" name="xpesan" placeholder="Enter your message" required=""></textarea>
          </div>
          <div class="text-right">
            <input type="submit" name="kirim" value="Kirim" class="btn-secondary btn theme-button">
          </div>
          <?php
          if (@$_POST['kirim']) {
            $email = $_POST['xmail'];
            $pesan = $_POST['xpesan'];
            $tanggal = date("Y-m-d");
            mysqli_query($k, "INSERT INTO tbpesan(email,pesan,tanggal)VALUES('$email','$pesan','$tanggal')");
            echo "<script>alert('Data berhasil disimpan');location='.'</script>";
          }
          ?>

        </form>
      </div>
    </div>
    <!-- footer -->
    <footer class="w3l-footer-29-main" id="footer">
      <div class="footer-29 py-5">
        <div class="container pb-lg-3">
          <div class="row footer-top-29">
            <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
              <a class="footer-logo mb-md-3 mb-2" href="#url"><img src="assets/images/logopolsek.png" width="70px" height="70px" alt="60" />Polsek paiton</a>
              <p>Jl. Raya pakuniran No.366, dusun kota sukodadi, sukodadi, kec. paiton, probolinggo, jawa timur 67291</p>
            </div>
          </div>
        </div>
      </div>
      <div id="footers14-block" class="py-3">
        <div class="container">
          <div class="footers14-bottom text-center">
            <div class="social">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook" target="_blank" aria-hidden="true"></span></a>
              <a href="#google" class="google"><span class="fa fa-google-plus" target="_blank" aria-hidden="true"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter" target="_blank" aria-hidden="true"></span></a>
              <a href="https://instagram.com/mhrp_wfc?igshid=YmMyMTA2M2Y="  target="_blank" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
              <a href="https://www.youtube.com/channel/UCOvhaCTftojD9M2u1AAkAnw" target="_blank" class="youtube"><span class="fa fa-youtube" target="_blank" aria-hidden="true"></span></a>
            </div>
            <div class="copyright mt-1">
              <p>&copy; Proggraming | Design by <a href="https://w3layouts.com/">mhrp_20</a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->

    </footer>
    <!-- Footer -->

    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Template JavaScript -->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>
    <!-- //stats number counter -->


    <!-- testimonials owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>

    <!-- script for owlcarousel -->
    <script>
      $(document).ready(function() {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: false
            },
            1000: {
              items: 1,
              nav: false
            }
          }
        })
      })
    </script>
    <!-- //script for owlcarousel -->
    <!-- //testimonials owlcarousel -->

    <!-- script for courses -->
    <script>
      $(document).ready(function() {
        $('.owl-two').owlCarousel({
          loop: true,
          margin: 30,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 2,
              nav: false
            },
            1000: {
              items: 3,
              nav: false
            }
          }
        })
      })
    </script>
    <!-- //script for courses -->

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function() {
        $('.navbar-toggler').click(function() {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- disable body scroll which navbar is in active -->

</body>

</html>