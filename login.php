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
    <title>Fraude Skateboarding</title>
    <script src="JS/contrast.js"></script>
    <script src="JS/font.js"></script>
</head>
<body>
    <header id="cabecalho">
        <div id="barra-de-acessibilidade">
            <ul id="atalhos">
                <li><a href="#conteudo" accesskey="1" title="Ir para o conteúdo">Ir para o conteúdo [1]</a></li>
                <li><a href="#menu" accesskey="2" title="Ir para o menu de navegação">Ir para o menu [2]</a></li>
                <li><a href="#rodape" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></li>
                <li id="pgaccess"><a href="acessibilidade.php" title="Ir para a página de acessibilidade">ACESSIBILIDADE</a></li>
                <li class="contraste"><a href="javascript:void(0);" id="contraste">SEM CONTRASTE</a></li>
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste">CONTRASTE</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="aumenta">A +</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="diminui">A -</a></li>
            </ul>
        </div>
            <img id="logo" src="imagens/Logo Fraude.png" alt="Logo do site Fraude Skateboard">
            <div class="pesquisa">
                <input type="text" id="caixa-de-pesquisa" class="animacao-de-caixa" placeholder="Está procurando algo cria?">
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

    <main id="conteudo" class="conteudo-login">
      <section id="caixa-de-login">
          <form action="logincode.php" method="POST">
              <fieldset>
                  <legend>Login no site</legend>
                  <label for="caixa-de-email">E-mail:</label><br>
                  <input type="text" placeholder="Digite seu e-mail..." name="email" id="caixa-de-email"><br>
                  <label for="caixa-de-senha">Senha:</label><br>
                  <input type="text" placeholder="Digite sua senha..." name="senha" id="caixa-de-senha"><br>
                  <a href="#">Esqueci minha senha</a><br>
                  <input type="submit" value="Logar-se"><br>
                  <a href="cadastro.php" class="link-cadastro">Não tenho uma conta!</a>
              </fieldset>
          </form>
      </section>
    </main>

    <footer id="rodape">
        <div class="conteudo-do-rodape">
            <section class="canto-esquerdo-rodape">
                <ul class="redes-sociais">
                    <li class="phone-number"><a href="#"><i class="fa-brands fa-whatsapp"></i> (11) 4002-8922</a></li>
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