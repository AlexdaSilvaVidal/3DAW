<?php
$matricula = "";
$nome = "";
$funcao = "";
$msg = "Usuario Alterado com Sucesso!";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST["nome"];
   $funcao = $_POST ["funcao"];
   
   $arquivoUsuarioIn = fopen ("Usuarios.txt", "r") or die ("arquivo com problema"); 
   $arquivoUsuarioOut = fopen ("Usuarios.txt", "r") or die ("arquivo com problema"); 
   while (!feof($arquivoUsuarioIn)){
	 $linha = fgets ($arquivoAlunoIn);
	 $colunaDados = explode (";", $linha);
	 if ($colunaDados[0] == $matricula){
		 $linha = $matricula . ";" . $nome . ";" . $funcao; 
	 } 
	  fwrite ($arquivoUsuarioOut, $linha);
   }
  fclose ($arquivoUsuarioOut);
  fclose ($arquivoUsuarioIn);
 }
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-bar-block w3-black" style="width:120px">
  <a href="incluirUsuario.php" class="w3-bar-item w3-button">Incluir Usuário</a>
  <a href="pedirMatricula.html" class="w3-bar-item w3-button">Alterar Usuário</a>
  <a href="listarUsuarios.php" class="w3-bar-item w3-button">Listar Usuários</a>
<a href="listarUmUsuario.php" class="w3-bar-item w3-button">Listar Um Usuário</a>	
  <a href="excluirUsuario.php" class="w3-bar-item w3-button">Excluir Usuário</a>
</div>
<h1> Alterar Usuarios </h1>  
<br>
   <?php 
      echo $msg;
   ?>
</body>
</html>
