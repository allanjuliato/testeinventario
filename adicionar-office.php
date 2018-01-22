<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<?php

$anoOffice = $_GET["anoOffice"];
$snOffice = $_GET["snOffice"];

if(insereOffice($conexao, $anoOffice, $snOffice)) { ?>
    <h1 class="alert alert-success">Office Adicionado Com Sucesso!</h1>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert alert-danger">ERRO .: <?= $msg ?></p>
<?php
}
?>

<form action="formulario-office.php">
	<button class="btn btn-primary" type="submit">Continuar Cadastrando</button>
</form>

<form action="index.php">
	<b><button class="btn btn-primary" type="submit">Inicio</button>
</form>





<?php include("rodape.php"); ?>
