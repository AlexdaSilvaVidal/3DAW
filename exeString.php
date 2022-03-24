
<html>
<head>
</head>
<body>
<h1>3DAW</h1>

<?php
echo "<h2> Exercicio String</h2>";

$variavel = "esta e uma string";
echo $variavel;
echo "<br>";
echo "quantidade de carcteres:".strlen ($variavel);
echo "<br>";
echo "quantidade de palavras:".str_word_count ($variavel);
echo "<br>";
echo "frase invertida:".strrev($variavel);


?>

<br>

</body>
</html>