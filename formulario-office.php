<?php include("cabecalho.php"); ?>

<h1>Cadastro Office</h1>
<form action="adicionar-office.php">
    <table class="table">
        <tr>
            <td>Ano</td>
            <td><input class="form-control" type="text" name="anoOffice" /></td>
        </tr>
        <tr>
            <td>Serial</td>
            <td><input class="form-control" type="text" name="snOffice" /></td>
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