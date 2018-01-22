<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-psdb.php"); ?>

<table class="table table-striped table-bordered">
    <tr>
        <td><b>Cidade</b></td>
        <td><b>Vizualizar</b></td>
    </tr>
    <?php
        $cidades = listacidades($conexao);
        foreach($cidades as $cidade) :
    ?>

    <tr>
        <td><?= $cidade['nome'] ?></td>
               <td>
                    <a class="btn btn-primary" href="cidade-visualiza-formulario.php?id=<?=$cidade['id']?>">Visualizar</a>
               </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
