<?php include("cabecalho.php"); ?>
<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página


<?php
echo "Olá, " . $_SESSION['usuarioNome'];

<?php include("rodape.php"); ?>