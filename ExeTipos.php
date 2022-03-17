<!DOCTYPE HTML>

<html>
<head>
</head>
<body>
<h1>3DAW</h1>

<?php
echo "<h2> Exercicio Tipos</h2>";
echo "Alo bom dia gente";
//comentario

$variavel = "esta e uma string";
var_dump ($variavel);
$variavelInt = 7;

$variavelFloat = 5.32;

$variavelBoo = true;

echo "<br>";
echo "Variavel tipo int:" . $variavelInt;

echo "<br>";
echo "Variavel tipo float:" . $variavelFloat;

echo "<br>";
echo "Variavel tipo boolean:" . $variavelBoo;

if ($variavelBoo){
	echo "<br>";
    echo "Variavel tipo boolean: true";
} else{
	echo "<br>";
    echo "Variavel tipo boolean: false";
}
?>

<br>

</body>
</html>