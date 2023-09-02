<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
    <style>
        
.errorLogin{
    width: 270px; height: 50px;
    margin:2rem auto;
    text-align:center;
    padding:1rem;
    background-color: rgba(137, 43, 226);
    border-radius: 10px;
    padding: 6px 9px;
    color: aliceblue;
    font-weight: bolder;
    box-shadow: 3px 6px violet;    
}
    </style>
</head>
<body>
    
    <article>
        <h1>Faça seu Login . . .</h1>
    <div id="content">
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Usuário" id="usuario" >
            <input type="password" name="password" placeholder="Senha" id="senha">
            <input type="submit" name="submit" value="Entrar!">
        </form>
        <p id="passarMouse"><b>Não tem conta?</b> <a href="cadastro.php">Cadastre-se!</a></p>
        <div id="mostrar">Cadastre-se para acessar a página! ;v</div>
        
        <div class="errorLogin">
            Usuário ou senha não encontrados<br /> verifique seu acesso e tente novamente
        </div>
    </div>
    </article>
</body>
</html>