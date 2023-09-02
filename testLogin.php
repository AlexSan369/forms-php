<?php
    // Teste de requisição
    /* print_r($_POST); */

    //Caso exista POST['submit'] e não exista user e password
    if(isset($_POST['submit']))
    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";
        $result = $conexao->query($sql);
        /* print_r('<br>'.$sql.'<br>');
           //Retorna se existe email e password informados
           print_r($result); */
        if(mysqli_num_rows($result) <1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: loginError.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: logado.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>