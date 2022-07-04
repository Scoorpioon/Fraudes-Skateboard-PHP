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
    }
?>
    <title>Fraude Skateboarding</title>
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
                <input type="text" id="caixa-de-pesquisa" class="animacao-de-caixa" placeholder="Está procurando algo?">
                <a href="#" class="lupa"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="caixa-de-login">
               <label for="botao-de-login"><i class="fa-solid fa-circle-user"></i></label>
               <input type="checkbox" id="botao-de-login">
               <ul class="cadastrar-logar-lista">
                <li class="nao-logado"><a href="login.php">Entrar</a></li>
                <li class="nao-logado"><a href="cadastro.php" >Cadastre-se</a></li>
                <li class="logado"><a href="perfil.php">Página do usuário</a></li>
                <li class="logado"><a href="logout.php">Sair</a></li>
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

    <main id="conteudo">
        <h1>Notícias bombásticas</h1>
        <section class=noticias>
            <div class="caixa-de-noticia"><img src="imagens/noticia 2.jpeg" alt="Skatista Kader Sylla sentado em seu skate"></div>
            <article>
                <h2>Kader Sylla anuncia sua saída da Vans</h2>
                <p>O profissional da Baker SkateBoard Kader Sylla anunciou sua saída de seu patrocinador Vans depois de dois anos na marca. Como presente de despedida, Sylla lançou sua última video part pela Vans filmado por Tristan Warren e editado por William Strobeck - Usando suas filmagens antigas em que usa o tênis da Vans, com uma mistura Halfcab, Slip-ons e mais. Assista sua video part thankyouvans abaixo </p>
                <a href="https://www.youtube.com/watch?v=zf_RsBtnILY" target="_blank"> Leia mais!</a>
            </article>
        </section>
        <section class=noticias>
            <div class="caixa-de-noticia"><img src="imagens/noticia 3.jpeg" alt="Skatista Milton Martinez saltando do telhado de um lava-rápido com um kickflip"></div>
            <article>
                <h2>Após se recuperar, Milton Martinez retorna ao lendário S.C.W e acerta um kickflip lendário</h2>
                <p>Milton Martinez retornou ao monstruoso Sunset Car Wash e acertou um perfeito NBD em meio a luz do dia nas cansativas ruas de Los Angeles, e depois disso anos depois ele retornou ao mesmo pico, quebrando seu pé no procedimento. Dois anos depois, ele retornou e mandou um kickflip insano, sendo escolhido como a manobra do ano de 2020 pela Thrasher</p>
                <a href="#"> Leia mais!</a>
            </article>
        </section>
        <section class=noticias>
            <div class="caixa-de-noticia"><img src="imagens/noticia 1.jpeg" alt="Kannan Dern vestido de coringa saltando por cima de um carro com o skate"></div>
            <article>
                <h2>Kanaan Dern vence o Halloween Hellbomb 2019 como Joker</h2>
                <p>No dia 26 de Outubro de 2019 foi realizado o evento da Thrasher Halloween Hellbomb em Long Beach na California - Durante o evento, o skatista profissional Kanaan Dern vestiu-se de coringa performando uma série de manobras incluindo um frontside ollie por cima de um carro, ganhando assim o evento realizado pela Thrasher.</p>
                <a href="https://www.youtube.com/watch?v=BEX8SEZGnrI" target="_blank"> Leia mais!</a>
            </article>
        </section>
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
    </main>

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