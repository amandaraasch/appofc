
<?php
$subtotal=$_GET["subtotal"];




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
    <title>Página de Pagamento</title>
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link rel="stylesheet" href="../css/estilo_pagamento.css">
    <link href="https://fonts.googleapis.com/css2?family=Freehand&family=Pinyon+Script&display=swap" rel="stylesheet">
    <script src="../jquery.js"></script>
</head>
<body>
    
    <div class="principal">
        <div class="D12">
                
            <div class="D3">
                <a href="paginainicial.php">
                <img  title="Ver Página Inicial" src="../img/casinha.png" width="120px" height="60px"> 
                </a> 

            </div>
            
             
             <div class="D6">
                <a href="../paginaperfil.php">
                <img  title="Ver Perfil" src="../img/perfil.png" width="70px" height="70px"> 
                </a> 
                
             </div>
             <div class="D4">
                <a href="Paginalocalização.html">
                <img  title="Ver Localização" src="../img/localização.png" width="40px" height="40px"> 
                </a> 
                
             </div>
             <div class="D7">
                MEU CARRINHO
            </div>
            <div class="D8">
                <a href="paginacarrinho.php">
                <img  title="Ver carrinho" src="../img/carrinho.png" width="130px" height="80px"> 
                </a>
            </div>
             
             
            <div class="D11"></div>
            

            <img class="logo" src="../img/novalogo.png">
        </div>
            
          <div class="paggeral">
            
            <div class="pagamento2">
                <div class="pagamento3">
                    <div class="pagtitulo">
                        <b>EFETUE SEU PAGAMENTO AQUI:</b>
                    </div><br>
                    <b class="valortotal" >O VALOR TOTAL DE SEU PEDIDO FOI: <br>
                         <span class="dinheiro"> <br>R$<?php echo("$subtotal"); ?>,00</span></b>
                    <br><br>
                    <b>CONFIRME O SEU ENDEREÇO:</b>
                    <br>
                    <fieldset class="fild">
                        <legend class="legend"><b>CEP</b></legend>
                     
                        <input maxlength="9" type="text" id="cep" onkeyup="ValidarCEP();">
                        <script>
                        
                </script> 
                    </fieldset><br>
                    <fieldset class="fild">
                        <legend><b>COMPLEMENTO</b> </legend>
                         <input type="text">
                    </fieldset>
                    
                    </div>
            <div class="pagamento4">
                    <b> FORMA DE PAGAMENTO: </b>
                    
                <button  id="abrir1" onclick="Abra1();" class="cartao">
                    
                    <div class="cartao2"> 
                            <b>CARTÃO DE CRÉDITO</b> 
                            <img src="../img/cartaocredito.png" width="10%">
                    </div>
                    <div class="dados1" id="dados1">
                        <fieldset class="fildinho">
                            <legend> <b>N° DO CARTÃO:</b></legend>
                        
                            <input class="caixinha" maxlength="19" type="text" id="cartao" onkeyup="ValidarCARTAO();">
                        
                        </fieldset><br>
                        <fieldset class="fildinho">
                            <legend> <b>NOME COMPLETO:</b></legend>
                            <input class="caixinha" type="text">
                        </fieldset><br>
                        <div class="repartir">
                            <fieldset class="fildinho1"><br>
                                <legend class="ladinho"> <b>VALIDADE:</b></legend><BR>
                                <select class="caixinha1">
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                    <option>2029</option>
                                    <option>2030</option>
                                    <option>2031</option>
                                    <option>2032</option>
                                    <option>2033</option>
                                    <option>2034</option>
                                    <option>2035</option>

                                </select><BR>
                            </fieldset>
                            <fieldset class="fildinho2"><br>
                                <select class="caixinha1">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select><BR>
                            </fieldset>
                            <fieldset class="fildinho3"><br>
                                <legend> <b>CVC:</b></legend>
                                <input class="caixinha" type="number">
                            </fieldset>
      
                        </div>
                    </div>
                </button>

                <button id="abrir2" onclick="Abra2();" class="boleto">
            
                        <div class="boleto2"> 
                            <img src="../img/boleto.png" width="10%">
                            <b>BOLETO BANCÁRIO ></b>
                        </div>
                        <div class="dados2" id="dados2">
                            <b>SEU CÓDIGO PARA PAGAMENTO:</b>
                            <span class="cod"> 0948219478356823 </span>
                        </div>
                         
                </button>
                <button id="abrir3" onclick="Abra3();" class="pix">
                    
                        <div class="pix2"> 
                            <img src="../img/pix.png" width="10%">
                            <b>GERAR CÓDIGO PIX   ></b> 
                        </div>
                        <div class="dados3" id="dados3">
                            <b>SEU CÓDIGO PARA PAGAMENTO:</b>
                            <span class="cod"> 09481587416823 </span>
                        </div>
                </button>
            </div>
            
            
          <div class="pagamento5">
            <IMG SRC="../img/novalogo.png" width="95px">
          <p> ESTAMOS QUASE LÁ....<P>
                
                <div class="btt">
                    <button id="comprar" onclick="Comprar();" class="confirmaPAG">
                        <b><span
                    id="confirm">CONFIRMAR
                </span></b>

                  <img class="img_ok" id="img_ok" src="../img/correto.png">
                    </button>
                </div>
                
            </div>
        
           
