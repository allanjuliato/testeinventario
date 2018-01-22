<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-psdb.php");

$id = $_GET['id'];
$cidade = buscaCidade($conexao, $id);
$face_city = $cidade['face_city'];
$insta_city = $cidade['insta_city'];
$twitter_city = $cidade['twitter_city'];

?>

<h1>Informações Sobre a Cidade de <?=$cidade['nome']?> </h1>
<form action="cidade-visualiza-formulario.php" method="post">
    <table class="table">
        <input type="hidden" name="id" value="<?=$cidade['id']?>"/>
        <tr>
            <td>Nome</td>
            <td><input disabled class="form-control" type="text" name="nome" value="<?=$cidade['nome']?>" /></td>
        </tr>
          
         <tr>
            <td>Juventude</td>
            <td><input disabled class="form-control" type="text" name="juventude" value="<?=$cidade['juventude']?>"/></td>
        </tr>
        <tr>
            <td>Diretório</td>
            <td><input disabled class="form-control" type="text" name="diretorio" value="<?=$cidade['diretorio']?>"/></td>
        </tr>
     
         <tr>
            <td>Eleitores 2016</td>
            <td><input disabled class="form-control" type="number" name="eletores_ano_city" value="<?=$cidade['eletores_ano_city']?>"/></td>
        </tr>
         <tr>
            <td>Microrregião</td>
            <td><input disabled class="form-control" type="text" name="microrregiao_city" value="<?=$cidade['microrregiao_city']?>"/></td>
        </tr>
         <tr>
            <td>Mesorregião</td>
            <td><input disabled class="form-control" type="text" name="mesorregiao_city" value="<?=$cidade['mesorregiao_city']?>"/></td>
        </tr>
          <tr>
            <td>Macro JPSDB</td>
            <td><input disabled class="form-control" type="text" name="macroJPSDB_city" value="<?=$cidade['macroJPSDB_city']?>"/></td>
        </tr>
         <tr>
            <td>Prefeitura</td>
            <td><input disabled class="form-control" type="text" name="prefeitura_city" value="<?=$cidade['prefeitura_city']?>" /></td>
        </tr>
         <tr>
            <td>Contato</td>
            <td><input disabled class="form-control" type="text" name="contato_city" value="<?=$cidade['contato_city']?>"/></td>
        </tr>
         <tr>
            <td></td>
            <td></td>
         </tr>
    </table>

    <table>
        
            <td><?php if (strlen($face_city) <> 0){?>
                    <a  class="btn btn-primary" href="<?=$cidade['face_city']?>">FaceBook</a> 
                <?php }else{?>
                    <a  class="btn btn-danger" href="<?=$cidade['face_city']?>">FaceBook</a> 
                <?php } ?>
                
                <?php if (strlen($insta_city) <> 0){?>
                    <a  class="btn btn-primary" href="<?=$cidade['insta_city']?>">Instagram</a>
                <?php }else{?>
                    <a  class="btn btn-danger" href="<?=$cidade['insta_city']?>">Instagram</a>
                 <?php } ?>
                
                <?php if (strlen($twitter_city) <> 0){?>
                    <a  class="btn btn-primary" href="<?=$cidade['twitter_city']?>">Twitter</a>
                <?php }else{?>
                    <a  class="btn btn-danger" href="<?=$cidade['twitter_city']?>">Twitter</a>
                <?php } ?>
            </td>
    </table>
    
<td> <a class="btn btn-primary" href="cidade-lista.php">Voltar</a>
    
</form>

<?php include("rodape.php"); ?>
