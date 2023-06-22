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
    <link rel="stylesheet" href="css/estilo_pedidospendentes_adm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>ADMNISTRAÇÃO</title>
</head>
<body>
    <form>
    <div class="menu">

            <a class="ME" href="pedidospendentes_adm.php"><b>USUÁRIOS</b></a>
                
            <a class="ME" href="ADM/avaliacao.php"><b>AVALIAÇÃO</b></a>
        
            <a class="ME" href="ADM/precos.php"><b>PRODUTOS</b></a>
        
    </div>
    <div class="prin">
        <div class="tabela">
         <B>NOSSOS USUÁRIOS 🧁</B> <br>
        <table class="tabelinha">
            <thead>
                <tr>
                    <th class="verde">EMAIL DO USUÁRIO</th>
                    <th class="verde">NOME DO USUÁRIO</th>
                    <th class="verde">CPF DO USUÁRIO</th>
                    <th class="verde">TELEFONE DO USUÁRIO</th>
                    <th class="verde">PERMISSÃO</th>
                    </th>
                </tr>
            </thead>
            <?php
                include("conecta.php"); //conecta com o banco de dados
                $comando = $pdo->prepare("SELECT * FROM cadastro");
                $resultado = $comando->execute();
        
                while( $linhas = $comando->fetch()){
                    $email = $linhas["email"];
                    $nome = $linhas["nome"];
                    $cpf = $linhas["cpf"];
                    $telefone = $linhas["telefone"];
                    echo("
                        <tr>
                        <td class='verde'>$email</td>
                        <td class='verde'>$nome</td>
                        <td class='verde'>$cpf</td>
                        <td class='verde'>$telefone</td>
                        <td class='verde'><button onclick=\"excluir('$email');\"><b>EXCLUIR</b></button></td>
                        </tr>
                    ");
                }
            
            ?>
            
        </table> 
    </div> 
    </div>
</form>
    
</body>
<script>
    function excluir(email)
    {
     
        window.open("excluir.php?email="+email,"_blank");
    }
</script>
</html>