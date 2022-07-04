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
        <h1>Rodas</h1>
        <section id="shapes-a-venda">
            <div class="linha">
                <div class="caixa-de-venda">
                    <img src="imagens/roda 1.jpeg" alt="Roda Spitfire Branca com detalhes em Preto e Amarelo e o Logo da Spitfire em Amarelo">
                    <article>
                        <div class="article-text">
                            <h3>Rodas Spitfire Formula Four 54mm</h3>
                            <p>R&#36; 429,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                                  
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/roda 2.jpeg" alt="Roda Preta da Bones com Detalhes em Vermelho com o nome da Bones">
                    <article>
                        <div class="article-text">
                            <h3>Rodas Bones 52mm</h3>
                            <p>R&#36; 249,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                              
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/roda 3.jpeg" alt="Roda Branca da Bones com Detalhes em Azul e Preto.">
                    <article>
                        <div class="article-text">
                            <h3>Rodas Bones Formula 05 53mm</h3>
                            <p>R&#36; 399,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                            
                </div>
            </div>
            <div class="linha">
                <div class="caixa-de-venda">
                    <img src="imagens/roda 4.jpeg" alt="Roda Branca da Bones com o nome do Steve Caballero em preto e com Detalhes em Preto e um dragão Dourado com Detalhes em Vermelho">
                        <article>
                            <div class="article-text">
                                <h3>Rodas Bones Pro Model 50mm</h3>
                                <p>R&#36; 499,99</p>
                            </div>
                            <a href="#">Comprar</a>
                        </article>                     
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/roda 5.jpeg" alt="Roda Roxa da Bones com Detalhes em Branco">
                    <article>
                        <div class="article-text">
                            <h3>Rodas Bones Pro Model 54mm</h3>
                            <p>R&#36; 499,99</p>
                        </div>
                        <a href="#">Comprar</a>
                    </article>                        
                </div>
                <div class="caixa-de-venda">
                    <img src="imagens/roda 6.jpeg" alt="Roda Branca da Bones Com o nome da Leticia Bufoni e a Bandeira do Brasil e detalhes em Preto">
                    <article>
                        <div class="article-text">
                            <h3>Rodas Bones Pro Model T 52mm</h3>
                            <p>R&#36; 519,99</p>
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
