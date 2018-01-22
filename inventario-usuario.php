<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>



<h1>Inventario</h1>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>ID</b></td>
        <td><b>Usuario</b></td>
        <td><b>Projeto</b></td>
        <td><b>Nome da Maquina</b></td>
        <td><b>Data de Entreda</b></td>
        <td><b>Visualizar</b></td>
    </tr>
    <?php
        $listas = listas($conexao, 'usuario');
        foreach($listas as $lista) :
    ?>

    <tr> 
        <td><?= $lista['COD_USUARIO'] ?></td>
        <td><?= $lista['nomeUsuario'] ?></td>
        <td><?= $lista['projeto'] ?></td>
        <td><?= $lista['nomeMaquina'] ?></td>
        <td><?= $lista['dataEntrada'] ?></td>
        <td>
            <a class="btn btn-primary" href="teste1.php?id=<?=$lista['COD_USUARIO']?>">Visualizar</a>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>


<?php include("rodape.php"); ?>
