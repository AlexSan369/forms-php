<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entar</title>
    <style>
        *{margin:0; padding:0; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
        body {
            width:100%; height:100vh;
            background-image: linear-gradient(to right,  #789E62,  #C3B7C0);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box{
            width: 400px;
            /* background-color: #c3b7c054; */
            /* border: 2px solid #37304B; */
            color: #494C48;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            border-radius: 10px;
            padding-bottom: 2rem; padding-top: 2rem;
        }
        .box .content{
            width: 80%;
            display: inherit;
            flex-direction: inherit;
            gap: inherit;
        }
        .login{
            background-image: linear-gradient(to left,  #6493B2,  #32BA95); 
            border-radius: 10px;
        }
        .login:hover{
            background-image: linear-gradient(to right,  #6493B2,  #32BA95); 
            border-radius: 10px;
        }
        .singup{
            background-image: linear-gradient(to left,  #32BA95,  #3494CF);
            border-radius: 10px;
        }
        .singup:hover{
            background-image: linear-gradient(to right,  #32BA95,  #3494CF);
            border-radius: 10px;
        }
        .btn{
            text-decoration: none;
            text-align: center;
            display: inline-block;
            background-image: inherit;
            width: 100%;
            padding: 15px;
            color: #494C48;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            border-radius: 10px;
            border: none;
            transition: .3s cubic-bezier(0.075, 0.82, 0.165, 1);
            letter-spacing: 3px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Seja Bem vindx!</h3>
        <div class="content">
            <div class="inputBox login">
                <a class="btn" href="login.php">Entrar</a>
            </div>
            <div class="inputBox singup">
                <a class="btn" href="cadastro.php">Cadastrar</a>
            </div>
        </div>
    </div>
</body>
</html>