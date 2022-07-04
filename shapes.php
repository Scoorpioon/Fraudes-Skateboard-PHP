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
    <header id="cabecalho">
        <div id="barra-de-acessibilidade">
            <ul id="atalhos">
                <li><a href="#conteudo" accesskey="1" title="Ir para o conteúdo">Ir para o conteúdo [1]</a></li>
                <li><a href="#menu" accesskey="2" title="Ir para o menu de navegação">Ir para o menu [2]</a></li>
                <li><a href="#rodape" accesskey="3" title="Ir para o rodapé">Ir para o rodapé [3]</a></li>
                <li id="pgaccess"><a href="acessibilidade.php" title="Ir para a página de acessibilidade">ACESSIBILIDADE</a></li>
                <li class="contraste"><a href="javascript:void(0);" id="contraste">SEM CONTRASTE</a></li>
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste">CONTRASTE</a></li>
                <li class="fonte"><a href="javascript:void(0); " id="aumenta">A +</a></li>
                <li class="fonte"><a href="javascript:void(0); " id="diminui">A -</a></li>
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
               <li class="nao-logado"><a href="login.php">Entrar</a></li>
                <li class="nao-logado"><a href="cadastro.php" >Cadastre-se</a></li>
                <li class="logado"><a href="perfil.php">Página do usuário</a></li>
                <li class="logado"><a href="logout.php">Sair</a></li>
               </ul>
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

    <main id="conteudo" class="conteudo-vendas">
            <h1>Shapes</h1>
            <section id="shapes-a-venda">
                <div class="linha">
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 1.png" alt="Shape Da Element Cromado Com o nome do Gabriel Fortunato e um Olho no Centro">
                        <article>
                            <div class="article-text">
                                <h3>Shape Element Moondust Gabriel Fortunato</h3>
                                <p>R&#36; 349,90</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                                  
                    </div>
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 2.jpeg" alt="Shape Element Preto, Branco e Vermelho com o Logo e o Nome da Element estampado">
                        <article>
                            <div class="article-text">
                                <h3>Shape Element Section 8.0</h3>
                                <p>R&#36; 329,90</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                              
                    </div>
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 3.jpeg" alt="Shape Preto e Azul com uma Coruja Branca de Olho Azul Estampada">
                        <article>
                            <div class="article-text">
                                <h3>Shape Street Owl Sports PRO 1</h3>
                                <p>R&#36; 269,90</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                            
                    </div>
                </div>
                <div class="linha">
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 4.jpeg" alt="Shape da Element Preto com um Esqueleto com 4 olhos andando de skate no Espaço">
                        <article>
                            <div class="article-text">
                                <h3>Shape Timber Skeleton 8</h3>
                                <p>R&#36; 369,95</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                        
                    </div>
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 5.jpeg" alt="Shape Santa Cruz Preto com uma mão azul com cogumelos e uma explosão laranja e amarela estampada ao fundo">
                        <article>
                            <div class="article-text">
                                <h3>Shape Santa Cruz Powerlyte Preto 8.0</h3>
                                <p>R&#36; 249,90</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                        
                    </div>
                    <div class="caixa-de-venda">
                        <img src="imagens/shape 6.jpeg" alt="Shape Santa Cruz estampada com um Leviathan Azul de Olhos Laranjas Agarrado em um arpão">
                        <article>
                            <div class="article-text">
                                <h3>Shape Santa Cruz Maple Asta Leviathan</h3>
                                <p>R&#36; 375,90</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                        
                    </div>
                </div>
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
