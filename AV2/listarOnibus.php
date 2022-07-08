<?php
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=crudOnibus', $user, $pass);
if ($conn->connect_error) {
    die("Conexao Falhou, avise o administrador do sistema");
}
$comandoSQL = "SELECT * from `Onibus`";
$result = $conn->query($comandoSQL);

$arrOnibus = array();
$x = 0;
while ($linha = $result->fetch_assoc()) {
    $arrOnibus[$x] = $linha;
    $x++;
}

$jOnibus = json_encode($arrOnibus, JSON_UNESCAPED_UNICODE);
echo $jOnibus;
?>