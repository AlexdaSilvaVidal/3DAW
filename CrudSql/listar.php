<?php
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=crudSql', $user, $pass);
if ($conn->connect_error) {
    die("Conexao Falhou, avise o administrador do sistema");
}
$comandoSQL = "SELECT * from `Usuario`";
$result = $conn->query($comandoSQL);

$arrUsuarioss = array();
$x = 0;
while ($linha = $result->fetch_assoc()) {
    $arrUsuarios[$x] = $linha;
    $x++;
}

$jUsuario = json_encode($arrUsuarios, JSON_UNESCAPED_UNICODE);
echo $jUsuario;