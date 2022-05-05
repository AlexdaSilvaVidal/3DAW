<?php
 function validaMat(){
  
 }

 if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST ["nome"];
   $email = $_POST ["email"];
   
   $arquivoAluno = fopen ("Alunos.txt", "w") or die ("arquivo com problema"); 
   while (!feof($arquivoAlunoin)){
	 echo fgets ($aquivoAluno);
   }
   $arquivoAluno = fopen ("Alunos.txt", "w") or die ("arquivo com problema"); 
   $cabecalho = "matricula;nome;email \n";
   fwrite ($arquivoAlunow, $cabecalho);
   $linha = $matricula . ";" . $nome . ";" . $email;
   fwrite ($arquivoAlunow, $linha);
   fclose($arquivoAlunow);
 }
?>

<html>
<head>
</head>
<body>
<h1> Incluir Aluno </h1>  
<br>
   <form action="exe19_aluno.php" method="POST">

     Nome: <input type="text" name="nome">
     <br>
     Matricula: <input type="text" name="matricula">
     <br>
     Email: <input type="text" name="email">
     <br>
	 <input type="submit" value="Enviar">
   </form>
</body>
</html>
