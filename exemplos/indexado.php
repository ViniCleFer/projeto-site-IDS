<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IDS Grafites</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/styles.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,website">
	<meta name="description" content="Aço e Grafite">
	<meta charset="utf-8" />
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<?php 
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'sobre':
			echo '<target target="sobre" />';
			break;
		
		case 'servicos':
			echo '<target target="servicos" />';
			break;

		case 'qualidade':
			echo '<target target="qualidade" />';
			break;
	}
?>

<div class="sucesso"><i class="fa fa-check"></i> Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>image/ajax-loader.gif" />
</div><!--overlay-loading-->
	
<header>
	<div class="center">
		<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>image/logo.png"></a></div><!--logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>qualidade">Qualidade</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
				<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>qualidade">Qualidade</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
				<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
	<div class="clear"></div>
	</div><!--center-->
</header>

<div class="container-principal">
<?php 

	if (file_exists('page/'.$url.'.php')) {
		include('page/'.$url.'.php');
	}else{
		if($url != 'sobre' && $url != 'servicos' && $url != 'qualidade'){
			$pagina404 = true;
			include('page/404.php');
		}else{
			include('page/home.php');
		}
	}
?>
</div><!--container-principal-->

<!------------------------------------------------------------------------------------------------------------------------------------------------>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p><i class="fa fa-copyright"></i> Copyright - <a href="<?php echo INCLUDE_PATH; ?>http://www.facebook.com/fernandescvinicius" target="_blank">Vinícius Fernandes</a></p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>	
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>	
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php 
		if($url == 'contato'){
	?>	
	<?php } ?>
	<!--exemplo<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>