</body>
<script>
    function Comprar()
    {
        $("#comprar").animate({height:"20px"}, 1000);
        $("#confirm").animate({opacity:"0"}, 500);
        $("#comprar").animate({width:"280px", borderRadius:"50px"}, 1000, Imagem);
        $("#comprar").animate({height:"60px",width:"60px", borderRadius:"30px"}, 700);
        comprar.style.backgroundSize="100%"
        comprar.style.borderColor="white"
    }
    function Imagem()
    {
        $("#img_ok").animate({opacity:"1"}, 1000, Sair);
    }
    function Sair()
    {
        window.open("animaçãomoto.html","_self");
    }
    
</script>
<script>
    function Abra1()
    {
        $("#abrir1").animate({height:"55%"}, 1000);
        $("#abrir2").animate({height:"10%"}, 1000);
        $("#abrir3").animate({height:"10%"}, 1000);
        $("#dados1").animate({height:"70%"}, 1000);
        document.getElementById("dados1").style.display="flex"; 
        document.getElementById("dados2").style.display="none";
        document.getElementById("dados3").style.display="none";  

    }
    function Abra2()
    {
        $("#abrir2").animate({height:"40%"}, 1400);
        $("#abrir1").animate({height:"10%"}, 1000);
        $("#abrir3").animate({height:"10%"}, 1000);
        $("#dados2").animate({height:"40%"}, 1000);
        document.getElementById("dados1").style.display="none"; 
        document.getElementById("dados2").style.display="flex";
        document.getElementById("dados3").style.display="none";  
        
    }
    function Abra3()
    {
        $("#abrir3").animate({height:"40%"}, 1000);
        $("#abrir2").animate({height:"10%"}, 1000);
        $("#abrir1").animate({height:"10%"}, 1000);
        $("#dados3").animate({height:"40%"}, 1000);
        document.getElementById("dados1").style.display="none"; 
        document.getElementById("dados2").style.display="none";
        document.getElementById("dados3").style.display="flex";  
    }
    function ValidarCEP()
    {
       //acesse o site regex101.com
       expressao = /[0-9]{5}-[0-9]{3}$/g; 
       texto = cep.value;
       if (texto.length==5)
       {
           cep.value = texto + "-";
       }
              
       resposta = expressao.test(texto);
       if (resposta==true)
        {
           cep.classList.remove('errado');
           cep.classList.add('certo');
        }
       if (resposta==false)
        {
           cep.classList.remove('certo');
           cep.classList.add('errado');
        }
    }

    function ValidarCARTAO()
    {
      //acesse o site regex101.com
      expressao = /[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/g; 
      texto = cartao.value;
      if (texto.length==4)
      {
          cartao.value = texto + "-";
      }
      if (texto.length==9)
      {
          cartao.value = texto + "-";
      }
      if (texto.length==14)
      {
          cartao.value = texto + "-";
      }
              
      resposta = expressao.test(texto);
      if (resposta==true)
       {
          cartao.classList.remove('errado');
          cartao.classList.add('certo');
       }
      if (resposta==false)
       {
          cartao.classList.remove('certo');
          cartao.classList.add('errado');
       }
    }
    function verificarStatusPorHora() {
      var statusImg = document.getElementById("status-img");

      // Obtenha a hora atual
      var data = new Date();
      var hora = data.getHours();

      // Defina o intervalo de horário para estar "online"
      var horaInicioOnline = 8; // Por exemplo, 8:00 AM
      var horaFimOnline = 22; // Por exemplo, 8:00 PM

      // Verifique se está dentro do intervalo "online"
      if (hora >= horaInicioOnline && hora < horaFimOnline) {
        statusImg.src = "../img/verde.png";
        statusImg.alt = "Online";
      } else {
        statusImg.src = "../img/vermelha.png";
        statusImg.alt = "Offline";
      }
    }

    // Chame a função verificarStatusPorHora quando a página for carregada
    window.onload = verificarStatusPorHora;
</script>
</html>