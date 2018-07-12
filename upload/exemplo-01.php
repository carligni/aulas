<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"):

    $file = $_FILES["fileUpload"];

    if ($file["error"]):
        throw new Exception("Erro ao enviar ficheiro " . $file["error"]);
    endif;

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)):
        mkdir($dirUploads);
    endif;

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])):
        echo "Ficheiro enviado com sucesso";
    else:
        throw new Exception("Não foi possível fazer o upload");
    endif;

endif;

?>

<form method="post" enctype="multipart/form-data"> 

    <input type="file" name="fileUpload">

    <button type="submit">Enviar</button>

</form>