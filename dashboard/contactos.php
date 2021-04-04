<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Cards</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php require_once('sidebar.php');
      require_once("../bd.php");
      ?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <?php  require_once('topbar.php');?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contactos</h1>
          </div>
          <?php
             $sql="SELECT * FROM contactos";
             $result = $conn->query($sql);      
             $row = $result->fetch_assoc();

        ?>

          <div class="row">

          
          <div class="row">

            <div class="col-lg-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4" style="width: 400px; margin-left:15px;">
                <div class="card-header py-3">
                </div>
                <div class="card-body">

                <form action="../operacoes.php" method="POST">
          <div class="form-group">
                <input type="text" name="titulo" 
                    placeholder="Título" class="form-control" aria-describedby="emailHelp"
                    value="<?php echo ($row['titulo']);?>">
          </div>
          <div class="form-group">
            <input type="text" name="titulo_morada" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['titulo_morada']);?>">

            <input type="text" name="texto_morada" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                 value="<?php echo ($row['texto_morada']);?>">
            </div>
            <div class="form-group">
            <input type="text" name="titulo_email" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['titulo_email']);?>"> 

             <input type="text" name="email_um" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['email_um']);?>">

            <input type="text" name="email_dois" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                 value="<?php echo ($row['email_dois']);?>">
            </div>
            <div class="form-group">
            <input type="text" name="titulo_contacto" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['titulo_contacto']);?>">
        
            <input type="text" name="contacto_um" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['contacto_um']);?>"> 
          
            <input type="text" name="contacto_dois" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['contacto_dois']);?>">    
            <div>
            <br>
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_contactos">Editar Contactos</button> 
            </div>
        </form>


                </div>
              </div>

            </div>


            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
