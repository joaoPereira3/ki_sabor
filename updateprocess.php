<?php
include("conexao.php");

    
    $id = $_POST['id'] ?? "";
    $data = $_POST['data'];
    $ref = $_POST['refeicao'];
    $lugares = $_POST['lugares'];
    
    

mysqli_query($conexao, "UPDATE reservas SET data_ref='$data', refeicao='$ref', lugares= '$lugares' WHERE id=$id");

header("Location: reservas.php");

?>