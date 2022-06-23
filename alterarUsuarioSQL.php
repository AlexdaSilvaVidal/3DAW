<?php
$matricula = "";
$nome = "";
$funcao = "";
$senha"";
$conn = new PDO ('mysql:host=localhost;dbname=faeterj3DawManha', $user, $pass);
if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST["nome"];
   $funcao = $_POST ["funcao"];
   $senha = $_POST ["senha"];
   
   $sql = UPDATE 'Usuario' SET 'nome' = '$nome', 'funcao' = '$funcao', 'senha'= '$senha' WHERE 'matricula' = $matricula;
   $result = $conn->querry($sql);
   
   
 }elseif($_SERVER ["REQUEST_METHOD"] == "GET"){
	 $matricula = $_GET ["matricula"];
	 $sql = SELECT * FROM `Usuario` WHERE `matricula` = $matricula;
	 try{
		 $result = $conn->querry($sql);
		 $linhaAluno = $result->(PDO::FETCH_ASSOC);
		 print_r($linhaAluno)
         $funcao = $linhaAluno ["funcao"];
         $senha = $linhaAluno ["senha"];
		 $nome = $linhaAluno["nome"];
	 }
	 catch(PDOException $e);{
		 print "Error!:" . &e->getMessage() . "<br/>";
		 die();
	 }
 }
?>
<html>
<head>
</head>
<body>
<h1> Alterar Usuario </h1>  
<br>
   <form action="alterarUsuario.php" method="GET">

     matricula: <input type="text" name="sql" value = '<?php echo $matricula?>' >
     <br>
     nome: <input type="text" name="nome" value = '<?php echo $nome?>' >
     <br>
     funcao:<input type="text" name="funcao" value = '<?php echo $funcao?>' >
     <br>
	 senha:<input type="text" name="senha" value = '<?php echo $senha?>' >
     <br>
	 <input type="submit" value="Alterar">
   </form>
</body>
</html>
<?php
}
?>
