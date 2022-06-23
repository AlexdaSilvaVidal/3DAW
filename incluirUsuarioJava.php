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
</script>
</head>
<body>
<h1>Incluir Usuario</h1><br><br>
<div>
<a href="incluirUsuarioJava.html">Incluir Usuário</a><br>
<a href="alterarUsuarioJava.html">Alterar Usuário</a><br>
<a href="excluirUsuarioJava.html">Excluir Usuário</a><br>
<a href="listarUsuarioJava.html">Listar Usuário</a><br>
<a href="listarTodosUsuarioJava.html">Listar Todos Usuários</a><br>
</div>

<form action="incluirUsuarioJava.php" method="POST">
    Matricula: <input type=text name="matricula" id="matricula" value=''> <br>
    nome: <input type=text name="nome" value=''> <br>
    função: <input type=text name="funcao"> <br>
	senha: <input type=text name="senha"> <br>
    <br><br>
    <input type="button" value="Incluir" onClick="enviaForm();">
</form>
<div id="resultado"></div>
<br>
</body>
</html>
