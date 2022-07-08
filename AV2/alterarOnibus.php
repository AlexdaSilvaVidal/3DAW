<?php
function validaMat() {
	
}

$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=crudSql', $user, $pass);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $qtdAssentos = $_POST["qtdAssentos"];
    $temBanheiro = $_POST["temBanheiro"];
    $temArCondicionado = $_POST["temArCondicionado"];
    $chassis = $_POST["chassis"];
    $placa = $_POST["placa"];
	
	$achei = false;
	
	$sql = "UPDATE Onibus SET 'marca'='$marca', 'modelo'='$modelo', 'qtdAssentos'='$qtdAssentos', 
	'temBanheiro'='$temBanheiro', 'temArCondicionado'='$temArCondicionado', 'chassis'='$chassis', 'placa'='$placa' WHERE 'id'='$id'";

    $result = $conn->query($sql);
    print_r($result);
	
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `Onibus` WHERE `id` = $id";
    try {
        $result = $conn->query($sql);
        $linhaA = $result->fetch(PDO::FETCH_ASSOC);   //fetch_assoc();
        print_r($linhaA);
        $marca = ["marca"];
        $modelo = ["modelo"];
        $qtdAssentos = ["qtdAssentos"];
        $temBanheiro = ["temBanheiro"];
        $temArCondicionado = ["temArCondicionado"];
        $chassis = ["chassis"];
        $placa = ["placa"];
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
<h1>Alterar Onibus</h1>
<br>
        <a href="inserirOnibus.php">Inserir Onibus</a><br>
		<a href="alterarOnibus.html">Editar Onibus</a><br>
		<a href="listarOnibus.php">Listar Onibus</a><br>
		<a href="deletarOnibus.php">Apagar Onibus</a><br>
<br>
<form action="alterarOnibus.php" method="POST">
    Id: <input type=text name="id" 
				value='<?php echo $id ?>' disabled> <br>
                <input type='hidden' name="id" 
				value='<?php echo $id ?>' >
    Marca: <input type="text" name="marca" value='<?php echo $marca ?>'> <br>
    Modelo: <input type="text" name="modelo" value='<?php echo $modelo ?>'> <br>
    Qtd de Assentos: <input type="text" name="qtdAssentos" value='<?php echo $qtdAssentos ?>'> <br>
    Tem Banheiro: <input type="text" name="temBanheiro" value='<?php echo $temBanheiro ?>'> <br>
    Tem Ar Condicionado:   <input type="text" name="temArCondicionado" value='<?php echo $temArCondicionado ?>'><br>
    Chassis:   <input type="text" name="chassis" value='<?php echo $chassis ?>'><br>
    Placa:   <input type="text" name="placa" value='<?php echo $placa ?>'><br>
    <br><br>
    <input type="submit" value="Alterar">
</form>
<br>
</body>
</html>