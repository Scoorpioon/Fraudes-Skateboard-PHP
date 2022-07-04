<?php
	session_start();
	setcookie("ck_authorized", "true", time()+3600, "/");
	if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
		header('Location: index.php');

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
    <!-- Favicon -->
    <link rel="shortcut icon" href="imagens/icone-fraude.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Icones do site -->
    <script src="https://kit.fontawesome.com/e2b90cace3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/contrast.js"></script>
    <script src="JS/font.js"></script>

    <title>Fraude Skateboarding</title>
    <script>
        $(document).ready(()=>{
            $('#update').click(()=>{
                $('#account-info').attr('action', 'update.php')
            })
            $('#delete').click(()=>{
                $('#account-info').attr('action','apagar.php')
            })
        })

    </script>
    <style>

        :root {
            --user-profile-height: 450px;

        }

        #perfil {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 1000px;
        }

        #perfil fieldset {
            height: 600px;
            border-radius: 5px;
        }

        form #user-alteration {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5px;
            width: 500px;
            height: var(--user-profile-height);

        }

        #user-alteration img {
            transform: translateY(calc(var(--user-profile-height) - 520px));
            width: 200px;
            height: 200px;
            border-radius: 100px;

        }

        #user-alteration input {
            color: transparent;
            width: 100%;
            height: 100%;

        }

        #user-alteration input::-webkit-file-upload-button {
            visibility: hidden;
            z-index: 10;
        }

        .file-input {
            width: 150px;
            height: 30px;
            border: 2px solid black;
            border-radius: 20px;
            background: none;
            cursor: pointer;

            z-index: 5;
        }

        .file-input::before {
            content: 'Alterar foto';
            position: absolute;
            transform: translateY(4px) translateX(25px);
            display: flex;
            justify-content: center;
            font-size: 16px;

            z-index: -1;
        }

        form #information {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 800px;
        }

        #information input {
            width: 70%;
            margin-bottom: 10px;
            font-size: 20px;

        }

        #information label {
            font-size: 20px;
            margin-left: 5px;
        }

        #information button {
            transition: 300ms ease-in-out;
            background: none;
            border: 1.5px solid black;
            width: 150px;
            height: 30px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 700;

        }

        #information button:hover {
            background-color: black;
            color: white;

        }

        .information-buttons {
            transform: translateY(15px);

        }

        form {
            display: flex;
            align-items: center;

        }
    </style>
    <script>
        $(document).ready(() => {
            $('#delete').click(() => {
                if(confirm('Deseja apagar sua conta? Essa ação é irreversivel!')) {
                    $('#account-info').attr('action', 'apagar.php')

                } else {
                    return false;

                }
            })
        })
    </script>
</head>
<body>
    <header id="cabecalho">
        <div id="barra-de-acessibilidade">
            <ul id="atalhos">
                <li><a href="#conteudo" accesskey="1" title="Ir para o conteúdo">Ir para o conteúdo [1]</a></li>
                <li><a href="#menu" accesskey="2" title="Ir para o menu de navegação">Ir para o menu [2]</a></li>
                <li><a href="#rodape" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></li>
                <li id="pgaccess"><a href="acessibilidade.html" title="Ir para a página de acessibilidade">ACESSIBILIDADE</a></li>
                <li class="contraste"><a href="javascript:void(0);" id="contraste">SEM CONTRASTE</a></li>
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste"> CONTRASTE</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="aumenta">A +</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="diminui">A -</a></li>
            </ul>
        </div>
            <img id="logo" src="imagens/Logo Fraude.png" alt="Logo do site Fraude Skateboard">
            <div class="pesquisa">
                <input type="text" id="caixa-de-pesquisa" class="animacao-de-caixa" placeholder="Está procurando algo?">
                <a href="#" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="caixa-de-login">
               <label for="botao-de-login"><i class="fa-solid fa-circle-user"></i></label>
               <input type="checkbox" id="botao-de-login">
               <ul class="cadastrar-logar-lista">
                <li><a href="login.php">Entrar</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
               </ul>
            </div>
    </header>
    <nav id="menu">
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="shapes.php">Shapes</a></li>
            <li><a href="lixas.php">Lixas</a></li>
            <li><a href="trucks.php">Trucks</a></li>
            <li><a href="rodas.php">Rodas</a></li>
            <li><a href="rolamento.php">Rolamentos</a></li>
        </ul>
    </nav>

    <?php
		require('connection.php');
		try{
		$query = $connection->query('select id, nome, cpf, cep, celular, email, senha from usuarios where email = "'.$email.'" and senha = md5("'.$senha.'")');
		$dados = $query->fetch(PDO::FETCH_ASSOC);
        $password = $_SESSION['senha']; 

		} catch(Exception $e){
			echo 'Erro: ', $e, "\n";

		}

    echo '<main id="perfil">
            <h1>Perfil de usuário</h1>
            <form method="POST" id="account-info">
                <fieldset id="user-alteration">
                    <img src="https://source.unsplash.com/random" alt="Foto de perfil do usuário">
                    <div class="file-input">
                        <input type="file" name="send-image" id="send-image">
                    </div>
                </fieldset>
                <fieldset id="information">
                    <input type="hidden" name="id" id="id" value="'.$dados['id'].'">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" value="'.$dados['nome'].'">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="'.$dados['email'].'">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" value="'.$dados['cpf'].'">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" value="'.$dados['cep'].'">
                    <label for="celular">Número de celular</label>
                    <input type="text" name="celular" id="celular" value="'.$dados['celular'].'">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" value="'.$password.'">
                    <div class="information-buttons">
                        <button type="submit" id="update">Atualizar</button>
                        <button type="submit" id="delete">Apagar conta</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>';
        ?>
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

    <footer id="rodape">
        <div class="conteudo-do-rodape">
            <section class="canto-esquerdo-rodape">
                <h2>Redes Sociais</h2>
                <ul class="redes-sociais">
                    <li><a href="#" class="phone-number"><i class="fa-brands fa-whatsapp"></i> (11) 4002-8922</a></li>
                    <li><a href="https://www.instagram.com/bts.bighitofficial/" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://twitter.com/GMonteiroRJ?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://pt-br.facebook.com/snoopdogg" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                </ul>
            </section>
            <section class="conteudo-principal-rodape">
                <div class="mid-box">
                    <p>Todos os direitos reservados. <span>&copy;</span> 2022</p>
                    <a href="fale-conosco.php" target="_blank">Fale conosco</a>
                </div>
                <div class="email-box">
                    <label for="email-input">Deseja receber atualizações das notícias e produtos?</label><br>
                    <input type="text" placeholder="Digite seu e-mail..."
                    id="email-input" class="animacao-de-caixa">
                    <button>Enviar!</button>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>
