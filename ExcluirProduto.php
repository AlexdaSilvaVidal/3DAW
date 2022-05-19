<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
	$codigo = $_POST["codigo"];
	
    $arquivoAlunoIn = fopen("Produtos.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoAlunoIn)) {
        $linhas = fgets($arquivoAlunoIn);
    }
    fclose($arquivoAlunoIn);

    $arquivoAlunoOut = fopen("Produtos.txt", "w") or die("Erro na abertura do arquivo");
    foreach($linhas as $linha) {
        $colunaDados = explode(";", $linha);
        if ($colunaDados[0] != $codigo) {
            $txt = $linha;
            fwrite($arquivoAlunoOut, $txt);
        }
    }
    fclose($arquivoAlunoOut);
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
</head>
<body>
    <h1>Excluir Produto</h1>
    <br>
<form action="ExcluirProduto.php" method="POST">
    codigo: <input type="text" name="codigo">
     <br>
	 <input type="submit" value="Excluir">
</form>
<br>
</body>
</html>