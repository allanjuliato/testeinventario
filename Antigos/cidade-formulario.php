<?php include("cabecalho.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>FaceBook</td>
            <td><input class="form-control" type="text" name="facebook" /></td>
        </tr>
         <tr>
            <td>Juventude</td>
            <td><input class="form-control" type="text" name="juventude" /></td>
        </tr>
        <tr>
            <td>Diretório</td>
            <td><input class="form-control" type="text" name="diretorio" /></td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td><input class="form-control" type="text" name="instagram" /></td>
        </tr>
        <tr>
            <td>Twitter</td>
            <td><input class="form-control" type="text" name="twitter" /></td>
        </tr>
         <tr>
            <td>Eleitores 2016</td>
            <td><input class="form-control" type="number" name="eletoresAno" /></td>
        </tr>
         <tr>
            <td>Microrregião</td>
            <td><input class="form-control" type="text" name="micro" /></td>
        </tr>
         <tr>
            <td>Mesorregião</td>
            <td><input class="form-control" type="text" name="meso" /></td>
        </tr>
          <tr>
            <td>Macro JPSDB</td>
            <td><input class="form-control" type="text" name="macro" /></td>
        </tr>
         <tr>
            <td>Prefeitura</td>
            <td><input class="form-control" type="text" name="prefeitura" /></td>
        </tr>
         <tr>
            <td>Contato</td>
            <td><input class="form-control" type="text" name="contato" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
