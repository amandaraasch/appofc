<?php

$adicionado=$_GET["adiconado"];
include("conecta.php");

$comando = $pdo->prepare("SELECT * FROM precos where nome_produto='$adicionado'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){
    $codigo = $linhas["id_preco"];
}

if($adicionado=="1")
{
    $imagem = "img/empadinha2.jpg";
    
}
if($adicionado=="2")
{
    $imagem = "img/pastel.jpg";
}
if($adicionado=="3")
{
    $imagem = "img/pão caseiro.jpg";
}
if($adicionado=="4")
{
    $imagem = "img/misto quente2.jpg";
}
if($adicionado=="5")
{
    $imagem = "img/imgcoxinha.png";
}
if($adicionado=="6")
{
    $imagem = "img/PÃO DE QUEIJO 02.JPG";
}
if($adicionado=="7")
{
    $imagem = "img/minipizza.jpg";
}
if($adicionado=="8")
{
    $imagem = "img/bolodechocolate.png";
}
if($adicionado=="9")
{
    $imagem = "img/sonho recheado02.jpg";
}
if($adicionado=="10")
{
    $imagem = "img/Chocolate Quente 002.jpg";
}

if($adicionado=="11")
{
    $imagem = "img/cookie.jpg";
}

if($adicionado=="12")
{
    $imagem = "img/tortademorango.jpg";
}

if($adicionado=="13")
{
    $imagem = "img/brownie.jpg";
}
if($adicionado=="14")
{
    $imagem = "img/tortamorango.png";
}

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
    <title>Pagina carrinho</title>
    <link rel="stylesheet" href="css/estilo_carrinho.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    
<body>
    <div class="principal">
        <div class="D12">
              
                 
                
            <div class="D3">
                <a href="html/paginainicial.php">
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
                <a href="paginacarrinho.php">
                <img  title="Ver carrinho" src="img/carrinho.png" width="130px" height="80px"> 
                </a>
            </div>
             <div class="D9">
                <img src="img/trespontos.png" width="280px" height="190px"> 
                
               
                
             </div>
             
             
     </div>


    <div class="inteiro"> 
        <div class="intro">
            SEU PEDIDO 
                <p>TODOS OS DADOS DO SEU PEDIDO ESTÃO AQUI:</p>
       </div>
       <div class="inteiro2">
        <div class="pedido">
            <div class="pedido2">
                <div class="img"src="<?php echo($imagem);  ?>"></div>
                <div class="descricao"></div>
                <div class="nome_produto"></div>
                <div cLASS="restricoes"></div>
         </div>
            <div class="pagar">
                <div class="quantidade"><div class="caixa">QTD</div></div>
                <div class="preco"> <div class="caixa">PREÇO UND</div> <?php echo($preco_atual) ?></div>
                <div class="total"> <div class="caixa">TOTAL</div></div>
            </div>
            
            
            </div>
         
        </div>
       </div>

       <div class="botoes">
        <a href="html/paginapagamento.html" >
            <div class="comprar"><B>COMPRAR</B></div>
        </a>
      
         
       </div>
     

    </div>

     
    

            
</div>   
</body>
</html>     
            

        

         

         
         
         
    
    


<img class="logo" src="img/cupcake.png"   >  
        