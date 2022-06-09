<html>
<head>
   <script>
       function enviaForm(){
	   let mat = document.getElementById("matricula").value;
	   var xhttp = new XMLHHttpRequest()
	   
	   xhttp.onreadystatechange = function{
	   console.log("this.readyState: " + this.readyState)
	       if(this.readyState == 4 && this.status == 200 ){
		     document.getElementById("resultado").innerHTML = xhttp.resposnseText;
		   }
	    }
		xhttp.open("GET", "exe25incluirUsuario.php", true);
		xhttp.send();
	   }
   </script>
</head>
<body>
<h1> incluir Usuario </h1>  
<br>
   <form>

     matricula: <input type="text" name="matricula" id="matricula">
     <br>
     nome: <input type="text" name="nome">
     <br>
     funcao:<input type="text" name="funcao">
     <br>
	 senha:<input type="text" name="senha">
     <br>
	 <input type="submit" value="Alterar" onClick="enviaForm();">
   </form>
   <div> id="resultado" </div>
</body>
</html>
