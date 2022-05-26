<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	$matricula = $_POST["matricula"];
	
    $arquivoUsuarioIn = fopen("Usuarios.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoUsuarioIn)) {
        $linhas[] = fgets($arquivoUsuarioIn);
    }
    fclose($arquivoUsuarioIn);

    $arquivoUsuarioOut = fopen("Usuarios.txt", "w") or die("Erro na abertura do arquivo");
    foreach($linhas as $linha) {
        $colunaDados = explode(";", $linha);
        if ($colunaDados[0] != $matricula) {
            $txt = $linha;
            fwrite($arquivoUsuarioOut, $txt);
        }
    }
    fclose($arquivoUsuarioOut);
}
?>
<!DOCTYPE html>
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
  <a href="excluirUsuario.php" class="w3-bar-item w3-button">Excluir Usuário</a>
</div>

<h1>Excluir Usuario</h1>
    <br>
<form action="excluirUsuario.php" method="POST">
    matricula: <input type="text" name="matricula">
     <br>
	 <input type="submit" value="Excluir">
</form>
<br>
</body>
</html>