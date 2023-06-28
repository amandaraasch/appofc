<?php
    include("conecta.php");

    $adicionado  = $_GET["adicionado"];
    $observacao    = $_GET["observacao"];
    $numero    = $_GET["numero"];
    $sem_ovo      = $_GET["op_sem_ovo"];
    $sem_lactose   = $_GET["op_sem_lactose"];
    $sem_acucar    = $_GET["op_sem_acucar"];
    $sem_proteina_leite    = $_GET["op_sem_proteina_leite"];
    $sem_sal    = $_GET["op_sem_sal"];
    $sem_glutem  = $_GET["op_sem_glutem"];
    $op_sem_leite = $_GET["op_sem_leite"];
   
  //SE CLICOU NO BOTÃO INSERIR
   
        $comando = $pdo->prepare("INSERT INTO restricoes VALUES( $adicionado,'$observacao',$numero,$sem_ovo,$sem_lactose, $sem_acucar,$sem_proteina_leite, $sem_sal,$sem_glutem, $op_sem_leite,'')");
        $resultado = $comando->execute();
       header("Location:paginacarrinho.php?adicionado=$adicionado");