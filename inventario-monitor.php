<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>

<h1>Inventario</h1>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Ano Office</b></td>
        <td><b>Chave</b></td>
    </tr>

    <?php
        $offices = listaOffices($conexao);
        foreach($offices as $office) :
    ?>
    <tr>
        <td><?= $office['anoOffice'] ?></td>
        <td><?= $office['snOffice'] ?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>


<?php include("rodape.php"); ?>
