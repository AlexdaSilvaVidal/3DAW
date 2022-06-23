<html>
<head>
<script>
        function enviaForm() {
            let mat = document.getElementById("matricula").value;
            console.log("mat: " + mat);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log("this.readyState: " + this.readyState);
                if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
                    document.getElementById("resultado").innerHTML = xhttp.responseText;
                }
            };
            //console.log("this.readyState: " + this.readyState);
            xhttp.open("GET", "incluirUsuarioSql.php", true);
            xhttp.send();
        }
        function buscarUsuario() {
            let matBusca = document.getElementById("matBusca").value;
            console.log("mat: " + mat);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                console.log("this.readyState: " + this.readyState);
                if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
                     console.log ("resposta:" + xhttp.responseText);
                    //  document.getElementById("msg").innerHMTML = xhttp.responseText;
                     let obj = JSON.parse(xhttp.responseText)
                     console.log ("nome:" + obj.nome);
                     console.log ("matricula:" + obj.matricula);
                     console.log ("funcao:" + obj.funcao);
                     console.log ("senha:" + obj.senha);
                    // xhttp.responseText;
                    document.getElementById("mat").value = obj.matricula;
                    document.getElementById("matricula").value = obj.matricula;
                    document.getElementById("nome").value = obj.nome;
                    document.getElementById("funcao").value = obj.funcao;
                    document.getElementById("senha").value = obj.senha;

                    document.getElementById("formAlt").style.display = "block";
                    
                    document.getElementById("pedeMat").style.display = "none";

                }
            };
            //console.log("this.readyState: " + this.readyState);
            xhttp.open("GET", "http://localhost/3daw/ex27_BuscarUsuario.php?matricula=" . mat, true);
            xhttp.send();
        }
    </script>    
</head>
<body>
<h1>Alterar Aluno</h1>
<br>
<br>
<div id="formAlt" style="">
<form action="" method="POST">
    Matricula: <input type=text name="mat" id="mat" 
				value='' disabled> <br>
                <input type='hidden' name="matricula" id="matricula"
				value='' >
    nome: <input type="text" name="nome" id="nome" value=''> <br>
    funcao: <input type="text" name="funcao" id="funcao" value=''> <br>
    senha: <input type="password" name="senha" id="senha" value=''> <br>
    <br><br>
    <input type="button" value="Alterar" onclick="enviaForm();">
</form>
</div>
<br>
<div id="pedeMat" style>
        <form>
            Matricula: <input type=text name="matBusca" id="matBusca" value='' onChange="buscarUsuario();"> <br>
        </form>
    
</div>
<div id="msg">
</div>
</body>
</html>