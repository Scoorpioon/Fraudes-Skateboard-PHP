<?php
        require('connection.php');
        session_start();

        try {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $query = $connection -> query('select nome, email, cpf, cep, celular, senha from usuarios where email = "'.$email.'" and senha = md5("'.$senha.'")');
            $dados = $query -> fetch(PDO::FETCH_ASSOC);
            
            if(!isset($dados['email']) || !isset($dados['senha'])) {
                echo '<script>alert("Usuário não encontrado!")</script>';
                echo '<script>window.location.replace("login.php")</script>';
                session_destroy();

            } else {
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;

                echo '<script>alert("Usuário logado!")</script>';
                echo '<script>window.location.replace("index.php")</script>';
            }
        } catch(Exception $error) {
            echo '<script>alert("'.$error.'")</script>';

        }
    ?>