<?php
require_once('bd.php');

if(isset($_POST['submit_noticia'])){

    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];

    $sql="INSERT INTO noticias (titulo, texto) VALUES ('$titulo', '$texto')";
    $result = $conn->query($sql);  

    header("location: noticias.php"); 
       
}
if(isset($_POST['submit_slider'])){
          
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $titulo_secundario = $_POST['titulo_um'];
    $texto_secundario = $_POST['texto_um'];
    $titulo_terceiro = $_POST['titulo_dois'];
    $texto_terceiro = $_POST['texto_dois'];

    $sql="UPDATE slider SET titulo='$titulo', texto='$texto', titulo_secundario='$titulo_secundario', texto_secundario='$texto_secundario', titulo_terceiro='$titulo_terceiro', texto_terceiro='$texto_terceiro' WHERE id='1'";
    $result = $conn->query($sql);  
    header("location: dashboard/index_backoffice.php");


}
if(isset($_POST['submit_quemsomos'])){
    $titulosomos = $_POST['titulo'];
    $textosomos = $_POST['texto'];
    $sub_titulo = $_POST['sub_titulo'];
    $sub_texto = $_POST['sub_texto'];
    $sub_titulo_secundario = $_POST['sub_titulo_secundario'];
    $sub_texto_secundario = $_POST['sub_texto_secundario'];

    $sql="UPDATE inicio SET titulo='$titulosomos', texto='$textosomos', sub_titulo='$sub_titulo', sub_texto='$sub_texto', sub_titulo_secundario='$sub_titulo_secundario', sub_texto_secundario='$sub_texto_secundario' WHERE id='1'";
    $result = $conn->query($sql);  
    header("location: dashboard/index_backoffice.php");
    
}
if(isset($_POST['submit_galeria'])){
    $titulo_galeria = $_POST['titulo_galeria'];
    $texto_galeria = $_POST['texto_galeria'];

   $sql="UPDATE galeria SET titulo='$titulo_galeria', texto='$texto_galeria' WHERE id='1'";
   $result = $conn->query($sql);  
   header("location: dashboard/index_backoffice.php");

}
if(isset($_POST['submit_equipa'])){
    $titulo_equipa = $_POST['titulo_equipa'];
    $texto_equipa = $_POST['texto_equipa'];

   $sql="UPDATE equipa SET titulo='$titulo_equipa', texto='$texto_equipa' WHERE id='1'";
   $result = $conn->query($sql);  
   header("location: dashboard/index_backoffice.php");

}
if(isset($_POST['submit_contactos'])){
    $titulo = $_POST['titulo'];
    $titulo_morada = $_POST['titulo_morada'];
    $texto_morada = $_POST['texto_morada'];
    $titulo_email = $_POST['titulo_email'];
    $email_um = $_POST['email_um'];
    $email_dois = $_POST['email_dois'];
    $titulo_contacto = $_POST['titulo_contacto'];
    $contacto_um = $_POST['contacto_um'];
    $contacto_dois = $_POST['contacto_dois'];

    $sql="UPDATE contactos SET titulo='$titulo', titulo_morada='$titulo_morada', texto_morada='$texto_morada', titulo_email='$titulo_email', email_um='$email_um', email_dois='$email_dois', titulo_contacto='$titulo_contacto', contacto_um='$contacto_um', contacto_dois='$contacto_dois' WHERE id='1'";
    $result = $conn->query($sql);  
    header("location: dashboard/index_backoffice.php");
}
if(isset($_POST['submit_planoacao'])){
    $titulo_atividade_um = $_POST['titulo_atividade_um'];
    $texto_atividade_um = $_POST['texto_atividade_um'];
    $topico_atividade_um = $_POST['topico_atividade_um'];

    $titulo_atividade_dois = $_POST['titulo_atividade_dois'];
    $texto_atividade_dois = $_POST['texto_atividade_dois'];
    $topico_atividade_dois = $_POST['topico_atividade_dois'];

    $titulo_atividade_tres = $_POST['titulo_atividade_tres'];
    $texto_atividade_tres = $_POST['texto_atividade_tres'];
    $topico_atividade_tres = $_POST['topico_atividade_tres'];

    $titulo_atividade_quatro = $_POST['titulo_atividade_quatro'];
    $texto_atividade_quatro = $_POST['texto_atividade_quatro'];
    $topico_atividade_quatro = $_POST['topico_atividade_quatro'];

    $sql="UPDATE planoacao SET titulo_atividade_um='$titulo_atividade_um', texto_atividade_um='$texto_atividade_um', topico_atividade_um='$topico_atividade_um', titulo_atividade_dois='$titulo_atividade_dois', texto_atividade_dois='$texto_atividade_dois', topico_atividade_dois='$topico_atividade_dois', titulo_atividade_tres='$titulo_atividade_tres', texto_atividade_tres='$texto_atividade_tres',topico_atividade_tres='$topico_atividade_tres', titulo_atividade_quatro='$titulo_atividade_quatro', texto_atividade_quatro='$texto_atividade_quatro', topico_atividade_quatro='$topico_atividade_quatro' WHERE id='1'";
    $result = $conn->query($sql);  
    header("location: dashboard/index_backoffice.php");
    
}