<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Odontologia Sanches</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Indie+Flower:400" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
	<link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>icon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="descrition" content="Descrição do meu website">
	<meta name="keywords" content="palavras-chave,do,meu,website">
	<meta charset="utf-8" />
</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />

	<?php 
		//faz uma verificação para ver se a url solicitada existe
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}

	 ?>
	<header>
		<div class="center">
			<div class="logo left" ><a href="home">Dra. Jessica Sanches</a></div><!-- logo -->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!-- center -->
	</header>

	<div class="container-principal">

	<?php 
		//caso o arquivo com o nome solicitado existaele vai abrir
		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else{

			if ($url != 'sobre' && $url != 'servicos') {
				$pagina404 = true;
				//caso nao exista vai abrir o arquivo 404.php
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	 ?>

	</div><!-- container-principal -->

	<footer <?php if(isset($pagina404)  && $pagina404 ==  true) echo 'class="fixed"';?>>
		<div class="center">
			<p><a href="#">@EB Sistemas</a> - todos os direitos reservados</p>
		</div><!-- center -->
	</footer>

	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script  src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>


	<!-- if para o funcionamento do slide apenas para a página home -->
	 <?php 
		if ($url =='home' || $url == '') {
	 ?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script> 
	<?php } ?>

	<?php 
		if ($url == 'contato') {
	 ?>
		
	<?php } ?>

	<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>

</body>
</html>