<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<?php

$nomeUsuarioVic = $_GET["nomeUsuarioVic"];
$projetoVic = $_GET["projetoVic"];
$nomeMaquinaVic = $_GET["nomeMaquinaVic"];
$dataEntradaVic= $_GET["dataEntradaVic"];

$tipoVic = $_GET["tipoVic"];
$marcaMaquinaVic = $_GET["marcaMaquinaVic"];
$modeloMaquinaVic = $_GET["modeloMaquinaVic"];
$patrimonioMaquinaVic = $_GET["patrimonioMaquinaVic"	];
$serviceTagMaquinaVic = $_GET["serviceTagMaquinaVic"];
$expressTagMaquinaVic = $_GET["expressTagMaquinaVic"];

$marcaMonitor1Vic = $_GET["marcaMonitor1Vic"];
$modeloMonitor1Vic = $_GET["modeloMonitor1Vic"];
$polegadas1Vic = $_GET["polegadas1Vic"];
$snMonitor1Vic = $_GET["snMonitor1Vic"];
$serviceTagMonitor1Vic = $_GET["serviceTagMonitor1Vic"];
$expressTagMonitor1Vic = $_GET["expressTagMonitor1Vic"];
$patrimonioMonitor1Vic = $_GET["patrimonioMonitor1Vic"];

$marcaMonitor2Vic = $_GET["marcaMonitor2Vic"];
$modeloMonitor2Vic = $_GET["modeloMonitor2Vic"];
$polegadas2Vic = $_GET["polegadas2Vic"];
$snMonitor2Vic = $_GET["snMonitor2Vic"];
$serviceTagMonitor2Vic = $_GET["serviceTagMonitor2Vic"];
$expressTagMonitor2Vic = $_GET["expressTagMonitor2Vic"];
$patrimonioMonitor2Vic = $_GET["patrimonioMonitor2Vic"];

$anoOfficeVic = $_GET["anoOfficeVic"];
$snOfficeVic = $_GET["snOfficeVic"];


if(updateVincular($conexao, $patrimonioMaquinaVic, $nomeUsuarioVic, $projetoVic, $nomeMaquinaVic, $dataEntradaVic, $tipoVic, $marcaMaquinaVic, $modeloMaquinaVic, $serviceTagMaquinaVic, $expressTagMaquinaVic, $marcaMonitor1Vic, $serviceTagMonitor1Vic, $modeloMonitor1Vic, $polegadas1Vic, $snMonitor1Vic, $expressTagMonitor1Vic, $patrimonioMonitor1Vic, $marcaMonitor2Vic, $modeloMonitor2Vic, $polegadas2Vic, $snMonitor2Vic, $serviceTagMonitor2Vic, $expressTagMonitor2Vic, $patrimonioMonitor2Vic, $anoOfficeVic, $snOfficeVic)) { ?>
    <h1 class="alert alert-success">Vinculado Com Sucesso!</h1>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<form action="vincular.php">
	<button class="btn btn-primary" type="submit">Continuar Vinculando</button>
</form>

<form action="index.php">
	<b><button class="btn btn-primary" type="submit">Inicio</button>
</form>


<?php include("rodape.php"); ?>
