
<?php
include("conecta.php");

$nota = $_GET["nota"];


    $comando = $pdo->prepare("INSERT INTO avaliacao(nota) VALUES($nota)");
    $resultado = $comando->execute();
    

?>

<script>
    window.close();

</script>