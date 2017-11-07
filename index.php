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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="descrition" content="Descrição do meu website">
	<meta name="keywords" content="palavras-chave,do,meu,website">
	<meta charset="utf-8" />
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left" ><a href="index.php">Dra. Jessica Sanches</a></div><!-- logo -->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!-- center -->
	</header>

	<?php 

		//faz uma verificação para ver se a url solicitada existe
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		//caso o arquivo com o nome solicitado existaele vai abrir
		if (file_exists('pages/'.$url.'.php')) {
			include('pages/'.$url.'.php');
		}else{

			$pagina404 = true;

			//caso nao exista vai abrir o arquivo 404.php
			include('pages/404.php');
		}
		
	 ?>

	<footer <?php if(isset($pagina404)  && $pagina404 ==  true) echo 'class="fixed"';?>>
		<div class="center">
			<p><a href="#">@EB Sistemas</a> - todos os direitos reservados</p>
		</div><!-- center -->
	</footer>

	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js">
		
	</script>

</body>
</html>