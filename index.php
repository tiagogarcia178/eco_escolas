<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ECO-Escolas</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/eco_logo.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php 

  include_once('navbar.php');
  include_once('hero.php');
  require_once("bd.php");

  $sql="SELECT * FROM inicio";
  $result = $conn->query($sql);      
  $row = $result->fetch_assoc();    
            
  ?>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/esco/7.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=wD6W2P86Agw" class="venobox play-btn mb-4" data-vbtype="video"
              data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2><?php echo($row['titulo']);?></h2>
              <p><?php echo($row['texto']);?></p>
            </div>

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100"> -->
              <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
              <h4 class="title"><a href=""><?php echo($row['sub_titulo']);?></a></h4>
              <p class="description"><?php echo($row['sub_texto']);?></p>
            <!-- </div> -->

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100"> -->
              <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
              <h4 class="title"><a href=""><?php echo($row['sub_titulo_secundario']);?></a></h4>
              <p class="description"><?php echo($row['sub_texto_secundario']);?></p>
            <!-- </div> -->

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



    <?php include_once('rodape.php');?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>