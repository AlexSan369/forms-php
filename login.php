<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
</head>
<body>
    
    <article>
        <h1>Faça seu Login . . .</h1>
    <div id="content">
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Usuário" id="usuario" >
            <input type="password" name="password" placeholder="Senha" id="senha">
            <input type="submit" name="submit" value="Entrar!">  <!-- onclick="logar(); return false" -->
        </form>
        <p id="passarMouse"><b>Não tem conta?</b> <a href="cadastro.php">Cadastre-se!</a></p>
        <div id="mostrar">Cadastre-se para acessar a página! ;v</div>
    </div>
    </article>

    <!-- <script>
        function logar(){
            var nome = document.getElementById('usuario').value;
            var senha = document.getElementById('senha').value;

            if(nome == "Alex" && senha == "Lindooo"){
                location.href = "logado.html";
            }else{
                alert("Não foi possível logar :/")
            }
        }
    </script> -->


</body>
</html>