<?php
 include("../conecta.php"); //conecta com o banco de dados
 if(isset($_GET["codigo"]))
{
    $codigo=    $_GET["codigo"];  
    $preco=    $_GET["preco"];     
    $comando = $pdo->prepare("UPDATE precos SET preco_atual=$preco where id_preco=$codigo");
    $resultado = $comando->execute();
 
}
 ?>

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
    <link rel="stylesheet" href="precos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>ADMNISTRAÇÃO</title>
</head>
<body>
   
    <div class="menu">

            
    <a class="ME" href="../pedidospendentes_adm.php"><b>USUÁRIOS</b></a>
                
    <a class="ME" href="avaliacao.php"><b>AVALIAÇÃO</b></a>

    <a class="ME" href="precos.php"><b>PRODUTOS</b></a>

    </div>
    <div class="prin">
        <div class="tabela">
         <B>NOSSOS PREÇOS 🧁</B> <br>
        <table class="tabelinha">
            <thead>
                <tr>
                    <th class="verde">NOME DO PRODUTO</th>
                    <th class="verde">PREÇO ATUAL</th>
                    <th class="verde">NOVO PREÇO</th>
                    <th class="verde">ALTERAR PREÇO</th>
                </tr>
            </thead>
            <?php
               
                $comando = $pdo->prepare("SELECT * FROM precos");
                $resultado = $comando->execute();
        
                while( $linhas = $comando->fetch()){
                    $nome = $linhas["nome_produto"];
                    $preco = $linhas["preco_atual"];
                    $idpreco = $linhas["id_preco"];
                    
                    echo("
                        <tr>
                        <td class='verde'>$nome</td>
                        <td class='verde'>$preco</td>
                        <td class='verde'>
                        <fieldset><input id='input_$idpreco' class='verde'type='text' ></fieldset> 
                        </td>
                        <td class='verde'><button name='alterar' onclick=\"alterar($idpreco,'input_$idpreco');\"><b>ALTERAR</b></button></td>
                        </tr>
                    ");
                }
               
                
            
            ?>

</body>
<script>
    function alterar(codigo,id)
    {
        window.open("precos.php?codigo="+codigo+"&preco="+document.getElementById(id).value,"_self")      
    }
</script>
</html>