<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

    <?php session_start();
          include_once('bd.php');
          $sql="SELECT * FROM contactos";
          $result = $conn->query($sql);      
          $row = $result->fetch_assoc();    
    ?>


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="icofont-envelope"></i><a href="mailto:contact@example.com"><?php echo($row['email_um']);?></a>
                <i class="icofont-phone"></i> <?php echo($row['contacto_um']);?>
            </div>
            <div class="social-links float-right">
                <!-- <i href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
                <a href="https://twitter.com/ESCOTVedras" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/ESCOTVedras/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <!-- <i href="#" class="skype"><i class="icofont-skype"></i></a> -->
                <!-- <i href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
           
                 <?php if(!isset($_SESSION['nomeuser'])){?> 
                    <a href="login.php"><i>Login</i></a>

                 <?php } ?>
                                                 
                <?php if(isset($_SESSION['nomeuser'])){?>          
                    <a href="logout.php"><i>Desconectar</i></a>
                    <!-- <a href="backoffice.php"><i>Editar Website</i></a>               -->
                    <a href="dashboard/index_backoffice.php"><i>Editar Website</i></a>              
                    <i href="#"><i>Bem-Vindo <?php echo($_SESSION['nomeuser']);?></i></a>
                <?php }?>

                
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">
            <div class="logo float-left">
                <a href="index.php">
                    <h1>ESCO</h1>
                </a>
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Início</a></li>
                    <li><a href="index.php#about">ECO-Escolas</a></li>
                    <li><a href="planoacao.php#about">Plano ação</a></li>
                    <li><a href="noticias.php#faq">Notícias</a></li>
                    <li><a href="galeria.php#portefolio">Galeria</a></li>
                    <li><a href="equipa.php#team">Equipa</a></li>
                    <li><a href="contactos.php#contact">Contactos</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->
    </head>

    <body>

    </body>

</html>