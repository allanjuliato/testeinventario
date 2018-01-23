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

//OFFICE
$anoOffice = $vincula['anoOfficeVic'];
$snOffice = $vincula['snOfficeVic'];

?>teste

<form action="adicionar-vincular.php">
    <div class="panel panel-default">
        <div class="panel-heading"><h1 class="panel-title">Usuario</h1></div>
            <div class="panel-body">
            <form method="get">
                    <table class="table">
                        <tr>
                            <td>Nome do Usuario</td>
                            <td><input class="form-control" type="text" name="idUsuario"  /></td>
                            <td>
                                <button class="btn btn-primary">Visualizar</button>
                            </td>
                        </tr>
                    </table>
                </form>
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

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">CPU</h1></div>
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

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title" >Office</h1></div>
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


    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Perifericos</h1></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkMouse">
                            <label class="form-check-label" for="exampleCheck1">Mouse</label>
                            <input type="checkbox" class="form-check-input" id="checkTecladp">
                            <label class="form-check-label" for="exampleCheck1">Teclado</label>
                            <input type="checkbox" class="form-check-input" id="checkHeadSet">
                            <label class="form-check-label" for="exampleCheck1">HeadSet</label>
                            <input type="checkbox" class="form-check-input" id="checkWebCam">
                            <label class="form-check-label" for="exampleCheck1">WebCam</label>
                        </div>
                    </tr>
                </table>
            </div>
    </div> 
    <table class="table">
        <td><button class="btn btn-primary" type="submit">Vincular</button></td>
    </table>
</form>

    <td><button class="btn btn-primary" type="submit">Imprimir Inventario</button></td>


<?php include("rodape.php"); ?>