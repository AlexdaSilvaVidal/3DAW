<?php
function validaMat() {
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$matricula = $_POST["matricula"];
	$nome = $_POST["nome"];
    $funcao = $_POST["funcao"];
	$senha = $_POST["senha"];
	$user = 'root';
	$pass = '';
	
	$conn = new PDO('mysql:host=localhost;dbname=cruSql', $user, $pass);
	$sql = "INSERT INTO `Usuario`(`nome`,`matricula`,`funcao`,`senha`) VALUES ('$nome','$matricula','$funcao','$senha')";
	try {
		$result = $conn->query($sql);
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
<h1>Incluir Usuario</h1>
<br>
        <a href="inserir.php">Inserir Usuario</a><br>
		<a href="alterarUsuario.html">Editar Usuario</a><br>
		<a href="listar.php">Listar Usuarios</a><br>
		<a href="deletarUsuario.php">Apagar Usuario</a><br>
<br>
<form action="incluirUsuario.php" method="POST">
    Matricula: <input type=text name="matricula" value=''> <br>
    nome: <input type=text name="nome" value=''> <br>
    função: <input type=text name="funcao"> <br>
	senha: <input type=text name="senha"> <br>
    <br><br>
    <input type="submit" value="Incluir">
</form>
<br>
</body>
</html>