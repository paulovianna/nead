<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="e-tec,cafw,pronatec,agroindústria,informática,internet,técnicos,educação,distância,ead">
		<meta name="description" content="Núcleo de Educação a Distância - Colégio Agrícola de Frederico Westphalen - UFSM">
		<meta name="author" content="Paulo Henrique Vianna">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="<?php echo base_url(); ?>"/>
		<title>NEaD | <?php echo $area;?></title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
		<script src="scripts/bootstrap.min.js" type="text/javascript"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-43473645-3', 'ufsm.br');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div class="container">
			<div id="barra-brasil">
		    	<a href="http://brasil.gov.br" class="barra">Portal do Governo Brasileiro</a>
			</div>
			<div class="row">
				<?php if (isset($_GET['errorcode'])){?>
					<?php if ($_GET['errorcode'] == 3){?>
					<div class="alert alert-danger erro-login">Usuário ou senha incorretos.</div>
					<?php }?>
					<?php if ($_GET['errorcode'] == 4){?>
					<div class="alert alert-warning erro-login">Tempo de sessão expirado, realize novamente o login.</div>
					<?php }?>
				<?php }?>
			</div>
			<div class="row">
				<div class="logo col-sm-2 col-md-2">
					<a href="inicio"><img src="images/logo-ead-cafw.png" alt="Logotipo e-Tec Brasil" class="col-sm-12 col-md-12 logotipo hidden-xs hidden-sm"></a>
					<a href="inicio"><img src="images/logo-ead-cafw-xs.png" alt="Logotipo e-Tec Brasil" class="col-sm-12 col-md-12 logotipo visible-xs visible-sm"></a>
				</div>
				<div class="banner col-sm-10 col-md-10 hidden-xs hidden-sm">
					<div class="col-sm-3 col-md-3 moodle">
						<div class="row">
							<div class="col-sm-12 col-md-12 logo-moodle">
								<img src="images/logo-moodle.png" alt="logotipo moodle">
							</div>
						</div>
						<form action="http://moodle.cafw.ufsm.br/moodle/login/index.php" method="post" id="login">
							<div class="row form-group linha-moodle">
								<div class="col-sm-12 col-md-12 linha-form-moodle">
									<input type="text" id="username" name="username" class="form-control linha-form-moodle" placeholder="usuário">
								</div>
							</div>
							<div class="row form-group linha-moodle">
								<div class="col-sm-12 col-md-12 linha-form-moodle">
									<input type="password" id="password" name="password" class="form-control linha-form-moodle" placeholder="senha">
								</div>
							</div>
							<div class="row form-group linha-moodle">
								<div class="col-sm-12 col-md-12 linha-form-moodle">
									<button type="submit" class="btn btn-primary btn-lg col-sm-9 col-md-9 linha-form-moodle">Acessar</button>
									<button type="button" class="btn btn-primary dropdown-toggle btn-lg col-sm-3 col-md-3 linha-form-moodle esqueci-senha" data-toggle="dropdown"><span class="glyphicon glyphicon-question-sign"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="http://portal.ufsm.br/usuario/esqueciSenha.html" class="sub-esqueci-senha">Esqueci minha senha</a></li>
										<li class="divider"></li>
										<li><a href="http://portal.ufsm.br/usuario/index.html" class="sub-esqueci-senha">Alterar minha senha</a></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="pesquisa col-sm-2 col-md-2">
					<div class="row">
			  			<div class="col-lg-12">
			  				<div class="input-group">
					    		<div class="input-group">
  								  	<input type="text" class="form-control">
  									<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
								</div>
					    	</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="menu-horizontal col-sm-10 col-md-10 hidden-xs">
			  		<div class="col-md-3 col-sm-3 areas">Teste</div>
			  		<div class="col-md-3 col-sm-3 areas">Teste</div>
			  		<div class="col-md-3 col-sm-3 areas">Teste</div>
			  		<div class="col-md-3 col-sm-3 acessibilidade"></div>
			  	</div>
			</div>-->
			<div class="row visible-xs visible-sm form-moodle-mobile">
				<div class="col-sm-12 col-md-12">
					<div class="row">
						<div class="col-sm-12 col-md-12 logo-moodle">
							<img src="images/logo-moodle.png" alt="logotipo moodle">
						</div>
					</div>
					<form action="http://moodle.cafw.ufsm.br/moodle/login/index.php" method="post" id="login">
						<div class="row form-group linha-moodle">
							<div class="col-sm-12 col-md-12 linha-form-moodle">
								<input type="text" id="username" name="username" class="form-control linha-form-moodle" placeholder="usuário">
							</div>
						</div>
						<div class="row form-group linha-moodle">
							<div class="col-sm-12 col-md-12 linha-form-moodle">
								<input type="password" id="password" name="password" class="form-control linha-form-moodle" placeholder="senha">
							</div>
						</div>
						<div class="row form-group linha-moodle">
							<div class="col-sm-12 col-md-12 linha-form-moodle">
								<button type="submit" class="btn btn-primary btn-lg btn-block linha-form-moodle">Acessar</button>
								<a href="http://portal.ufsm.br/usuario/esqueciSenha.html"><button type="button" class="btn btn-primary btn-lg btn-block linha-form-moodle esqueci-senha-mobile">Recuperação de senha</button></a>
								<a href="http://portal.ufsm.br/usuario/index.html"><button type="button" class="btn btn-primary btn-lg btn-block linha-form-moodle esqueci-senha-mobile">Esqueci minha senha</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-md-2 menu">
					<nav class="navbar navbar-default menu" role="navigation">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
					    	<ul class="nav menu">
							  <li class="sessao"><a class="sessao">NEaD</a></li>
							  <li><a href="inicio"> Início</a></li>
							  <li><a href="sobre"> Sobre</a></li>
							  <li><a href="noticias"> Notícias</a></li>
							  <li><a href="#" disabled> Galeria de Fotos</a></li>
							  <li><a href="editais"> Editais</a></li>
							  <li><a href="contato"> Contato</a></li>
							  <li class="sessao"><a class="sessao">Cursos</a></li>
							  <li><a href="cursos/agroindustria"> Técnico em Agroindústria</a></li>
							  <li><a href="cursos/informatica"> Técnico em Informática para Internet</a></li>
							  <li class="sessao"><a class="sessao">Polos</a></li>
							  <li><a href="polos/constantina"> Constantina</a></li>
							  <li><a href="polos/palmeira"> Palmeira das Missões</a></li>
							  <li><a href="polos/planalto"> Planalto</a></li>
							  <li><a href="polos/ronda"> Ronda Alta</a></li>
							  <li><a href="polos/sagrada"> Sagrada Família</a></li>
							  <li><a href="polos/trindade"> Trindade do Sul</a></li>
							</ul>
					    </div>
					</nav>
				</div>
				<div class="col-sm-10 col-md-10 conteudo">
					<?php
						$this->load->view($conteudo);
					?>
					<div class="row hidden-xs">
						<div class="col-sm-12 col-md-12 rodape">
							<div class="col-sm-1 col-md-1 logos">
								<a href="http://www.ufsm.br" title="Universidade Federal de Santa Maria" target="_blank"><img src="images/logo-ufsm.png" class="logo-rodape" alt="Universidade Federal de Santa Maria"></a>
							</div>
							<div class="col-sm-1 col-md-1 logos">
								<a href="http://www.cafw.ufsm.br" title="Colégio Agrícola de Frederico Westphalen" target="_blank"><img src="images/logo-cafw.png" class="logo-rodape" alt="Colégio Agrícola de Frederico Westphalen"></a>
							</div>
							<div class="col-sm-1 col-md-1 logos">
								<a href="http://pronatec.mec.gov.br/" title="Pronatec" target="_blank"><img src="images/logo-pronatec.png" class="logo-rodape logo-pronatec" alt="Pronatec"></a>
							</div>
							<div class="col-sm-2 col-md-2 logos">
								<a href="http://redeetec.mec.gov.br/" title="Rede e-Tec" target="_blank"><img src="images/logo-etec.png" class="logo-rodape" alt="Rede e-Tec"></a>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<script src="scripts/barra.js" type="text/javascript"></script>
	</body>
</html>

