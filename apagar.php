<?php
    session_start();
    setcookie('ck_authorized', 'true', time() + 3600, '/');

    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
        header('Location: login.php');
        
    } else {
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        
    }
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apagar conta</title>
    </head>
    <body>
    <?php
        require('connection.php');

        $emailzin = $_SESSION['email'];
        $senhazinha = $_SESSION['senha'];

        $query = $connection -> query('select id,nome,email,cpf,cep,celular,senha from usuarios where email = "'.$emailzin.'" and senha= md5("'.$senhazinha.'")');
        $dados = $query -> fetch(PDO::FETCH_ASSOC);

        $id = $dados['id'];

        try {
        $command = 'delete from usuarios where id="'.$id.'"';
        $delete = $connection -> prepare($command);
        $delete -> execute();
        
        echo "<script>alert('Conta excluída com sucesso.')</script>";
        echo "<script>window.location.replace('index.php')</script>";

        } catch(Exception $error) {
            echo $error;

        }
    ?>
</body>
</html>