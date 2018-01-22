<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<form method="get">
    <table class="table">
        <tr>
            <td>Usuario</td>
            <td><input class="form-control" type="text" name="id"  /></td>
            <td>
    			<button class="btn btn-primary">Visualizar</button>
			</td>
        </tr>
    </table>
</form>


<?php

$id = @$_GET['id'];
$usuario = testeBuscar($conexao, $id, 'COD_USUARIO');
$nomeUsuario = $usuario['nomeUsuario'];
$projeto = $usuario['projeto']; 
$nomeMaquina = $usuario['nomeMaquina'];
$dataEntrada = $usuario['dataEntrada']; 
?>

<h1>Vincular</h1>
<form action="adicionar-usuario.php">
    <table class="table">
        <tr>
            <td>Usuario</td>
            <td><input class="form-control" type="text" name="nomeUsuario" value="<?=$usuario['nomeUsuario']?>" /></td>
        </tr>
        <tr>
            <td>Projeto</td>
            <td><input class="form-control" type="text" name="projeto" value="<?=$usuario['projeto']?>" /></td>
        </tr>
        <tr>
            <td>Nome Maquina</td>
            <td><input class="form-control" type="text" name="nomeMaquina" value="<?=$usuario['nomeMaquina']?>" /></td>
        </tr>
        <tr>
            <td>Data de Entrada</td>
            <td><input class="form-control" type="text" name="dataEntrada" value="<?=$usuario['dataEntrada']?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>

