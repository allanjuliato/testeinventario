<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<?php

$tipo = $_GET["tipo"];
$marcaMaquina = $_GET["marcaMaquina"];
$modeloMaquina = $_GET["modeloMaquina"];
$patrimonioMaquina = $_GET["patrimonioMaquina"];
$serviceTagMaquina = $_GET["serviceTagMaquina"];
$expressTagMaquina = $_GET["expressTagMaquina"];

//Cadastra na tabela CPU
if(insereCPU($conexao, $tipo, $marcaMaquina, $modeloMaquina, $patrimonioMaquina, $serviceTagMaquina, $expressTagMaquina)) { ?>
    <h1 class="alert alert-success">CPU Adicionado Com Sucesso!</h1>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<?php //Cadastra na tabela Vincular?>
<?php
if(insereVincular($conexao, $tipo, $marcaMaquina, $modeloMaquina, $patrimonioMaquina, $serviceTagMaquina, $expressTagMaquina)) {

} else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<form action="formulario-cpu.php">
	<button class="btn btn-primary" type="submit">Continuar Cadastrando</button>
</form>

<form action="index.php">
	<b><button class="btn btn-primary" type="submit">Inicio</button>
</form>


<?php include("rodape.php"); ?>
