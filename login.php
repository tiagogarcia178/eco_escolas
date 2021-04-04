<?php

if(isset($_SESSION['nomeuser'])){
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ECO-Escolas</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <link href="assets/css/login.css" rel="stylesheet">

</head>

<body>

  <?php include_once('navbar.php');
        require_once('bd.php');

        if(isset($_POST['ok'])){
            
            if($_POST['email'] == "" && $_POST['password'] == ""){            
              echo("Tem que preencher todos os campos");
            }
            else{                         //user logado
              $email = $_POST['email'];
              $password = $_POST['password'];

              $sql="SELECT * FROM utilizador WHERE email='$email' AND password='$password'";
              $result = $conn->query($sql);      
              $row = $result->fetch_assoc();

              if($email == $row["email"] && $password == $row["password"]){
                
                if(isset($_POST['remember'])){
                  setcookie('user', $user, time()+3600);
                }                                
                $_SESSION['nomeuser'] = $row['nome'];
                header("location: index.php");
              }
              else{
                echo("E-mail ou password incorretos!!!");
              }         
                
          
            }        
        }    
        
  ?>

 <!-- login form -->

 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!-- <form id="login-form" class="form" action="" method="post"> -->
                          <br>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember"> Guardar sessão</input><br>
                                <button type="submit" name="ok" class="btn btn-info btn-md" value="submit">Login</button>
                            </div>
                      
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
          
    </form>


</div>

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