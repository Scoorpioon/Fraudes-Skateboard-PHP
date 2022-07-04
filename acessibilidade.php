<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Skate, SkateBoard, loja, loja de skate, skatista, shape, rodinhas, truck de skate">
    <!-- Favicon -->
    <link rel="shortcut icon" href="imagens/icone-fraude.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Icones do site -->
    <script src="https://kit.fontawesome.com/e2b90cace3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php
    
    session_start();
    setcookie('ck_authorized', 'true', time() + 3600, '/');
    if(isset($_SESSION['email']) || isset($_SESSION['senha'])) {
        echo '<script>
        $(document).ready(() => {
            $(".nao-logado").css({"display": "none"})

        })
        </script>';
    } else {
        echo '<script>
        $(document).ready(() => {
            $(".logado").css({"display": "none"})

        })
        </script>';

        session_destroy();
    }
?>
    <script src="JS/contrast.js"></script>
    <script src="JS/font.js"></script>
    <title>Fraude Skateboarding</title>
</head>
<body>
    <header id="cabecalho"><!--Topo-->
        <div id="barra-de-acessibilidade">
            <ul id="atalhos">
                <li><a href="#conteudo" accesskey="1" title="Ir para o conteúdo">Ir para o conteúdo [1]</a></li>
                <li><a href="#menu" accesskey="2" title="Ir para o menu de navegação">Ir para o menu[2]</a></li>
                <li><a href="#rodape" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></li>
                <li id="pgaccess"><a href="acessibilidade.php" title="Ir para a página de acessibilidade">ACESSIBILIDADE</a></li>
                <li class="contraste"><a href="javascript:void(0);" id="contraste">SEM CONTRASTE</a></li>
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste"> CONTRASTE</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="aumenta">A +</a></li>
                <li class="fonte"><a href="javascript:void(0);" id="diminui">A -</a></li>
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
    <main id="conteudo" class="conteudo-acessibilidade">
        <h1>ACESSIBILIDADE</h1>
		
        <p>Este site foi desenvolvido para que pessoas com deficiência visual, baixa visão, daltonismo, deficiência auditiva e mobilidade reduzida possam navegar por meio de recursos como alto contraste, aumento de fonte, teclas de atalho, tradução para a Língua Brasileira de Sinais e navegação por teclado.</p>

        <p>Para aumentar a fonte, é só clicar no símbolo de A+ em nossa barra de acessibilidade. Caso queira voltar ao tamanho de fonte original, é só clicar em A-.</p>

        <p>Se for necessário, você também pode usar o zoom nativo do seu navegador, pressionando as teclas “Ctrl” e “+” para aumentar todo o site e “Ctrl” e “-“ para diminuir. Para voltar ao padrão, pressione “Ctrl” e “0”.</p>

        <p>Este site tem melhor acessibilidade quando acessado nas versões mais atualizadas do seu navegador web. Utilize sempre a versão mais recente de seu software.</p><br>

        <p><strong>Teclas de atalho por navegadores:</strong></p><br>
        
        <p><strong>Internet Explorer e Google Chrome:</strong></p>
        <p>“Alt” + “1” - ir para o conteúdo</p>
        <p>“Alt” + “2” - ir para o menu</p>
        <p>“Alt” + “3” - ir para o rodapé</p><br>
    
        <p><strong>Firefox:</strong></p>
        <p >“Alt” + “Shift” + “número”</p><br>

        <p><strong>Opera:</strong></p>
        <p>“Shift” + “Escape” + “número”</p><br>
        
        <p><strong>Safari e OmniWeb:</strong></p>
        <p>“Ctrl” + “número”</p><br>
        
        <p><strong>No Mac</strong></p>
        <p>Control + Option + Numero</p>
        <p>Navegação por tabulação</p>
        <p>Use a tecla Tab para navegar por elementos que recebem ação do usuário no site, tais como links, botões, campos de formulário e outros na ordem em que eles são apresentados na página, e Shift + Tab para retornar. Use as setas direcionais para acessar as informações textuais.</p>

        <p>Sugestões de programas disponíveis para pessoas com deficiência</p>
        <p>- Nitrous Voice Flux: controla o computador por voz. Gratuito;</p>
        <p>- NVDA: software livre para ler tela – vários idiomas (Windows);</p>
        <p>- YeoSoft Text: leitor de tela em inglês e português;</p>
        <p>- Jaws for Windows: leitor de tela – vários idiomas;</p>
        <p>- Virtual Vision: leitor de telas em português do Brasil;</p>
        <p>- DOSVOX: sistema para deficientes visuais (Windows ou Linux).</p>
        <p>- Talckback: leitor de tela disponível em smartphones Android.</p>
        <p>Observação: leia no manual do leitor de telas sobre a melhor forma de navegação em páginas web.</p><br>

        <p><strong>LIBRAS - Língua Brasileira de Sinais</strong></p>
        <p>Este site é acessível em LIBRAS através do <a href="http://www.vlibras.gov.br/" target="_blank">VLibras</a>.</p>
        <p>-Do lado direito de cada página do site existe o ícone de um Widget informando que o site é acessível em LIBRAS.</p>
        <p>-Para traduzir, basta clicar sobre o ícone e selecionar o texto que deseja traduzir.</p><br>
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