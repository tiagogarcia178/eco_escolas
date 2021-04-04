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

    <?php include_once('navbar.php');
          require_once('bd.php');
          
          $sql="SELECT * FROM contactos";
          $result = $conn->query($sql);      
          $row = $result->fetch_assoc();    ?>

   
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <br>
            <br>

            <div class="section-title">
                <h2><?php echo($row['titulo']);?></h2>
            </div>

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3><?php echo($row['titulo_morada']);?></h3>
                        <p><?php echo($row['texto_morada']);?></p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3><?php echo($row['titulo_email']);?></h3>
                        <p><?php echo($row['email_um']);?><br><?php echo($row['email_dois']);?></p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box ">
                        <i class="bx bx-phone-call"></i>
                        <h3><?php echo($row['titulo_contacto']);?></h3>
                        <p><?php echo($row['contacto_um']);?><br><?php echo($row['contacto_dois']);?></p>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

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