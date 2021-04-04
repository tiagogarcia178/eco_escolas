<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BackOffice</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php
    require_once("../bd.php");
    $sql="SELECT * FROM slider";
    $result = $conn->query($sql);      
    $row = $result->fetch_assoc();

    ?>    

    <!-- Sidebar -->
    <?php require_once('sidebar.php');?>

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

          <div class="row">

            <div class="col-lg-6">
        
               <div class="card shadow mb-4" style="width: 400px;">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Slider de Imagens</h6>
                </div>
                <div class="card-body">

        <form action="../operacoes.php" method="POST">
            <div class="form-group">
               <input type="text" name="titulo" 
               placeholder="Titulo 1" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo']);?>"
               style="width: 358px;">

               <textarea name="texto" cols="42" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>

            </div>
            <div class="form-group">
               <input type="text" name="titulo_um" 
               placeholder="Título 2" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_secundario']);?>"
               style="width: 358px;">

               <textarea name="texto_um" cols="42" rows="5" class="textobreak"><?php echo ($row['texto_secundario']);?></textarea>

             </div>
             <div class="form-group">
               <input type="text" name="titulo_dois" 
               placeholder="Título 3" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_terceiro']);?>"
               style="width: 358px;">

               <textarea name="texto_dois" cols="42" rows="5" class="textobreak"><?php echo ($row['texto_terceiro']);?></textarea> 
            </div>
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_slider" >Editar Slider</button> 
            </div>
      </form>

                </div>
              </div>          

            </div>
            <?php
            $sql="SELECT * FROM inicio";
            $result = $conn->query($sql);      
            $row = $result->fetch_assoc();


            ?>

            <div class="col-lg-6">

              <div class="card shadow mb-4" style="width: 400px;">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Quem somos</h6>
                </div>
                <div class="card-body">
                
         <form action="../operacoes.php" method="POST">
            <div class="form-group">
               <input type="text" name="titulo" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo']);?>"
               style="width: 358px;">

               <textarea name="texto" cols="42" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>

            </div>
            <div class="form-group">
               <input type="text" name="sub_titulo" 
               placeholder="Sub título" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['sub_titulo']);?>"
               style="width: 358px;">

               <textarea name="sub_texto" cols="42" rows="5" class="textobreak"><?php echo ($row['sub_texto']);?></textarea>

             </div>
             <div class="form-group">
               <input type="text" name="sub_titulo_secundario" 
               placeholder="Sub título secundário" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['sub_titulo_secundario']);?>"
               style="width: 358px;">

               <textarea name="sub_texto_secundario" cols="42" rows="5" class="textobreak"><?php echo ($row['sub_texto_secundario']);?></textarea> 
            </div>


            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_quemsomos" >Editar Quem Somos</button> 
            </div>
        </form>
                  
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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