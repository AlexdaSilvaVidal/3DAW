<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<h1> Alterar Usuario </h1>  
<br>
<div class="w3-bar-block w3-black" style="width:120px">
  <a href="incluirUsuario.php" class="w3-bar-item w3-button">Incluir Usuário</a>
  <a href="pedirMatricula.html" class="w3-bar-item w3-button">Alterar Usuário</a>
  <a href="listarUsuarios.php" class="w3-bar-item w3-button">Listar Usuários</a>
  <a href="excluirUsuario.php" class="w3-bar-item w3-button">Excluir Usuário</a>
</div>

<form action="listarUmUsuario.php" method="GET">
    matricula: <input type="text" name="matricula">
     <br>
	 <input type="submit" value="Seguir">
</form>

<table>
<?php
$matricula = "";
$nome = "";
$funcao = "";
if($_SERVER ["REQUEST_METHOD"] == "GET"){
   $matricula = $_GET ["matricula"];
   
   $arquivoUsuarioIn = fopen ("Usuarios.txt", "r") or die ("arquivo com problema"); 
   while (!feof($arquivoUsuarioIn)){
	 $linha = fgets ($arquivoUsuarioIn);
	 $colunaDados = explode (";", $linha);
	 if ($colunaDados[0] == $matricula){
		 echo "<tr><td>".$Id."</td>";
         echo "<td>".$Nome."</td>";
         echo "<td>".$funcao."</td>";
         echo "</tr>";
         echo "<br>";
		 break;
	 }
	
   }
 fclose ($arquivoUsuarioIn);
  ?>
</table>
   
</body>
</html>
<?php
}
?>