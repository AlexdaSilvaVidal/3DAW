<?php
$v1= "";
$v2="";
if($_SERVER ["REQUEST_METHOD"]=="POST"){
$v1 = $_POST["valor1"];
$v2 = $_POST["valor2"];
$result = $v1 + $v2;
}
?>
<html>
<head>
</head>
<body>

<h1>3DAW</h1>

<form action="exe14soma.php" method="POST">

 <input type="text" name="valor1" value = <?php echo $v1 ?>>
 +
 <input type="text" name="valor2" value = <?php echo $v2 ?>>
 =<?php echo $result; ?>
 <br>
 <input type="submit" value="Somar">
</form>


<br>

</body>
</html>