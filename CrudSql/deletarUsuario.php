<?php
function validaMat() {
	
}
$matricula = "";
$nome = "";
$funcao = "";
$senha = "";
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=faeterj3DawManha', $user, $pass);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$matricula = $_POST["matricula"];
	$nome = $_POST["nome"];
    $funcao = $_POST["funcao"];
    $senha = $_POST["senha"];
	
	$achei = false;
    $sql = "DELETE FROM Usuario WHERE matricula = $matricula";
    $result = $conn->query($sql);
    print_r($result);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $matricula = $_GET["matricula"];
    $sql = "SELECT * FROM Usuario WHERE matricula = $matricula";
    try {
        $result = $conn->query($sql);
        $linhaA = $result->fetch(PDO::FETCH_ASSOC);   //fetch_assoc();
        print_r($linhaA);
        $funcao = $linhaA["funcao"];
        $senha = $linhaA["senha"];
        $nome = $linhaA["nome"];
	}
	catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
}
?>
<html>
<head>
</head>
<body>
<h1>Alterar Usuário</h1>
<br>
        <a href="inserir.php">Inserir Usuario</a><br>
		<a href="alterarUsuario.html">Editar Usuario</a><br>
		<a href="listar.php">Listar Usuarios</a><br>
		<a href="deletarUsuario.php">Apagar Usuario</a><br>
<br>
<form action="deletarUsuario.php" method="POST">
    Matricula: <input type=text name="mat" 
				value='<?php echo $matricula ?>' disabled> <br>
                <input type='hidden' name="matricula" 
				value='<?php echo $matricula ?>' >
    nome: <input type="text" name="nome" value='<?php echo $nome ?>'> <br>
    funcao: <input type="text" name="funcao" value='<?php echo $funcao ?>'> <br>
    senha: <input type="password" name="senha" value='<?php echo $senha ?>'> <br>
    <br><br>
    <input type="submit" value="Alterar">
</form>
<br>
</body>
</html>