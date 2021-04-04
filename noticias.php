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
          
          $sql="SELECT * FROM noticias";
          $result = $conn->query($sql);  
          
    ?>

    <main id="main">

     <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">
            <br>

                <div class="section-title">
                    <h2>Notícias</h2>
                </div>

              <div class="row  d-flex align-items-stretch">
                <?php while ($row = $result->fetch_assoc()){ ?>                
                    <div class="col-lg-6 faq-item"  data-aos="fade-up" data-aos-delay="100" style="word-wrap: break-word">
                        <h4><?php echo($row['titulo']);?>

                     <?php if(isset($_SESSION['nomeuser'])){?>
                        <a href="noticias_operacao.php?id=<?php echo($row['id']);?>"class="btn btn-link" >Editar</a><a href="noticias_operacao.php?ideliminar=<?php echo($row['id']);?>"class="btn btn-link" >Eliminar</a></h4>
                    <?php }?>
                    </h4>
                    <p>
                        <?php echo($row['texto']);?>
                    </p>

                    </div>
                <?php }?>
              </div>
            </div>
        </section>

        <?php if(isset($_SESSION['nomeuser'])){?>

<div class="container">
      <div class="row">
                  <div class="col-sm">

                  </div>

      <div class="col-sm">
      <br>   
        <form action="operacoes.php" method="POST">
              <div class="form-group">
                  <input type="text" name="titulo" placeholder="Titulo" class="form-control" aria-describedby="emailHelp" style="text-align: center;">
              </div>    
              <textarea name="texto" cols="50" rows="10" placeholder="Texto"></textarea>
                 <button type="submit" class="btn btn-primary" name="submit_noticia" style="text-align: center;" >Inserir</button> 
              <br>
              <br>
            
         </form>
      </div>
      <div class="col-sm">

      </div>     
      </div>
  </div>

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