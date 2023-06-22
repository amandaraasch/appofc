<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="Website Icon" type="png"
     href="minilogo1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png"
    href="../img/minilogo1.png">  
    <link rel="stylesheet" href="avaliacao.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>ADMNISTRAÇÃO</title>
</head>
<body>
    <form>
    <div class="menu">

            
    <a class="ME" href="../pedidospendentes_adm.php"><b>USUÁRIOS</b></a>
                
    <a class="ME" href="avaliacao.php"><b>AVALIAÇÃO</b></a>

    <a class="ME" href="precos.php"><b>PRODUTOS</b></a>
    

    </div>
    <div class="prin">
        <div class="tabela">
         <B>NOSSAS AVALIAÇÕES ⭐</B> <br>
        <table class="tabelinha">
            <thead>
                <tr>
                    <th class="verde">NOTAS DA AVALIAÇÃO</th>
                </tr>
            </thead>
            <?php
                include("../conecta.php"); //conecta com o banco de dados
                $comando = $pdo->prepare("SELECT * FROM avaliacao");
                $resultado = $comando->execute();
        
                while( $linhas = $comando->fetch()){
                    $nota = $linhas["nota"];
                    
                    echo("
                        <tr>
                        <td class='verde'>$nota</td>
                        </tr>
                    ");
                }
            
            ?>