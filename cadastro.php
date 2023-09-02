<?php 

    if (isset($_POST['submit']))
    {
        /* print_r("<br>". $_POST['data_nascimento']."<br>". $_POST['email']."<br>". $_POST['sobre']."<br>". $_POST['cidade']); */
        include_once('config.php');

        $nome = $_POST['nome'];
        $nomeSocial = $_POST['nomeSocial'];
        $celular = $_POST['celular'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cidade = $_POST['cidade'];
        $sobre = $_POST['sobre'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,nomesocial, whatsapp, genero, datanasc, email, password, cidade, txt)
         VALUES ('$nome','$nomeSocial', '$celular', '$genero', '$data_nascimento', '$email','$password', '$cidade', '$sobre')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Ample</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(20, 147, 220), rgb(17, 54, 71));
            min-height: 100vh;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -35%);
            background-color: rgba(0, 0, 0, 0.493);
            padding: 16px;
            border-radius: 16px;
            width: 35%; height: auto;
            color: white;
        }
        fieldset{
            position: relative;
            border: 3px solid dodgerblue;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .genderBox{
            position: relative;
        }
        .genderBox input[type="radio"]{
            margin-bottom: 10px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom:1px solid white ;
            outline: none; 
            color: white;
            font-size: 16px;
            width: 100%;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }
        .labelInput{
            position: absolute;
            top: 0; left: 0;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        input[type="date" i]{
            text-align: center;
            background-image: linear-gradient(to right, dodgerblue, cyan);
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0 , 80, 172), rgb(80, 19, 195));
            width: 100%;
            padding: 15px;
            color: white;
            cursor: pointer;
            font-size: 15px;
            border-radius: 10px;
            border: none;

        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0 , 92, 197), rgb(90, 20, 220));
        }
        .inputNasc{
            display: flex;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><strong>Cadastre-se</strong></legend>
                 <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                 </div> <br />
                 <div class="inputBox">
                    <input type="text" name="nomeSocial" id="nomeSocial" class="inputUser" required>
                    <label for="nomeSocial" class="labelInput">Nome Social</label>
                 </div> <br />
                 <div class="inputBox">
                    <input type="tel" name="celular" id="celular" class="inputUser" required>
                    <label for="celular" class="labelInput">WhatsApp</label>
                 </div>
                 
                 <div class="genderBox">
                    <p>Genero:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino">
                    <label for="feminino">Feminino</label> <br />
                    <input type="radio" name="genero" id="masculino" value="masculino">
                    <label for="masculino">Masculino</label> <br />
                    <input type="radio" name="genero" id="nbin" value="nbin">
                    <label for="nbin">Não-Binário</label> <br />
                    <input type="radio" name="genero" id="trans" value="trans">
                    <label for="trans">Trans</label> <br />
                    <input type="radio" name="genero" id="Outro" value="Outro">
                    <label for="Outro">Outro</label>
                </div> <br />

                 <div class="inputNasc">
                    <label for="data_nascimento"><strong >Data de Nascimento:</strong></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" style="padding-top: 1rem;" required>
                 </div><br />
                 <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">e-Mail</label>
                 </div><br />
                 <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                 </div><br />
                 <div class="inputBox">
                    <input type="cidade" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</strong></label>
                 </div><br />
                 <div class="inputBox">
                    <input type="textarea" name="sobre" id="sobre" class="inputUser" required>
                    <label for="sobre" class="labelInput">O que é tecnologia?</label>
                 </div>

                 <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>