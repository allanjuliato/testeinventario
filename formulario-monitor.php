<?php include("cabecalho.php"); ?>

<h1>Cadastro de Monitor</h1>
<form action="adicionar-monitor.php">
    <table class="table">
                <table class="table">
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMonitor" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMonitor" /></td>
                    </tr>
                     <tr>
                        <td>Polegadas</td>
                        <td><input class="form-control" type="text" name="polegadas" /></td>
                    </tr>
                    <tr>
                        <td>Serial Number</td>
                        <td><input class="form-control" type="text" name="snMonitor" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMonitor" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMonitor" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMonitor" /></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
    </table>
    <table>    
        <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
    </table>
       

</form>
<?php include("rodape.php"); ?>