<?php
 function validaMat(){
    
 
 }

 if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST ["nome"];
   $funcao = $_POST ["funcao"];
   
   $arquivoUsuario = fopen ("Usuarios.txt", "a"); 
   $cabecalho = "matricula; nome; funcao";
   fwrite ($arquivoUsuario, $cabecalho);
   $linha = $matricula . ";" . $nome . ";" . $funcao;
   fwrite ($arquivoUsuario, $linha);
   fclose($arquivoUsuario);
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
<h1> Incluir Usuário </h1>  
<br>
   <form action="incluirUsuario.php" method="POST">

     Nome: <input type="text" name="nome" value = "">
     <br>
     Matricula: <input type="text" name="matricula" value = "">
     <br>
     Funcao: <input type="text" name="funcao">
     <br>
	 <input type="submit" value="Enviar">
   </form>
</body>
</html>
