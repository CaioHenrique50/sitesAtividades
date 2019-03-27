<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
	<title>Noticias</title>
	<link rel=icon href=../favicon.png sizes="16x16" type="image/png">
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="../js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="../js/efeitos.js"></script>
	<script type="text/javascript" >
		  $(window).load(function() {
		    $('.flexslider').flexslider({
		    	touch: true,
		    	pauseOnAction: false,
		    	pauseOnHover: false,
		    });
		  });
	</script>
	</head>
	<body>
		<header>
			<nav class = "menu">
				<img src="../icones/menu_bar.png" class = "menu_resp" alt = "menu para dispositivos moveis">
				
				<h1><a href="../index.php" accesskey="i"><img src="../icones/logo.png" class = "logo" alt = "Logo da fatec barueri"></a></h1>

				<ul class="aparece_menu">
					<li class = "aparece_sub_menu_acess">
						<ul class ="sub_menu_acess">
							<li class="contraste">Auto contraste</li>
							<li><a href = "mapaSite.html">Mapa do site</a></li>
						</ul>
						<a href="../index.php"><img src="../imagens/menu img.jpg" alt="" class = "fatec"></a>
					</li>
					<section class = "menu_principal">
						<li class = "aparece_sub_menu_instituto">Institucional <p>&#9660;</p>
							<ul class ="sub_menu_instituto">
								<li><a href="https://siga.cps.sp.gov.br/fatec/login.aspx" target="blank"> Acesso dos docentes</a></li>
								<li><a href="http://www.biblioceeteps.com.br/" target="blank"> Biblioteca</a></li>
								<li><a href="galeria.html">Fotos</a> </li>
								<li><a href="historia.html">História</a> </li>
								<li><a href="secretaria.html">Secretária</a></li>
								<li><a href="https://www.vestibularfatec.com.br/home/" target="blank"> Vestibular</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_cursos" accesskey="c">Cursos <p>&#9660;</p>
							<ul class ="sub_menu_cursos">
								<li><a href = "cursos/comercio_exterior.html">Comercio exterior</a></li>
								<li><a href = "cursos/gestao_empresarial.html">Gestão empresarial</a></li>
								<li><a href = "cursos/gestao_ti.html">Gestão de TI</a></li>
								<li><a href = "cursos/logistica.html">Logistica</a></li>
								<li><a href = "cursos/transporte_terrestre.html">Trasporte terrestre</a></li>
								<li><a href = "cursos/eventos.html">Eventos</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_documentos"><a href="documentos.html"> Documentos </a><p>&#9660;</p></li>
						<li class = "aparece_sub_menu_alunos">Alunos <p>&#9660;</p>
							<ul class ="sub_menu_cursos_alunos">
								<li><a href="http://www.moodle.cpscetec.com.br/salavirtual/" target="blank"> Acesso a sala de  </br>aula EAD </a></li>
								<li><a href="https://siga.cps.sp.gov.br/aluno/login.aspx" target="blank">Siga</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_contatos"><a href="contato.html">Contato </a><p>&#9660;</p>
						</li>
					</section>
				</ul>
				
			</nav>
		</header>
		<?php
			$id = $_GET['id'];
			$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
			$insert = mysqli_query($connect,"SELECT * FROM tbl_noticia WHERE id_noticia = '$id' ");
			while ($potagens_feitas = mysqli_fetch_array($insert)) {

			?>

			<section class="imagem_titulo">
				<img src="<?php echo $potagens_feitas['imagem']; ?>">
			</section>
			<section class = "pag_noticias">
				<h2 class="teste"><?php echo $potagens_feitas['titulo']; ?></h2>
				<h3><?php echo $potagens_feitas['subtitulo']; ?></h3>
				<p>
					<?php echo $potagens_feitas['noticia']; ?>
				</p>
			</section>
				
		<?php }?>	
			
		
		<footer>
			<ul class = "icone_redes">
				<li><a href="https://www.facebook.com/fatecbaruerioficial/" target="blank"><img src="../icones/face.png"></a></li>
				<li><a href="https://www.youtube.com/user/fatecbar" target="blank"><img src="../icones/youtube.png"></a></li>
				<li><a href="https://www.instagram.com/explore/locations/1029630361/" target="blank"><img src="../icones/instra.png"></a></li>
			</ul>
			<p>Desenvolvido por alunos da fatec de Carapicuiba
			<br>
			<a href="desenvolvedores.html">Clique aqui e saiba mais</a>

			</p>
		</footer>
	</body>
</html>