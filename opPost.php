<?php
function somar ($p1, $p2){
    return $p1 + $p2;
}
function subtrair ($p1, $p2){
    return $p1 - $p2;
}
function dividir ($p1, $p2){
    return $p1 / $p2;
}
function multiplicar ($p1, $p2){
    return $p1 * $p2;
}

$v1= "";
$v2="";
$result = 0;
$op = "";
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
  $v1 = $_POST["valor1"];
  $v2 = $_POST["valor2"];
  $op = $_POST["operador"];
  if (op == "+"){
	  $result = somar($v1, $v2);
  } elseif (op == "-"){
	  $result = subtrair($v1, $v2);
  }
  elseif (op == "/"){
	  $result = dividir($v1, $v2);
  }
  elseif (op == "*"){
	  $result = multiplicar($v1, $v2);
  }
}
?>
<!DOCTYPE hmtl>
<html>
<head>
</head>
<body>

<h1>3DAW</h1>

<form action="exe14opPost.php" method="POST">

 <input type="text" name="valor1" value = <?php echo $v1 ?>>
 
 <select name="operador">
  <option>+</option>
  <option>-</option>
  <option>/</option>
  <option>*</option>
 </select>
 
 <input type="text" name="valor2" value = <?php echo $v2 ?>>
 = <?php if ($result != 0) echo $result; ?>
 <br>
 <input type="submit" value="Seguir">
</form>


<br>

</body>
</html>