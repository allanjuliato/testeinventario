<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<h1>Inventario</h1>
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


<table class="table table-striped table-bordered">
    <tr>
        <td><b>Patrimonio</b></td>
        <td><b>Ano Office</b></td>
        <td><b>Chave</b></td>
    </tr>

    <?php
        $listas = listas($conexao, 'office');
        foreach($listas as $lista) :
    ?>
    <tr>
        <td><?= $lista['patrimoniooffice'] ?></td>
        <td><?= $lista['anoOffice'] ?></td>
        <td><?= $lista['snOffice'] ?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>


<?php include("rodape.php"); ?>
