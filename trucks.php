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
                <li class="semcontraste"><a href="javascript:void(0);" id="semcontraste"> CONTRASTE</a></li>
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

    <main id="conteudo" class="conteudo-vendas">
        <h1>Trucks</h1>
        <section id="shapes-a-venda">
            <div class="linha">
                <div class="caixa-de-venda">
                    <img src="imagens/truck 1.jpeg" alt="Truck e mesinha Independent cromado">
                    <article>
                        <div class="article-text">
                            <h3>Trucks Independent T 139mm</h3>
                            <p>R&#36; 699,99</p>
                        </div>
                        <a href="#">Compra</a>
                    </article>                                  
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/truck 2.jpeg" alt="Truck Independent preto com detalhes em brancos e mesinha dourada">
                    <article>
                        <div class="article-text">
                            <h3>Trucks Independent Pro Model Milton Martinez T 159mm</h3>
                            <p>R&#36; 999,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                              
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/truck 3.jpeg" alt="Truck Venture Prateado com mesinha preta e o desenho de um galho da arvore Sakura">
                    <article>
                        <div class="article-text">
                            <h3>Truck Venture Pro Model Yuto Horigome T 159mm</h3>
                            <p>R&#36; 1.004,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                            
                </div>
            </div>
            <div class="linha">
                <div class="caixa-de-venda">
                    <img src="imagens/truck 4.jpeg" alt="Truck Venture Branco com mesinha azul metalica e o desenho de uma fenix azul">
                    <article>
                        <div class="article-text">
                            <h3>Truck Venture T 129mm</h3>
                            <p>R&#36; 799,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                        
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/truck 5.jpeg" alt="Truck Thunder Prateado com Mesinha Preta e detalhe em vermelho com uma rosa estampada no truck">
                    <article>
                        <div class="article-text">
                            <h3>Truck Thunder Pro Model Ishod Wair T 149mm</h3>
                            <p>R&#36; 999,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                        
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/Trucks 6.jpeg" alt="Truck Thunder Cyano com mesinha prata Com um Pombo branco">
                    <article>
                        <div class="article-text">
                            <h3>Truck Thunder Pro Model Kylie Walker T 149mm</h3>
                            <p>R&#36; 899,99</p>
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
