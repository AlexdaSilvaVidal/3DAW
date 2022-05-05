<?php
 function validaMat(){
    
 
 }

 if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST ["nome"];
   $email = $_POST ["email"];
   
   $arquivoAluno = fopen ("Alunos.txt", "w"); 
   $cabecalho = "matricula;nome;email";
   fwrite ($arquivoAluno, $cabecalho);
   $linha = $matricula . ";" . $nome . ";" . $email;
   fwrite ($arquivoAluno, $linha);
   fclose($arquivoAluno);
 }
?>

<html>
<head>
</head>
<body>
<h1> Incluir Aluno </h1>  
<br>
   <form action="exe19_aluno.php" method="POST">

     Nome: <input type="text" name="nome" value = "">
     <br>
     Matricula: <input type="text" name="matricula" value = "">
     <br>
     Email: <input type="text" name="email">
     <br>
	 <input type="submit" value="Enviar">
   </form>
</body>
</html>