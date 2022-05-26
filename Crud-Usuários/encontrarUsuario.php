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
		 $nome = $colunaDados[1];
		 $funcao = $colunaDados[2]; 
		 break;
	 }
	
   }
  fclose ($arquivoUsuarioIn);

?>

<html>
<head>
</head>
<body>
<h1> Alterar Usuario </h1>  
<br>
   <form action="alterarUsuario.php" method="GET">

     matricula: <input type="text" name="matricula" value = '<?php echo $matricula?>' >
     <br>
     nome: <input type="text" name="nome" value = '<?php echo $nome?>' >
     <br>
     funcao:<input type="text" name="funcao" value = '<?php echo $funcao?>' >
     <br>
	 <input type="submit" value="Enviar">
   </form>
</body>
</html>
<?php
}
?>