<?php

if(isset($_POST['submit'])){
    
    $newFileName= $_POST['filename']; //pedido de ulpoad da foto
    if (empty($_POST['filename'])) {
        $newFileName = "gallery";
    } else{
        $newFileName = strtolower(str_replace(" ", "-", $newFileName)); //tirar espaços
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES["file"];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);    //pegar extensão
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");  //so permite estes

    if (in_array( $fileActualExt, $allowed)) {
        if ($fileError === 0) { //sem erros
            if ($fileSize < 200000000) {  //testar tamanho
                
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../assets/img/gallery/" . $imageFullName;
                include_once('../bd.php');

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("location: ../galeria.php?upload=empty");
                    exit();
                }else{
                    $sql = "SELECT * FROM gallery";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo 'SQL statement failed !!!';
                    }else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO gallery (titleGallery, descGallery,	imgFullNameGallery,	orderGallery) VALUES (?, ?, ?, ?);";

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo 'SQL statement failed !!!';
                        }else{
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($fileTempName, $fileDestination);

                            header("location: ../galeria.php#portefolio");
                        }

                    }
                }
            }else{
                echo("Ficheiro demasiado grande!!!");
                exit();
            }

        }else{
            echo("Ocorreu um erro");
            exit();
        }

    } else{
        echo("Precisar de dar upload num ficheiro apropriado ");
        exit();

    }
}