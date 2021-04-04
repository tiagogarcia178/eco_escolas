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

        $sql="SELECT * FROM galeria";
        $result = $conn->query($sql);      
        $row = $result->fetch_assoc();
        
    ?>

   
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portefolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <br>
            <br>
            <div class="section-title">
                <h2><?php echo($row['titulo']);?></h2>
                <p>
                    <?php echo($row['texto']);?>
                </p>
            </div>

        
        <?php
            include_once ('bd.php');
            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo 'SQL statement failed';
            } else{

                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)){ ?>
               
            <!-- <div class="row portfolio-container"> -->

                <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web"> -->

                    <div class="portfolio-wrap" style="width:270px; height: relative; text-align:center; display:inline-block;">               
                     <img src="assets/img/gallery/<?php echo($row['imgFullNameGallery']);?>" class="img-fluid" alt="">

                        <div class="portfolio-info">

                            <h4><?php echo($row['titleGallery']);?></h4>
                            <p><?php echo($row['descGallery']);?></p>

                            <!-- <div class="portfolio-links"> -->
                           <a href="assets/img/gallery/<?php echo($row['imgFullNameGallery']);?>" data-gall="portfolioGallery" class="venobox" title="<?php echo($row['titleGallery']);?>"><i class="icofont-eye" style="max-width: 100%; max-height: 100%;"></i></a>
                            <!-- </div> -->
                        </div>

                    </div>
                <!-- </div> -->

             <!-- </div> -->

         <?php
                }
            } ?>
                

        </div>
    </section><!-- End Our Portfolio Section -->

<?php if(isset($_SESSION['nomeuser'])){?>
    <section>

        <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>         

            <div class="col-sm">       
                <form action="includes/galeria-upload.inc.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" name="filename" placeholder="Nome do ficheiro..." class="form-control" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="filetitle" class="form-control" placeholder="Título da Imagem" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="filedesc" class="form-control" placeholder="Descrição da Imagem" >
                    </div>
                    
                    <input type="file" name="file"><br>
                    <br>

                    <button type="submit" class="btn btn-primary" name="submit" >Carregar</button>                     
                 </form>
            </div>
            <div class="col-sm">

            </div>        
            </div>
        </div>
    </section>
<?php } ?>


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