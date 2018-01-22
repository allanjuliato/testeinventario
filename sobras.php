<?php include("cabecalho.php"); ?>

<h1>Cadastro Usuario</h1>
<form action="adiciona-usuario.php">
    <table class="table">
        <tr>
            <td>Usuario</td>
            <td><input class="form-control" type="text" name="usuario" /></td>
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
        

    </table>    
<div class="panel panel-default">                                                                           
    <div class="panel-heading">
        <h3 class="panel-title" data-toggle="collapse" data-target="#monitor1" data-parent="#paineis-sobre" >Vincular 1º Monitor</h3>
    </div>
    <div id="monitor1" class="collapse">
        <div class="panel-body">  
            <h1>Cadastro de Monitor 1</h1>
            <form action="adiciona-produto.php">
                <table class="table">
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMonitor1" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMonitor1" /></td>
                    </tr>
                     <tr>
                        <td>Polegadas</td>
                        <td><input class="form-control" type="text" name="polegadas1" /></td>
                    </tr>
                    <tr>
                        <td>Serial Number</td>
                        <td><input class="form-control" type="text" name="snMonitor1" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMonitor1" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMonitor1" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMonitor1" /></td>
                    </tr>
                </table>
            </form>
        </div>    
    </div>
</div>
<div class="panel panel-default">                                                                           
    <div class="panel-heading">
        <h3 class="panel-title" data-toggle="collapse" data-target="#monitor2" data-parent="#paineis-sobre" >Vincular 2º Monitor</h3>
    </div>
    <div id="monitor2" class="collapse">
        <div class="panel-body"> 
            <h1>Cadastro de Monitor 2</h1>
            <form action="adiciona-produto.php">
                <table class="table">
                    <tr>
                        <td>Marca</td>
                        <td><input class="form-control" type="text" name="marcaMonitor2" /></td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td><input class="form-control" type="text" name="modeloMonitor2" /></td>
                    </tr>
                     <tr>
                        <td>Polegadas</td>
                        <td><input class="form-control" type="text" name="polegadas2" /></td>
                    </tr>
                    <tr>
                        <td>Serial Number</td>
                        <td><input class="form-control" type="text" name="snMonitor2" /></td>
                    </tr>
                    <tr>
                        <td>Service Tag</td>
                        <td><input class="form-control" type="text" name="serviceTagMonitor2" /></td>
                    </tr>
                    <tr>
                        <td>Express Tag</td>
                        <td><input class="form-control" type="text" name="expressTagMonitor2" /></td>
                    </tr>
                    <tr>
                        <td>Patrimonio</td>
                        <td><input class="form-control" type="text" name="patrimonioMonitor2" /></td>
                    </tr>
                </table>
            </form>
        </div>    
    </div>
</div>
 
        <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>

    </table>
       
            <script src="jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
</form>
<?php include("rodape.php"); ?>