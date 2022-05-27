<?php
$linhas = array();
$colunas = array();
$arquivoUsuario = fopen("Usuarios.txt", "r") or die("Erro na abertura do arquivo");
$cabecalho =  fgets($arquivoUsuario);
$colunas = explode(";", $cabecalho);
while (!feof($arquivoUsuario)) {
    $linhas[] = fgets($arquivoUsuario);
}
fclose($arquivoUsuario);
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
  <a href="listarUmUsuario.php" class="w3-bar-item w3-button">Listar Um Usuário</a>  
  <a href="excluirUsuario.php" class="w3-bar-item w3-button">Excluir Usuário</a>
</div>
    <h1>Listar Usuarios</h1>
    <br>
<table>
    <tr>
    <?php
    foreach($colunas as $coluna){
        echo "<th>$coluna</th>";
    }
    echo "</tr>";
    foreach ($linhas as $linha) {
        echo "<tr>";
        $colunas1 = array();
        $colunas1 = explode(";", $linha);
        foreach ($colunas1 as $coluna){
            echo "<td>$coluna</td>";
        }
        echo "</tr>";
    }
    ?>
<br>
</body>
</html>
