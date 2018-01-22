<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<h1>Vincular</h1>
<form method="get">
    <table class="table">
        <tr>
            <td>Patrimonio da Maquina</td>
            <td><input class="form-control" type="text" name="id"  /></td>
            <td>
                <button class="btn btn-primary">Visualizar</button>
            </td>
        </tr>
    </table>
</form>
 
<?php
$id = @$_GET['id'];
$vincula = buscaVinvular($conexao, $id, 'patrimonioMaquinaVic');
//CPU
$tipo = $vincula['tipoVic'];
$marcaMaquina = $vincula['marcaMaquinaVic'];
$modeloMaquina = $vincula['modeloMaquinaVic'];
$patrimonioMaquina = $vincula['patrimonioMaquinaVic'];
$serviceTagMaquina = $vincula['serviceTagMaquinaVic'];
$expressTagMaquina = $vincula['expressTagMaquinaVic'];
//USUARIO
$nomeUsuario = $vincula['nomeUsuarioVic'];
$projeto = $vincula['projetoVic'];
$nomeMaquina = $vincula['nomeMaquinaVic'];
$dataEntrada = $vincula['dataEntradaVic'];
//MONITOR1
$marcaMonitor1 = $vincula['marcaMonitor1Vic'];
$modeloMonitor1 = $vincula['modeloMonitor1Vic'];
$polegadas1 = $vincula['polegadas1Vic'];
$snMonitor1 = $vincula['snMonitor1Vic'];
$serviceTagMonitor1 = $vincula['serviceTagMonitor1Vic'];
$expressTagMonitor1 = $vincula['expressTagMonitor1Vic'];
$patrimonioMonitor1 = $vincula['patrimonioMonitor1Vic'];
//MONITOR2
$marcaMonitor2 = $vincula['marcaMonitor2Vic'];
$modeloMonitor2 = $vincula['modeloMonitor2Vic'];
$polegadas2 = $vincula['polegadas2Vic'];
$snMonitor2 = $vincula['snMonitor2Vic'];
$serviceTagMonitor2 = $vincula['serviceTagMonitor2Vic'];
$expressTagMonitor2 = $vincula['expressTagMonitor2Vic'];
$patrimonioMonitor2 = $vincula['patrimonioMonitor2Vic'];
//OFFICE
$anoOffice = $vincula['anoOfficeVic'];
$snOffice = $vincula['snOfficeVic'];

?>

<form action="adicionar-vincular.php">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" data-toggle="collapse" data-target="#painelUsuario" data-parent="#paineis-sobre">Usuario</h1>
        </div>
        <div id="painelUsuario" class="collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Usuario</td>
                        <td><input class="form-control" type="text" name="nomeUsuarioVic" value="<?=$vincula['nomeUsuarioVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Projeto</td>
                        <td><input class="form-control" type="text" name="projetoVic" value="<?=$vincula['projetoVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Nome Maquina</td>
                        <td><input class="form-control" type="text" name="nomeMaquinaVic" value="<?=$vincula['nomeMaquinaVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Data de Entrada</td>
                        <td><input class="form-control" type="text" name="dataEntradaVic" value="<?=$vincula['dataEntradaVic']?>" /></td>
                    </tr>
                </table> 
            </div>
        </div>
    </div>  

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" data-toggle="collapse" data-target="#painelCPU" data-parent="#paineis-sobre">CPU</h1>
        </div>
        <div id="painelCPU" class="collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Tipo</td>
                        <td><input class="form-control" type="text" name="tipoVic" value="<?=$vincula['tipoVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMaquinaVic" value="<?=$vincula['marcaMaquinaVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMaquinaVic" value="<?=$vincula['modeloMaquinaVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMaquinaVic" value="<?=$vincula['patrimonioMaquinaVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMaquinaVic" value="<?=$vincula['serviceTagMaquinaVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMaquinaVic" value="<?=$vincula['expressTagMaquinaVic']?>" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>     

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" data-toggle="collapse" data-target="#painelMonitor1" data-parent="#paineis-sobre">Monitor 1</h1>
        </div>
        <div id="painelMonitor1" class="collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMonitor1Vic" value="<?=$vincula['marcaMonitor1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMonitor1Vic" value="<?=$vincula['modeloMonitor1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Polegadas</td>
                        <td><input class="form-control" type="text" name="polegadas1Vic" value="<?=$vincula['polegadas1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Serial Number</td>
                        <td><input class="form-control" type="text" name="snMonitor1Vic" value="<?=$vincula['snMonitor1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMonitor1Vic" value="<?=$vincula['serviceTagMonitor1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMonitor1Vic" value="<?=$vincula['expressTagMonitor1Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMonitor1Vic" value="<?=$vincula['patrimonioMonitor1Vic']?>" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>    

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" data-toggle="collapse" data-target="#painelMonitor2" data-parent="#paineis-sobre">Monitor 2</h1>
        </div>
        <div id="painelMonitor2" class="collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMonitor2Vic" value="<?=$vincula['marcaMonitor2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMonitor2Vic" value="<?=$vincula['modeloMonitor2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Polegadas</td>
                        <td><input class="form-control" type="text" name="polegadas2Vic" value="<?=$vincula['polegadas2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Serial Number</td>
                        <td><input class="form-control" type="text" name="snMonitor2Vic" value="<?=$vincula['snMonitor2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMonitor2Vic" value="<?=$vincula['serviceTagMonitor2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMonitor2Vic" value="<?=$vincula['expressTagMonitor2Vic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMonitor2Vic" value="<?=$vincula['patrimonioMonitor2Vic']?>" /></td>
                    </tr>
                </table>
            </div>
        </div>
    </div> 

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" data-toggle="collapse" data-target="#painelOffice" data-parent="#paineis-sobre">Office</h1>
        </div>
        <div id="painelOffice" class="collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Ano</td>
                        <td><input class="form-control" type="text" name="anoOfficeVic" value="<?=$vincula['anoOfficeVic']?>" /></td>
                    </tr>
                    <tr>
                        <td>Serial</td>
                        <td><input class="form-control" type="text" name="snOfficeVic" value="<?=$vincula['snOfficeVic']?>" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div> 
    <table class="table">
        <td><button class="btn btn-primary" type="submit">Vincular</button></td>
    </table>
</form>
<?php include("rodape.php"); ?>