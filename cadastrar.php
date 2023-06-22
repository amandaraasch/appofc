
<?php
include("conecta.php");

$nome = $_POST["nome"];
$cpf     = $_POST["cpf"];
$telefone     = $_POST["telefone"];
$aniversario   = $_POST["aniversario"];
$cep    = $_POST["cep"];
$estado    = $_POST["estado"];
$cidade    = $_POST["cidade"];
$bairro    = $_POST["bairro"];
$numero    = $_POST["numero"];
$complemento   = $_POST["complemento"];
$email    = $_POST["email"];
$senha    = $_POST["senha"];


//SE CLICOU NO BOTÃO INSERIR
if(isset($_POST["cadastrar"])) {
    $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$email','$senha','$nome','$cpf','$telefone','$aniversario','$cep','$estado','$cidade','$bairro',$numero,'$complemento','n')");
    $resultado = $comando->execute();
    $comando = $pdo->prepare("INSERT INTO usuarios VALUES('$email','$senha','n')");
    $resultado = $comando->execute();
    header("Location: html/paginalogin.html");
}
