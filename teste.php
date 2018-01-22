
<?php

		$con = new PDO('mysql:host=localhost;dbname=daitanit', 'root', '');

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pesquisa simples com PDO</title>
</head>

<body>

<h2>Pesquisa simples com PDO
</h2>
<p>

<form name="form1" method="post" action="">
	<label>
		<input name="patrimonioMaquina" type="text" id="patrimonioMaquina" value="" size="30">
	</label>
	<button class="btn btn-primary" type="submit" name="pesquisar">Pesquisar</button>
</form>


<?php

    $patrimonioMaquina=$_POST["patrimonioMaquina"];
    $pesquisa=$_POST['pesquisar'];


    if(isset($pesquisa)&&!empty($patrimonioMaquina))
    {
    $stmt = $con->prepare("select * from cpu where patrimonioMaquina like :letra");
    $stmt->bindValue(':letra', '%'.$patrimonioMaquina.'%', PDO::PARAM_STR);
    $stmt->execute();
    $resultados = $stmt->rowCount();

if($resultados>=1){

echo "Resultado(s) encontrado(s): ".$resultados."<br /><br />";
while($reg = $stmt->fetch(PDO::FETCH_OBJ))
{

echo $patrimonioMaquina;

/*echo $reg->tipo."<br />";
echo $reg->marcaMaquina."<br />";
echo $reg->modeloMaquina."<br />";
echo $reg->patrimonioMaquina."<br />";
echo $reg->serviceTagMaquina."<br />";
echo $reg->expressTagMaquina."<br />";*/
}

}
else
{
echo "Não existe usuario cadastrado";
}
}
else{
echo "Preencha o campo de pesquisa";
}
?>

</body>
</html>


