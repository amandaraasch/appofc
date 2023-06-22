<?php
    include("conecta.php");
    $email=$_GET['email'];
    $comando = $pdo->prepare("DELETE FROM cadastro where email=\"$email\" ");
    $resultado = $comando->execute();

    $comando = $pdo->prepare("DELETE FROM usuarios where login=\"$email\" ");
    $resultado = $comando->execute();

    header("Location: pedidospendentes_adm.php");
?>