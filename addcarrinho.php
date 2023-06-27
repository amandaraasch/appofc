<?php
    include("conecta.php");

    $op_sem_leite = $_GET["op_sem_leite"];
    $sem_ovo      = $_GET["sem_ovo"];
    $sem_acucar    = $_GET["sem_acucar"];
    $sem_sal    = $_GET["sem_sal"];
    $sem_glutem  = $_GET["sem_glutem"];
    $sem_proteina_leite    = $_GET["sem_proteina_leite"];
    $sem_lactose   = $_GET["sem_lactose"];
    $obs    = $_GET["obs"];
    $sem_numero    = $_GET["sem_numero"];

    //SE CLICOU NO BOTÃO INSERIR
   
        $comando = $pdo->prepare("INSERT INTO restricoes VALUES( $op_sem_leite ,$sem_ovo,$sem_acucar,$sem_sal,$sem_glutem,$sem_proteina_leite,$sem_lactose, $sem_numero,' $obs ')");
        $resultado = $comando->execute();
        header("Location: html/paginacarrinho.php");