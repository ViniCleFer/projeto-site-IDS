<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IDS Grafites</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/all.css"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,520,600,700" rel="stylesheet">
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
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
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
	<section class="rodape">
		<div class="center">
			<div class="endereco w33 left">
				<a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>image/logo.png"></a><!--Logo IDS-->
				<h2 class="title"><i class="fa fa-map-marker" aria-hidden="true"></i> Endereço</h2>
				<p>Rua do Mar Paulista, 965, Balneario Mar Paulista - São Paulo - CEP:04464-190</p><!--Endereço-->
			</div><!--w33--><!--Logo IDS + Endereço-->
			<div class="midias w33 left">
				<h2 class="title">Siga nossas redes sociais</h2>
					<a href="<?php echo INCLUDE_PATH; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a><!--Facebbok-->
					<a href="<?php echo INCLUDE_PATH; ?>" target="_blank"><i class="fa fa-instagram"></i></a><!--Instagram-->
					<a href="<?php echo INCLUDE_PATH; ?>" target="_blank"><i class="fa fa-youtube"></i></a><!--Youtube-->
					<a href="<?php echo INCLUDE_PATH; ?>" target="_blank"><i class="fa fa-twitter"></i></a><!--Twitter-->
			</div><!--w33--><!--Mídias-->
			<div class="w33 left">
				<div class="contato">
					<h2 class="title">Atendimento ao cliente</h2>
					<h3 class="title"><i class="fa fa-envelope"></i> E-mail</h3>
					<p>contato@ids.com.br</p>
					<h3 class="title"><i class="fa fa-whatsapp"></i> Celular/WhatsApp</h3>
					<p>(11) 96810-3600</p>
				</div><!--Contato-->
			</div><!--w33-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--rodape-->
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p><i class="fas fa-copyright"></i> Copyright - <a href="<?php echo INCLUDE_PATH; ?>http://www.facebook.com/fernandescvinicius" target="_blank">Vinícius Fernandes</a></p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>	
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>	
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php 
		if($url == 'contato'){
	?>	
	<?php } ?>
	<!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>l-->
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>


