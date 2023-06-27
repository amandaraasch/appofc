<?php
 include("../conecta.php"); //conecta com o banco de dados
?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png"
    href="../img/minilogo1.png">
    <title>Cardápio Salgados</title>
    <link rel="stylesheet" href="../css/estilo_salgados.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="principal">
        <div class="D12">
              
                 
                
            <div class="D3">
                <a href="paginainicial.php">
                <img  title="Ver Página Inicial" src="../img/casinha.png" width="120px" height="60px"> 
                </a> 

            </div>
            
             <div class="D5">
                <a href="paginahistorico.html">
                <img title="Ver Histórico" src="../img/lupa.png" width="35px" height="35px"> 
                </a> 
                
             </div>
             <div class="D6">
                <a href="../paginaperfil.php">
                <img  title="Ver Perfil" src="../img/perfil.png" width="70px" height="70px"> 
                </a> 
                
             </div>
             <div class="D4">
                <a href="Paginalocalização.html">
                <img title="The Inclusive Bakery" src="../img/localização.png" width="40px" height="40px"> 
                </a> 
                
             </div>
             <div class="D7">
                MEU CARRINHO
            </div>
            <div class="D8">
                <a href="../paginacarrinho.php">
                <img  title="Ver carrinho" src="../img/carrinho.png" width="130px" height="80px"> 
                </a>
            </div>
             <div class="D9">
                <img src="../img/trespontos.png" width="280px" height="190px"> 
                
             </div>
             
            <div class="D11"></div>

           <img class="logo" src="../img/cupcake.png"   >  
        
        

          <div class="propaganda">
            <div onclick="executa();" class="botaodeslizar">
                <img src="../img/seta02.png" width="40px">
             </div>
             <div onclick="executa2();" class="botaodeslizar2">
                 <img src="../img/seta002.png" width="40px">
              </div>
                
            <div class="carrossel" id="carrossel">
                <div class="todas">
                    <?php
    $comando = $pdo->prepare("SELECT * FROM precos where tipo= 0");
    $resultado = $comando->execute();

    if ($resultado) {
        if ($comando->rowCount() > 0) {
            $salgados = $comando->fetchAll(PDO::FETCH_ASSOC);

            foreach ($salgados as $salgado) {
                $id = $salgado['id_preco'];
                $nome = $salgado['nome_produto'];
                $preco = $salgado['preco_atual'];
                $imagem = $salgado['imagem'];
            
                echo '<div id="' . $id . '" class="img_legenda">';
                echo '<img onclick="adicionar(' . $id . ');" src="data:image/jpeg;base64,' . base64_encode($imagem) . '" width="250px" height="320px">';
                echo '<div class="preco">';
                echo '<b>' . $nome . '</b>';
                echo '<b>R$ ' . $preco . '</b>';
                echo '</div>';
                echo '</div>';
            }
            
        }
    } else {
        echo "Erro na execução da consulta.";
    }
    ?>
                </div>
                <div class="titulo">
                    SALGADOS:
                </div>
               
            
              <div class="personalize">
                   
                   
                <div class="botãoescolha">
                    <a href="#" onclick="abrir('../paginaescolha.php');" class="btn btn-white btn-animate">Personalizar pedido</a>
                </div>
                </div>

        
    </div>
    
</body>
<script>
    function executa()
    {
        carrossel.classList.remove("teste2")
        carrossel.classList.add("teste")


    }
    function executa2()
    {
        carrossel.classList.remove("teste")
        carrossel.classList.add("teste2")


    }
  
    clicks=0
    adicionado=""
    function adicionar(produto)
    {
        console.log("entrou")
        clicks=clicks+1
        console.log(clicks)
        adicionado=produto
        console.log(produto)
        if(clicks==1)
        {

        
            if(document.getElementById(produto).style.borderColor!="green")
            {
                document.getElementById(produto).style.borderStyle = "solid"
                document.getElementById(produto).style.borderColor="green"
            }
            else
            {
                document.getElementById(produto).style.borderStyle = "none"
                document.getElementById(produto).style.borderColor="red"
            }
            

        }
        else
        {
            clicks=1
            document.getElementById("1").style.borderStyle = "none"
            document.getElementById("2").style.borderStyle = "none"
            document.getElementById("3").style.borderStyle = "none"
            document.getElementById("4").style.borderStyle = "none"
            document.getElementById("5").style.borderStyle = "none"
            document.getElementById("6").style.borderStyle = "none"
            document.getElementById("7").style.borderStyle = "none"

            document.getElementById(produto).style.borderColor="green"
            document.getElementById(produto).style.borderStyle = "solid"


        }
            
       
        
    }
    function abrir(arquivo)
    {

        window.open(arquivo+"?adicionado=" +adicionado);
    }
</script>
</html>