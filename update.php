<?php
    session_start();
    setcookie("ck_authorized","true",time()+3600,"/");
    if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
        header('Location: login.php');
    }
    else{
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta atualizada</title>
</head>
<body>
    <?php
        require('connection.php');
        $id1 = $_POST['id'];
        $nome1 = $_POST['name'];
        $cpf1 = $_POST['cpf'];
        $cep1 = $_POST['cep'];
        $celular1 = $_POST['celular'];
        $emailzin = $_POST['email'];
        $senhazinha = $_POST['password'];

        try {    
            $update = 'update usuarios set nome="'.$nome1.'", email="'.$emailzin.'", cpf="'.$cpf1.'", cep="'.$cep1.'", celular="'.$celular1.'",senha=md5("'.$senhazinha.'") where id="'.$id1.'"';

            $atualizar = $connection -> prepare($update);
            $atualizar -> execute();

            echo '<script>alert("Conta atualizada com sucesso! Por favor, cidadão, vá se fude")</script>';
            echo '<script>window.location.replace("login.php")</script>';

        } catch(Exception $e) {
                echo $e;
            }
    ?>
</body>
</html>