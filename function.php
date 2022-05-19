<?php
 function impMsg($msg){
     echo "Mensagem de validacao: $msg";
 
 }
 function validaCodigo($cod){ 
   if ($cod == 0){
	  impMsg("Codigo nao pode ser zero");
   }
 }
 if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $codigo = $_POST ["codigo"];
   
   validaCodigo($codigo)
 }
?>

<html>
<head>
</head>
<body>
<h1> Funcao </h1>  
<br>
   <form action="alterarProdutos.php" method="GET">

     codigo: <input type="text" name="codigo" >
     <br>
     nome: <input type="text" name="nome">
     <br>
     preco:<input type="text" name="preco">
     <br>
	 <input type="submit" value="Enviar">
   </form>
</body>
</html>