<?php
 function validaMat(){
  while (!feof($arquivoAlunoin)){
	 echo fgets ($aquivoAluno);
    }
 }

 if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $matricula = $_POST ["matricula"];
   $nome = $_POST ["nome"];
   $email = $_POST ["email"];
 
	
    if file_exists("Aluno.txt"){
	 cabecalho = "matricula;nome;email \n";
     $arquivoAlunow = fopen ("Alunos.txt", "w") or die ("arquivo com problema"); 
	 fwrite ($arquivoAlunow, $linha);
     fclose($arquivoAlunow);
    }
  
    $arquivoAlunow = fopen ("Alunos.txt", "w") or die ("arquivo com problema"); 
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