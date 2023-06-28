<?php
//pesquisar o id na tabela precos, usando a variavel $adicionado//

$adicionado=$_GET["adicionado"];
include("conecta.php");

$comando = $pdo->prepare("SELECT * FROM precos where id_preco='$adicionado'");
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
    href="img/minilogo1.png">
    <title>Personalize Seu pedido</title>
    <link rel="stylesheet" href="css/estilo_escolha.css">
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    
<body>
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
            <img  title="Ver Localização" src="img/localização.png" width="40px" height="40px"> 
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
                                <input type="checkbox" id="sem_leite" name="op_sem_leite"> &nbsp; SEM LEITE <br> <br>
                                <input type="checkbox" id="sem_ovo" name="op_sem_ovo"> &nbsp; SEM OVO  <br> <br>
                                <input type="checkbox" id="sem_lactose" name="op_sem_lactose"> &nbsp; SEM LACTOSE  <br> <br>
                                <input type="checkbox" id="sem_acucar" name="op_sem_acucar"> &nbsp; SEM AÇÚCAR  <br> <br>
                                <input type="checkbox" id="sem_glutem" name="op_sem_glutem"> &nbsp; SEM GLÚTEM  <br> <br>
                                <input type="checkbox" id="sem_sal" name="op_sem_sal"> &nbsp; SEM SAL  <br> <br>
                                <input type="checkbox" id="sem_proteina_leite" name="op_sem_proteina_leite"> &nbsp; SEM PROTEÍNA DO LEITE <br> <br>
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
                                <input class="numero" value="1" name="numero" id="numero" type="number">
                                <button onclick="Adicionar();" class="mais">+</button>
                            </fieldset>
                            <div class="observacao">
                                <b>ALGUMA OBSERVAÇÃO?</b><br>
                                <fieldset class="obs">
                                    <input class="obss" name="observacao" id="observacao" type="text">
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
    function salvar(c)
    {
        op_sem_leite=0
        if(sem_leite.checked)
        {
            op_sem_leite=1
        }

        op_sem_ovo=0
        if(sem_ovo.checked)
        {
            op_sem_ovo=1
        }

        op_sem_lactose=0
        if(sem_lactose.checked)
        {
            op_sem_lactose=1
        }

        op_sem_sal=0
        if(sem_sal.checked)
        {
            op_sem_sal=1
        }

        op_sem_acucar=0
        if(sem_acucar.checked)
        {
            op_sem_acucar=1
        }

        op_sem_proteina_leite=0
        if(sem_proteina_leite.checked)
        {
            op_sem_proteina_leite=1
        }

        op_sem_glutem=0
        if(sem_glutem.checked)
        {
            op_sem_glutem=1
        }

        obs=observacao.value
        quantidade=numero.value

      
        url = "addcarrinho.php?op_sem_leite="+op_sem_leite+"&op_sem_ovo="+op_sem_ovo+"&op_sem_lactose="+op_sem_lactose+"&op_sem_acucar="+op_sem_acucar+"&op_sem_proteina_leite="+op_sem_proteina_leite+"&op_sem_glutem="+op_sem_glutem+"&op_sem_sal="+op_sem_sal+"&observacao="+obs+"&numero="+quantidade+"&adicionado=<?php echo($codigo); ?>"
        window.open(url,"_blank")
        
    }
</script>
</html>