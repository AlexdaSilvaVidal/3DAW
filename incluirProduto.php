<?php
function validaMat() {
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST["id"];
	$nome = $_POST["nome"];
    $codigo = $_POST["codigo"];
	$descricao = $_POST["descricao"];
	$urlImagem = $_POST["url"];
    $valor = $_POST["valor"];
	$quantidade= $_POST["quantidade"];
	$peso = $_POST["peso"];
    
	
	$arquivoProduto = fopen("Produtos.txt", "w");
	$cabecalho = "id;nome;codigo;descricao;urlImagem;valor;quantidade;peso \n";
	fwrite($aquivoProduto,$cabecalho);
	$linha = $id . ";" . $nome. ";" . $codigo. ";" . $descricao . ";" . $urlImagem. ";" . $valor. ";" . $quantidade. ";" . $peso;
	fwrite($arquivoProduto,$linha);
	fclose($arquivoProduto);
}	
?>

<html>
<head>
</head>
<body>
<h1>Incluir Produto</h1>
<br>
<br>
<form action="crudProduto.php" method=POST>
    id: <input type=text name="id" value=''> <br>
    nome: <input type=text name="nome" value=''> <br>
    codigo: <input type=text name="codigo"> <br>
    descricao: <input type=text name="descricao"> <br>
    urlImagem: <input type=text name="urlImagem"> <br>
    valor:<input type=text name="valor"> <br>
    quantidade: <input type=text name="quantidade"> <br>
    peso: <input type=text name="peso"> <br>
    <br><br>
    <input type="submit" value="Incluir">
</form>
<br>
</body>
</html>
