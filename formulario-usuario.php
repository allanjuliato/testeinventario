<?php include("cabecalho.php"); ?>

<h1>Cadastro Usuario</h1>
<form action="adicionar-usuario.php">
    <table class="table">
        <tr>
            <td>Usuario</td>
            <td><input class="form-control" type="text" name="nomeUsuario" /></td>
        </tr>
        <tr>
            <td>Projeto</td>
            <td><input class="form-control" type="text" name="projeto" /></td>
        </tr>
        <tr>
            <td>Nome Maquina</td>
            <td><input class="form-control" type="text" name="nomeMaquina" /></td>
        </tr>
        <tr>
            <td>Data de Entrada</td>
            <td><input class="form-control" type="text" name="dataEntrada" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table>
        <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
    </table>

</form>
<?php include("rodape.php"); ?>
