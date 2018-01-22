<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<?php

$nomeUsuario = $_GET["nomeUsuario"];
$projeto = $_GET["projeto"];
$nomeMaquina = $_GET["nomeMaquina"];
$dataEntrada = $_GET["dataEntrada"];

if(insereUsuario($conexao, $nomeUsuario, $projeto, $nomeMaquina, $dataEntrada)) { ?>
    <h1 class="alert alert-success">Usuario Adicionado Com Sucesso!</h1>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<form action="formulario-usuario.php">
	<button class="btn btn-primary" type="submit">Continuar Cadastrando</button>
</form>

<form action="index.php">
	<b><button class="btn btn-primary" type="submit">Inicio</button>
</form>


<?php include("rodape.php"); ?>
