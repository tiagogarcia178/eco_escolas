<?php
session_start();
    if(!isset($_SESSION['nomeuser'])){
            header("location: index.php");
    }
    else

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/img/eco_logo.png" rel="icon">

        <style>
            .textobreak{
                page-break-before:always;
            }
        </style>
  </head>
  <body style="background-color: gray; color: white;">

    <?php
    require_once("bd.php");
    $sql="SELECT * FROM slider";
    $result = $conn->query($sql);      
    $row = $result->fetch_assoc();

    ?>    
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
         <div class="col-sm">
            <h1 style="text-align: center;">Início</h1>
            <h3>Slider de Imagens</h3>
        <form action="operacoes.php" method="POST">
            <div class="form-group">
               <input type="text" name="titulo" 
               placeholder="Titulo 1" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo']);?>">

               <textarea name="texto" cols="42" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>

            </div>
            <div class="form-group">
               <input type="text" name="titulo_um" 
               placeholder="Título 2" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_secundario']);?>">

               <textarea name="texto_um" cols="42" rows="5" class="textobreak"><?php echo ($row['texto_secundario']);?></textarea>

             </div>
             <div class="form-group">
               <input type="text" name="titulo_dois" 
               placeholder="Título 3" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_terceiro']);?>">

               <textarea name="texto_dois" cols="42" rows="5" class="textobreak"><?php echo ($row['texto_terceiro']);?></textarea> 
            </div>
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_slider" >Editar Slider</button> 
            </div>
        </form>
        <br>
        <?php
            $sql="SELECT * FROM inicio";
            $result = $conn->query($sql);      
            $row = $result->fetch_assoc();


        ?>
        <h3 style="text-align: center;">Quem Somos</h3> 
        <form action="operacoes.php" method="POST">
            <div class="form-group">
               <input type="text" name="titulo" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo']);?>">

               <textarea name="texto" cols="42" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>

            </div>
            <div class="form-group">
               <input type="text" name="sub_titulo" 
               placeholder="Sub título" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['sub_titulo']);?>">

               <textarea name="sub_texto" cols="42" rows="5" class="textobreak"><?php echo ($row['sub_texto']);?></textarea>

             </div>
             <div class="form-group">
               <input type="text" name="sub_titulo_secundario" 
               placeholder="Sub título secundário" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['sub_titulo_secundario']);?>">

               <textarea name="sub_texto_secundario" cols="42" rows="5" class="textobreak"><?php echo ($row['sub_texto_secundario']);?></textarea> 
            </div>


            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_quemsomos" >Editar Quem Somos</button> 
            </div>
        </form>
        </div>
        <?php
             $sql="SELECT * FROM galeria";
             $result = $conn->query($sql);      
             $row = $result->fetch_assoc();

        ?>
        <div class="col-sm">
            <h1 style="text-align: center;">Galeria</h1>
            <h3>Descrição</h3>

        <form action="operacoes.php" method="POST">
          
            <input type="text" name="titulo_galeria" 
               placeholder="Título" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo']);?>">

               <textarea name="texto_galeria" cols="42" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>
            <div class="form-group" style="text-align:center;">
            <br>
                <button type="submit" class="btn btn-primary" name="submit_galeria" >Editar Galeria</button> 
            </div>
        </form>
        <br>
        <br>
        <br>
        <a href="index.php" class="badge badge-success">Sair modo de edição</a>
        </div>
        <?php
             $sql="SELECT * FROM equipa";
             $result = $conn->query($sql);      
             $row = $result->fetch_assoc();

            
        ?>
        <div class="col-sm">
        <h1 style="text-align: center;">Equipa</h1>
            <h3>Descrição</h3>
            <form action="operacoes.php" method="POST">
            
                <input type="text" name="titulo_equipa" 
                placeholder="Título" class="form-control" aria-describedby="emailHelp"
                value="<?php echo ($row['titulo']);?>">

                <textarea name="texto_equipa" cols="39" rows="5" class="textobreak"><?php echo ($row['texto']);?></textarea>
                <div class="form-group" style="text-align:center;">
                <br>
                    <button type="submit" class="btn btn-primary" name="submit_equipa" >Editar Equipa</button> 
                </div>
            </form>
        <?php
            $sql="SELECT * FROM contactos";
            $result = $conn->query($sql);      
            $row = $result->fetch_assoc();
            
        ?>    
        <h1 style="text-align: center;">Contactos</h1>
        <h3>Descrição</h3>
          <form action="operacoes.php" method="POST">
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

        <?php
            $sql="SELECT * FROM planoacao";
            $result = $conn->query($sql);      
            $row = $result->fetch_assoc();
            
        ?>  

        <h3 style="text-align: center;">Plano Ação</h3> 
        <form action="operacoes.php" method="POST">
            <div class="form-group">
               <input type="text" name="titulo_atividade_um" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_atividade_um']);?>">

               <textarea name="texto_atividade_um" cols="39" rows="5" class="textobreak"><?php echo ($row['texto_atividade_um']);?></textarea>

               <input type="text" name="topico_atividade_um" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['topico_atividade_um']);?>">

            </div>
            <div class="form-group">
               <input type="text" name="titulo_atividade_dois" 
               placeholder="Sub título" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_atividade_dois']);?>">

               <textarea name="texto_atividade_dois" cols="39" rows="5" class="textobreak"><?php echo ($row['texto_atividade_dois']);?></textarea>

               <input type="text" name="topico_atividade_dois" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['topico_atividade_dois']);?>">

             </div>
             <div class="form-group">
               <input type="text" name="titulo_atividade_tres" 
               placeholder="Sub título secundário" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_atividade_tres']);?>">

               <textarea name="texto_atividade_tres" cols="39" rows="5" class="textobreak"><?php echo ($row['texto_atividade_tres']);?></textarea> 

               <input type="text" name="topico_atividade_tres" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['topico_atividade_tres']);?>">

            </div>

            <div class="form-group">
               <input type="text" name="titulo_atividade_quatro" 
               placeholder="Sub título secundário" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['titulo_atividade_quatro']);?>">

               <textarea name="texto_atividade_quatro" cols="39" rows="5" class="textobreak"><?php echo ($row['texto_atividade_quatro']);?></textarea> 

               <input type="text" name="topico_atividade_quatro" 
               placeholder="Titulo" class="form-control" aria-describedby="emailHelp"
               value="<?php echo ($row['topico_atividade_quatro']);?>">

            </div>

            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-primary" name="submit_planoacao" >Editar Plano Ação</button> 
            </div>
        </form>
            
        </div>
    </div>
    </div>
  </body>
</html>