<?php include("cabecalho.php"); ?>

<h1>Cadastro CPU</h1>
<form action="adicionar-cpu.php">
    <table class="table">
       <tr>
            <td>Tipo</td>
            <td><input class="form-control" type="text" name="tipo" /></td>
        </tr>
        <tr>
            <td>Marca</td>
            <td><input class="form-control" type="text" name="marcaMaquina" /></td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td><input class="form-control" type="text" name="modeloMaquina" /></td>
        </tr>
        <tr>
            <td>Patrimonio</td>
            <td><input class="form-control" type="text" name="patrimonioMaquina" /></td>
        </tr>
        <tr>
            <td>Service Tag</td>
            <td><input class="form-control" type="text" name="serviceTagMaquina" /></td>
        </tr>
        <tr>
            <td>Express Tag</td>
            <td><input class="form-control" type="text" name="expressTagMaquina" /></td>
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