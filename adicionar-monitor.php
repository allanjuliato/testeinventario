<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<?php

$marcaMonitor = $_GET["marcaMonitor"];
$modeloMonitor = $_GET["modeloMonitor"];
$polegadas = $_GET["polegadas"];
$snMonitor = $_GET["snMonitor"];
$serviceTagMonitor = $_GET["serviceTagMonitor"];
$expressTagMonitor = $_GET["expressTagMonitor"];
$patrimonioMonitor = $_GET["patrimonioMonitor"];

if(insereMonitor($conexao, $marcaMonitor, $modeloMonitor, $polegadas, $snMonitor, $serviceTagMonitor, $expressTagMonitor, $patrimonioMonitor)) { ?>
    <h1 class="alert alert-success">Monitor Adicionado Com Sucesso!</h1>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<form action="formulario-monitor.php">
	<button class="btn btn-primary" type="submit">Continuar Cadastrando</button>
</form>

<form action="index.php">
	<b><button class="btn btn-primary" type="submit">Inicio</button>
</form>


<?php include("rodape.php"); ?>
