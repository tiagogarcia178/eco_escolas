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
  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php include_once('navbar.php');
          require_once('bd.php');
                  
          $sql="SELECT * FROM planoacao";
          $result = $conn->query($sql);      
          $row = $result->fetch_assoc();
     ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br>
<div class="container bg">

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3 rwrapper">
     <div class="rlisting">
        <div class="col-md-12 nopad">
          <img src="assets/img/esco/7.jpg" class="img-responsive">
        </div>
        <div class="col-md-12 nopad">
          <h5><?php echo ($row['titulo_atividade_um']);?></h5>
           <p style="word-wrap: break-word"><?php echo($row['texto_atividade_um']);?></p>
           <div class="rfooter">
             <i class="fa fa-phone-square"></i><?php echo($row['topico_atividade_um']);?>
           </div>
        </div>
      </div>
    </div>
  
    <div class="col-xs-12 col-sm-6 col-md-3 rwrapper">
     <div class="rlisting">
        <div class="col-md-12 nopad">
          <img src="assets/img/esco/7.jpg" class="img-responsive">
        </div>
        <div class="col-md-12 nopad">
          <h5><?php echo($row['titulo_atividade_dois']);?></h5>
           <p style="word-wrap: break-word"><?php echo($row['texto_atividade_dois']);?></p>
           <div class="rfooter">
             <i class="fa fa-phone-square"></i><?php echo($row['topico_atividade_dois']);?>
           </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 rwrapper">
     <div class="rlisting">
        <div class="col-md-12 nopad">
          <img src="assets/img/esco/7.jpg" class="img-responsive">
        </div>
        <div class="col-md-12 nopad">
          <h5><?php echo($row['titulo_atividade_tres']);?></h5>
           <p style="word-wrap: break-word"><?php echo($row['texto_atividade_tres']);?></p>
           <div class="rfooter">
             <i class="fa fa-phone-square"></i><?php echo($row['topico_atividade_tres']);?>
           </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 rwrapper">
     <div class="rlisting">
        <div class="col-md-12 nopad">
          <img src="assets/img/esco/7.jpg" class="img-responsive">
        </div>
        <div class="col-md-12 nopad">
          <h5><?php echo($row['titulo_atividade_quatro']);?></h5>
           <p style="word-wrap: break-word"><?php echo($row['texto_atividade_quatro']);?></p>
           <div class="rfooter">
             <i class="fa fa-phone-square"></i><?php echo($row['topico_atividade_quatro']);?>
           </div>
        </div>
      </div>
    </div>
 </div>
</div>
<br>
    <?php include_once('rodape.php'); ?>

    </script>
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