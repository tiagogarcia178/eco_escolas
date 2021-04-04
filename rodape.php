<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include_once('bd.php');
        $sql="SELECT * FROM contactos";
        $result = $conn->query($sql);      
        $row = $result->fetch_assoc();    
    ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h4>ESCO</h4>
                        <p>
                           <strong>Morada: </strong><?php echo($row['texto_morada']);?><br>
                            <strong>Contactos: </strong><?php echo($row['contacto_um'] . " / " . $row['contacto_dois']);?><br>
                            <strong>Email: </strong><?php echo($row['email_um'] . " / " . $row['email_dois']);?><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/ESCOTVedras" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/ESCOTVedras/" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 footer-links">
                        <h4>ECO-ESCOLAS</h4>
                        <p>
                            Rua Genrel Gomes Araújo <br>
                            1350-355 Lisboa, Portugal <br><br>
                            <strong>Contactos: </strong> +351 21 394 27 46 <br>
                            <strong>Email Geral</strong> fee.portugal@abae.pt <br>
                            <strong>Email Direção</strong> abae@abae.pt <br>
                            <strong>Email Programa Eco-Escolas</strong> ecoescolas@abae.pt <br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <img src="assets/img/esco/esco logo.png" alt="" style="width:250px; height:200px;border:0;">
                    </div>

                </div>
            </div>
        </div>


    </footer><!-- End Footer -->

</body>

</html>