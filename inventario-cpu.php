<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-funcion.php"); ?>



<h1>Inventario</h1>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Usuario</b></td>
        <td><b>Projeto</b></td>
        <td><b>Nome da Maquina</b></td>
        <td><b>Data de Entreda</b></td>
        <td><b>Visualizar</b></td>
    </tr>
    <?php
        $usuarios = listaUsuarios($conexao);
        foreach($usuarios as $usuario) :
    ?>

    <tr>
        <td><?= $usuario['nomeUsuario'] ?></td>
        <td><?= $usuario['projeto'] ?></td>
        <td><?= $usuario['nomeMaquina'] ?></td>
        <td><?= $usuario['dataEntrada'] ?></td>
        <td>
            <a class="btn btn-primary" href="teste1.php?nomeUsuario=<?=$usuario['nomeUsuario']?>">Visualizar</a>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>


<?php include("rodape.php"); ?>
