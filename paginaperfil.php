<!DOCTYPE html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png"
    href="img/minilogo1.png">
    <title>Pagina Perfil</title>
    <link rel="stylesheet" href="css/estilo_perfil.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    
<body>
    <div class="principal">
        <div class="D12">
              
                 
                
            <div class="D3">
                <a href="html/paginainicial.html">
                <img  title="Ver Página Inicial" src="img/casinha.png" width="120px" height="60px"> 
                </a> 

            </div>
            
            <div class="D5">
                <a href="html/paginahistorico.html">
                <img title="Ver Histórico" src="img/lupa.png" width="35px" height="35px"> 
                </a> 
                
            </div>
            <div class="D6">
                <a href="paginaperfil.php">
                <img  title="Ver Perfil" src="img/perfil.png" width="70px" height="70px"> 
                </a> 
                
            </div>
            <div class="D4">
                <a href="html/Paginalocalização.html">
                <img  title="The Inclusive Bakery" src="img/localização.png" width="40px" height="40px"> 
                </a> 
                
            </div>
            <div class="D7">
                MEU CARRINHO
            </div>
            <div class="D8">
                <a href="html/paginacarrinho.html">
                <img  title="Ver carrinho" src="img/carrinho.png" width="130px" height="80px"> 
                </a>
            </div>
            <div class="D9">
                <img src="img/trespontos.png" width="280px" height="190px"> 
                
               
                
            </div>
             
            <img class="logo" src="img/cupcake.png"   >  
        </div>
        

            
        </div>
        <div class="dados">
        <div class="fotoperfil">
            <div class="letraperfil">
                <?php
                    session_start();
                    include ("conecta.php");
                    $logado = $_SESSION["logado"];
                    $letra = substr($logado, 0, 1);
                    echo($letra);

                    $comando = $pdo->prepare("SELECT * FROM cadastro where email='$logado'");
                    $resultado = $comando->execute();
            
                    while( $linhas = $comando->fetch()){
                        $nome = $linhas["nome"];
                        $cpf = $linhas["cpf"];
                        $telefone = $linhas["telefone"];
                        $aniversario = $linhas["aniversario"];
                        $email = $linhas["email"];
                        $senha = $linhas["senha"];
                        $cep = $linhas["cep"];
                        $estado = $linhas["estado"];
                        $cidade = $linhas["cidade"];
                        $bairro= $linhas["bairro"];
                        $numero = $linhas["numero"];
                        $complemento = $linhas["complemento"];


                    }




                ?>
                
            </div>
            <div class="email">
                <?php
                echo("$logado");
                ?>

            </div>
          <div class="dados2">
          <div class="bloco1">
         

          <div class="nome">NOME:
          <?php
                echo("$nome");
                ?>
          </div>
            <div class="cpf">CPF:
            <?php
                echo("$cpf");
                ?>
            </div>
            <div class="telefone">TELEFONE:
            <?php
                echo("$telefone");
                ?>
            </div>
            <div class="aniversario">NASCIMENTO:
            <?php
                echo("$aniversario");
                ?>
            </div>
            <div class="login">EMAIL:
            <?php
                echo("$email");
                ?>
            </div>
            <div class="senha">SENHA:
            <?php
                echo("$senha");
                ?>
            </div>
            

          </div>
          <div class="bloco2">
            
            <div class="cep">CEP:
            <?php
                echo("$cep");
                ?>
            </div>
            <div class="estado">ESTADO:
            <?php
                echo("$estado");
                ?>
            </div>
            <div class="cidade">CIDADE:
            <?php
                echo("$cidade");
                ?>
            </div>
            <div class="bairro">BAIRRO:
            <?php
                echo("$bairro");
                ?>
            </div>
            <div class="numero">NÚMERO:
            <?php
                echo("$numero");
                ?>
            </div>
            <div class="complemento">COMPLEMENTO:
            <?php
                echo("$complemento");
                ?>
            </div>
           
          </div>
          </div>
        </div>
     

     
    

            
    </div>   
</body>
</html>     
         