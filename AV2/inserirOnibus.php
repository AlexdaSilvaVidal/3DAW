<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$id = $_GET["id"];
$marca = $_GET["marca"];
$modelo = $_GET["modelo"];
$qtdAssentos = $_GET["qtdAssentos"];
$temBanheiro = $_GET["temBanheiro"];
$temArCondicionado = $_GET["temArCondicionado"];
$chassis = $_GET["chassis"];
$placa = $_GET["placa"];

$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=crudOnibus', $user, $pass);
if ($conn->connect_error) {
    die("Conexao perdida");
}

$sql = "Insert into Onibus('id', 'marca', 'modelo', 'qtdAssentos', 'temBanheiro', 'temArCondicionado', 'chassis', 'placa'
) VALUES ('$id','$marca','$modelo','$qtdAssentos','$temBanheiro','$temArCondicionado','$chassis','$placa')";
$result = $conn->query($sql);

$sql = "SELECT * from onibus where id='$id'";
$result = $conn->query($sql);

$jOnibus = json_encode($result);
echo $jOnibus;
}
?>

<html>
<head>
    <script>        
        function enviaForm(strID, strMarca, strModelo, strqtdAssentos,strtemBanheiro,strtemArCondicionado,strChassis,strPlaca) {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("Chegou resposta: " + this.responseText)
                    document.getElementById("msg").innerHTML = this.responseText;
                }
            }
            xmlHttp.open("GET", "incluirOnibus.php", true);
            xmlHttp.send();

        }
    </script>
</head>
<body>
        <a href="inserirOnibus.php">Inserir Onibus</a><br>
		<a href="alterarOnibus.html">Editar Onibus</a><br>
		<a href="listarOnibus.php">Listar Onibus</a><br>
		<a href="deletarOnibus.php">Apagar Onibus</a><br>

<h1>Incluir Ônibus</h1>
<form action="incluirOnibus.php" id="onibus">
    ID:   <input type="text" name="id" id="id"><br>
    Marca:   <input type="text" name="marca" id="marca"><br>
    Modelo:   <input type="text" name="modelo" id="modelo"><br>
    Qtd de assentos:   <input type="text" name="qtdAssentos" id="qtdAssentos"><br>
    Tem banheiro:   <input type="text" name="temBanheiro" id="temBanheiro"><br>
    Tem ar condicionado:   <input type="text" name="temArCondicionado" id="temArCondicionado"><br>
    Chassis:   <input type="text" name="chassis" id="chassis"><br>
    Placa:   <input type="text" name="placa" id="placa"><br>
    <br/>
    <br/>
    <input type="button" value="enviar" onclick="enviaForm()">
</form>

<p id="msg"></p>

</body>
</html>