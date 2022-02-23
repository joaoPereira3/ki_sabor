<?php
include("conexao.php");

$id=$_POST['id'] ?? "";

$query = "DELETE FROM reservas WHERE id=$id";
mysqli_query($conexao, $query);
header('Location: '.$uri.'/ki_sabor/reservas.php');
?>