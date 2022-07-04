<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!--Metadados-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Skate, SkateBoard, loja, loja de skate, skatista, shape, rodinhas, truck de skate">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="icon" href="imagens/icone-fraude.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/e2b90cace3.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="JS/contrast.js"></script>
	<script src="JS/font.js"></script>
	<script src="JS/cep.js"></script>
	<title>Fraudes Skateboarding</title>
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
                <input type="text" id="caixa-de-pesquisa" placeholder="Está procurando algo cria?" class="animacao-de-caixa">
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
	</header>
		<main id="conteudo" class="conteudo-fale-conosco">
			<h1>FALE CONOSCO</h1>
			<form name="contato" id="contato" method="post">
				<fieldset>
					<legend>Dados pessoais</legend>
					<label class="required" for="nome">Nome</label><br>
					<input type="text" name="nome" id="nome" placeholder="Nome Completo..." required><br>
					<label class="required" for="data">Data de Nascimento</label><br>
					<input type="date" name="data" id="data" required><br>
					<label class="required" for="cpf">CPF</label><br>
					<input type="text" name="cpf" id="cpf" placeholder="123.456.789-99" required><br>
					<label for="telefone">Telefone</label><br>
					<input type="text" name="telefone" id="telefone" placeholder="(99) 12345-6789"><br>
				</fieldset>
				<fieldset>
					<legend>Dados de endereço</legend>
					<label class="required" for="cep">CEP</label><br>
					<input type="text" name="cep" id="cep" placeholder="99999-999" required><br>
					<label for="rua">Rua/Av</label><br>
					<input type="text" name="rua" id="rua" placeholder="Rua/avenida"><br>
					<label class="required" for="numero">Número</label><br>
					<input type="text" name="numero" id="numero" placeholder="Número da casa" required><br>
					<label for="complemento">Complemento</label><br>
					<input type="text" name="complemento" id="complemento" placeholder="Apartamento/casa..."><br>
					<label for="bairro">Bairro</label><br>
					<input type="text" name="bairro" id="bairro" placeholder="Bairro..."><br>
					<label for="cidade">Cidade</label><br>
					<input type="text" name="cidade" id="cidade" placeholder="Cidade..."><br>
					<label for="estado">Estado</label><br>
					<input type="text" name="estado" id="estado" placeholder="Estado..."><br>
				</fieldset>
				<fieldset>
					<legend>Dados da mensagem</legend>
					<label class="required" for="assunto">Assunto</label><br>
					<select name="assunto" id="assunto" required>
						<option value="" selected disabled>Selecione uma opção</option>
						<option value="reclamação">Reclamação</option>
						<option value="sugestão">Sugestão</option>
						<option value="elogio">Elogio</option>
						<option value="outro">Outro</option>
					</select><br>
					<textarea name="mensagem" id="mensagem" rows="10" cols="40" placeholder="Digite seu texto aqui..." required></textarea>
				</fieldset>
				<div class="buttons">
					<input type="submit" name="enviar" id="Enviar" value="Enviar">
					<input type="reset" name="limpar" id="Limpar" value="Limpar">
				</div>
			</form>
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