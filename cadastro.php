<?php
    require('connection.php');
    
    session_start();
    setcookie('ck_authorized', 'true', time() + 3600, '/');
    if(isset($_SESSION['email']) || isset($_SESSION['senha'])) {
        echo '<script>alert("Usuário está logado!")</script>';

    } else {
        session_destroy();

    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="imagens/Logo-Fraude (1).ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Icones do site -->
    <script src="https://kit.fontawesome.com/e2b90cace3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/contrast.js"></script>
    <title>Fraude Skateboarding</title>
</head>
<body>
    <header id="cabecalho">
        <div id="barra-de-acessibilidade">
            <ul id="atalhos">
                <li><a href="#conteudo" accesskey="1" title="Ir para o conteúdo">Ir para o conteúdo [1]</a></li>
                <li><a href="#menu" accesskey="2" title="Ir para o menu de navegação">Ir para o menu[2]</a></li>
                <li><a href="#rodape" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></li>
                <li id="pgaccess"><a href="acessibilidade.html" title="Ir para a página de acessibilidade">ACESSIBILIDADE</a></li>
                <li class="contraste"><a href="javascript:void(0);" id="contraste">SEM CONTRASTE</a></li>
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste">CONTRASTE</a></li>
                <li class="fonte"><a href="javascript:void(0); " id="aumenta">A +</a></li>
                <li class="fonte"><a href="javascript:void(0); " id="diminui">A -</a></li>
            </ul>
        </div>
            <img id="logo" src="imagens/Logo Fraude.png" alt="Logo do site Fraude Skateboard">
            <div class="pesquisa">
                <input type="text" id="caixa-de-pesquisa" placeholder="Está procurando algo cria?">
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

    <main id="conteudo" class="conteudo-cadastro">
      <section id="caixa-de-cadastro">
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <fieldset>
                  <legend>Cadastro</legend>
                  <div class="fieldset-box">
                  <label for="nome-completo" class="required">Nome completo:</label><br>
                  <input type="text" name="nome-completo" id="nome-completo" placeholder="Digite seu nome completo..." class="animacao-de-caixa" required>
                  </div>
                  <div class="fieldset-box">
                  <label for="caixa-de-email" class="required">E-mail:</label><br>
                  <input type="text" placeholder="Digite seu e-mail..." name="caixa-de-email" id="caixa-de-email" class="animacao-de-caixa" required>
                  </div>
                  <div class="fieldset-box">
                  <label for="cpf" class="required">CPF:</label><br>
                  <input type="text" name="cpf" id="cpf" placeholder="123.456.789-99" class="animacao-de-caixa" required>
                  </div>
                  <div class="fieldset-box">
                  <label for="cep" class="required">CEP:</label><br>
                  <input type="text" name="cep" id="cep" placeholder="12345-678" class="animacao-de-caixa" required>
                  </div>
                  <div class="fieldset-box">
                  <label for="numero-de-telefone">Celular:</label><br>
                  <input type="text" name="numero-de-telefone" id="numero-de-telefone" placeholder="(99) 12345-6789" class="animacao-de-caixa">
                  </div>
                  <div class="fieldset-box">
                  <label for="caixa-de-senha" class="required">Senha:</label><br>
                  <input type="text" placeholder="Digite sua senha..." name="caixa-de-senha" id="caixa-de-senha" class="animacao-de-caixa" required><br>
                  </div>
                  <input type="submit" value="Cadastrar-se">
              </fieldset>
          </form>
      </section>
    </main>

    <footer id="rodape">
         <div class="conteudo-do-rodape">
            <section class="canto-esquerdo-rodape">
                <h2>Redes sociais</h2>
                <ul class="redes-sociais">
                    <li class="phone-number"><a href="#"><i class="fa-brands fa-whatsapp"></i> (11) 4002-8922</a></li>
                    <li><a href="https://www.instagram.com/bts.bighitofficial/" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://twitter.com/GMonteiroRJ?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://pt-br.facebook.com/snoopdogg" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li></li>
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

    <?php
        require('connection.php');

        $name = $_POST['nome-completo'];
        $email = $_POST['caixa-de-email'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $celular = $_POST['numero-de-telefone'];
        $senha = $_POST['caixa-de-senha'];

        $insert = 'insert into usuarios (nome,email,cpf,cep,celular,senha) values ("'.$name.'","'.$email.'","'.$cpf.'","'.$cep.'","'.$celular.'",md5("'.$senha.'"))';
        $cadastrar = $connection -> prepare($insert);
        $cadastrar -> execute();

        echo "<script>alert('Cadastro efetuado com sucesso!')</script>"
    ?>
</body>
</html>
