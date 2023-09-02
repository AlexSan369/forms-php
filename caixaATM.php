<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'caixaatm';
$valor = 1000;

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* $saldo = mysqli_query($conexao, "INSERT INTO informacoes(saldo) VALUES ('$valor')"); */

if(isset($_POST['deposito']))
{
    $sql = "SELECT saldo FROM informacoes WHERE id = 1";
    $result = $conexao->query($sql); 
    while($lista = $result->fetch_array())
    {   
        $adiciona = mysqli_query($conexao, "INSERT INTO informacoes(saldo) VALUES (250)");
        $lista['saldo'] += $adiciona;
    }  
}

if(isset($_POST['saldo']))
{
    $sql = "SELECT saldo FROM informacoes";
    $result = $conexao->query($sql);
    while($lista = $result->fetch_array())
    {
        $soma = $lista['saldo'];
        print_r($soma);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <style>
        body{
            background-color: rgba(0,0,0, 0.369);
            width: 100%; height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .box{
            background-color: rgba(0,0,0, 0.999);
            width: 69%;
            height: 369px;
            border-radius: .369rem;
        }
        input{
            padding: .369rem .36rem;
            outline: none;
            border: none;
            transform: translate(-3%, -69%);
            cursor: pointer;
            letter-spacing: .369em;
            text-transform: uppercase;
            text-align: center;
        }
        input:hover{
            background-color: #333;
            color: #6dd6ff;
        }
        .displayATM{
            color: #b6eb26;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: small;
            width: 69%; height: 36%;
            background-color: #666;            
            margin: 0 auto;
            border-radius: .369rem;
        }
        p{
            color: #b6eb26;
            padding-left: 36px;
            padding-top: 36px;
            font-weight: bolder;
            animation: blin .369s infinite;
        }
        @keyframes blin {
            0%{ color: transparent;}
            100%{ color: #b6eb26;}
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="inputBox">
            <form action="caixaATM.php" method="POST">
                <input name="saldo" type="submit" value="Saldo">
                <input name="saque" type="submit" value="Saque">
                <input name="deposito" type="submit" value="Depósito">
            </form>
        </div>
        <div class="displayATM">
            <p>_ </p>
        </div>
    </div>
</body>
</html>