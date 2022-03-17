<!DOCTYPE HTML>

<html>
<head>
</head>
<body>
<h1>3DAW</h1>

<?php
echo "<h2> Exercicio Object </h2>";

class Disciplina{
      public $nome;
	  public $sigla;
	  public $carga;
	  public function _construct($nome,$sigla,$carga){
	      $this->nome = $nome;
		  $this->nome = $sigla;
		  $this->nome = $carga;
		  }
		  public function getDisc() {
		      
			  return "nome da disciplina" . $this->nome .
			         ", sigla da disciplina" . $this->sigla.
					 ", carga horária da disciplina" . $this->carga;
		  
		  }
}
$objDisciplina = new Disciplina("Desenvolvimento Web","3daw","80");
echo $objDisciplina->getDisc();
echo "<br>";

$objDisciplina2 = new Disciplina("Algebra Liner","3alg","40");
echo $objDisciplina2->getDisc();
echo "<br>";

$objDisciplina3 = new Disciplina("Redes","3rsd","50");
echo $objDisciplina3->getDisc();
echo "<br>";



?>

<br>

</body>
</html>