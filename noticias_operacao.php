<?php
session_start();
    if(!isset($_SESSION['nomeuser'])){
            header("location: index.php");
    }
    else

?>
<!doctype html>
<html lang="en" style="background-color: gray;">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/img/eco_logo.png" rel="icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: gray;">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php 
        require_once('bd.php');
          
        $sql="SELECT * FROM noticias";
        $result = $conn->query($sql); 
        $row = $result->fetch_assoc();  

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql="SELECT * FROM noticias WHERE id=$id";
            $result = $conn->query($sql); 
            $row = $result->fetch_array();

            $titulo = $row['titulo'];
            $texto = $row['texto'];
            
            
        }
        
        if(isset($_POST['editar'])){
            // $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];

            $sql="UPDATE noticias SET titulo='$titulo', texto='$texto' WHERE id=$id";
            $result = $conn->query($sql); 
           
           header("location: noticias.php");
        }

        if(isset($_GET['ideliminar'])){
            $id = $_GET['ideliminar'];
            $sql="DELETE FROM noticias WHERE id=$id";
            $result = $conn->query($sql); 
            
            header("location: noticias.php");


        }
          
    ?>

    <div class="container" style="background-color: gray;">
      <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            <br>
            <br>
            <br>
            <br>
            <br>
            <form action="" method="POST">
                <h3 style="text-align:center;">Editar Notícia</h3>
                    <div class="form-group">
                        <input type="text" name="titulo" placeholder="Titulo" class="form-control" aria-describedby="emailHelp" style="text-align: center;" value="<?php echo($row['titulo']);?>">
                    </div>    
                    <textarea name="texto" cols="50" rows="10" placeholder="Texto"><?php echo($row['texto']);?></textarea>
                    <button type="submit" class="btn btn-primary" name="editar">Editar</button> 
                    
            </form>
            </div>
            <div class="col-sm">

            </div>
      </div>
   </div>
  </body>
</html>