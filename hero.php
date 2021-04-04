<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once("bd.php");

   
?>

     <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

        <?php

           $sql="SELECT * FROM slider";
           $result = $conn->query($sql);      
           $row = $result->fetch_assoc();       
        
        ?>

          <div class="carousel-item active" style="background-image: url('assets/img/esco/7.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"><?php echo($row['titulo']);?></h2>
                <p class="animated fadeInUp"><?php echo($row['texto']);?></p>
              </div>
            </div>
          </div>


        <div class="carousel-item" style="background-image: url('assets/img/esco/4.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"><?php echo($row['titulo_secundario']);?></h2>
                <p class="animated fadeInUp"><?php echo($row['texto_secundario']);?></p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('assets/img/esco/6.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown"><?php echo($row['titulo_terceiro']);?></h2>
                <p class="animated fadeInUp"><?php echo($row['texto_terceiro']);?></p>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
    
</body>
</html>