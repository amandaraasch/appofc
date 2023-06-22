<?php
//pesquisar o id na tabela precos, usando a variavel $adicionado//

$codigo=

$adicionado=$_GET["adicionado"];
if($adicionado=="empadinha")
{
    $imagem = "img/empadinha2.jpg";
}
if($adicionado=="pastel de frango")
{
    $imagem = "img/pastel.jpg";
}
if($adicionado=="pão de forma")
{
    $imagem = "img/pão caseiro.jpg";
}
if($adicionado=="misto quente")
{
    $imagem = "img/misto quente2.jpg";
}
if($adicionado=="mini coxinhas")
{
    $imagem = "img/imgcoxinha.png";
}
if($adicionado=="pão de queijo")
{
    $imagem = "img/PÃO DE QUEIJO 02.JPG";
}
if($adicionado=="mini pizza")
{
    $imagem = "img/minipizza.jpg";
}
if($adicionado=="bolo_chocolate")
{
    $imagem = "img/bolodechocolate.png";
}
if($adicionado=="sonho recheado")
{
    $imagem = "img/sonho recheado02.jpg";
}
if($adicionado=="chocolate quente")
{
    $imagem = "img/Chocolate Quente 002.jpg";
}

if($adicionado=="cookie")
{
    $imagem = "img/cookie002.jpg";
}

if($adicionado=="torta de morango")
{
    $imagem = "img/tortademorango.jpg";
}

if($adicionado=="brownie")
{
    $imagem = "img/brownie.jpg";
}
if($adicionado=="torta de framboesa")
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
    href="img/minilogo1.png">
    <title>Personalize Seu pedido</title>
    <link rel="stylesheet" href="css/estilo_escolha.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    
<body>
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
            <img  title="Ver Localização" src="img/localização.png" width="40px" height="40px"> 
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
        
        <img class="logo" src="img/novalogo.png" width="150px"  > 
    </div>

   
    <div class="Escritasino">
        <img class="">
    </div>

<div class="scr">
    <div class="des1"><b>ESCOLHA CONFORME SUAS RESTRIÇÕES 🧁</b></div>
    
    <div class="principal">
        
            <div class="produtosverde">
               
                <img class="bordinha" src="<?php echo($imagem);  ?>" width="200px">
                    <div class="produtosverde2">
                        
                    </div>
                   
            </div>
            <div class="produtosvermelho">
                        <fieldset class="fieldcomidas">
                            <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM LEITE <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM OVO  <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM LACTOSE  <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM AÇÚCAR  <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM GLÚTEM  <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM SAL  <br> <br>
                                <input type="checkbox" name="comida"> &nbsp; SEM PROTEÍNA DO LEITE <br> <br>
                                <div class="lembrete">
                                    <b>Atenção</b><br><div class="alerta">🚨</div>
                                    <div class="lembrete2">
                                        OS PRODUTOS SELECIONADOS NÃO SERÃO INCLUSOS NO SEU PEDIDO
                                    </div>
                                </div>
                        </fieldset>
                        <div class="qntdd">
                            <b>QUANTIDADES</b>
                            <fieldset class="fieldquantidades">
                                <button onclick="Subtrair();" class="menos"> - </button>
                                <input class="numero" value="1" id="numero" type="number">
                                <button onclick="Adicionar();" class="mais">+</button>
                            </fieldset>
                            <div class="observacao">
                                <b>ALGUMA OBSERVAÇÃO?</b><br>
                                <fieldset class="obs">
                                    <input class="obss" type="text">
                                </fieldset>
                                <a href="#" onclick="salvar('<?php echo($codigo);  ?>');">
                                <button class="ok"><b>ADICIONAR AO CARRINHO</b></button></a> 
                                
                            </div>
                        </div>
                    
                        
                </div>   
      
            </div>     
     </div
</body>
<script>
    function Adicionar()
    {
        numero.value=parseInt(numero.value)+1 
    }
    function Subtrair()
    {
        if(numero.value >1)
        {
            numero.value=parseInt(numero.value)-1
        }
    }
</script>
</html>