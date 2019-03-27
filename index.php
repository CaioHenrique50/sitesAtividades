<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
	<title>Home</title>
	<link rel=icon href=favicon.png sizes="16x16" type="image/png">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/efeitos.js"></script>
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
				<img src="icones/menu_bar.png" class = "menu_resp" alt = "menu para dispositivos moveis">
				
				<h1><a href="index.php" accesskey="i"><img src="icones/logo.png" class = "logo" alt = "Logo da fatec barueri"></a></h1>

				<ul class="aparece_menu">
					<li class = "aparece_sub_menu_acess">
						<ul class ="sub_menu_acess">
							<li class="contraste">Auto contraste</li>
							<li><a href="paginas/mapaSite.html">Mapa do site</a></li>
						</ul>
						<a href="index.php"><img src="imagens/menu img.jpg" alt="" class = "fatec"></a>
					</li>
					<section class = "menu_principal">
						<li class = "aparece_sub_menu_instituto">Institucional <p>&#9660;</p>
							<ul class ="sub_menu_instituto">
								<li><a href="https://siga.cps.sp.gov.br/fatec/login.aspx" target="blank"> Acesso dos docentes</a></li>
								<li><a href="http://www.biblioceeteps.com.br/" target="blank"> Biblioteca</a></li>
								<li><a href="paginas/galeria.html">Fotos</a> </li>
								<li><a href="paginas/historia.html">História</a> </li>
								<li><a href="paginas/secretaria.html">Secretária</a></li>
								<li><a href="https://www.vestibularfatec.com.br/home/" target="blank"> Vestibular</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_cursos" accesskey="c">Cursos <p>&#9660;</p>
							<ul class ="sub_menu_cursos">
								<li><a href = "paginas/cursos/comercio_exterior.html">Comercio exterior</a></li>
								<li><a href = "paginas/cursos/gestao_empresarial.html">Gestão empresarial</a></li>
								<li><a href = "paginas/cursos/gestao_ti.html">Gestão de TI</a></li>
								<li><a href = "paginas/cursos/logistica.html">Logistica</a></li>
								<li><a href = "paginas/cursos/transporte_terrestre.html">Trasporte terrestre</a></li>
								<li><a href = "paginas/cursos/eventos.html">Eventos</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_documentos"><a href="paginas/documentos.html"> Documentos </a><p>&#9660;</p></li>
						<li class = "aparece_sub_menu_alunos">Alunos <p>&#9660;</p>
							<ul class ="sub_menu_cursos_alunos">
								<li><a href="http://www.moodle.cpscetec.com.br/salavirtual/" target="blank"> Acesso a sala de  </br>aula EAD </a></li>
								<li><a href="https://siga.cps.sp.gov.br/aluno/login.aspx" target="blank">Siga</a></li>
							</ul>
						</li>
						<li class = "aparece_sub_menu_contatos"><a href="paginas/contato.html">Contato </a><p>&#9660;</p>
						</li>
					</section>
				</ul>
				
			</nav>
		</header>
		
		<section class="flexslider">
			<ul class="slides" id ="texto_slide">
				<li>
					<img src="imagens/index03.jpg" alt="">
					<section class="flex-caption">
						<p></p>
					</section>
				</li>
				<li>
					<img src="imagens/index02.jpg" alt="">
					<section class="flex-caption">
						<p>Infraestrutura ecológica</p>
					</section>
				</li>
				<li>
					<img src="imagens/index01.jpg" alt="">
					<section class="flex-caption">
						<p>Venha fazer parte</p>
					</section>
				</li>
			</ul>
		</section>
		<section class = "div_novidades">
			<h2 class = "teste">Novidades</h2>
			<p>Veja a baixo as nossas principais noticias que ocorrem na Fatec de Barueri.<br>
			clique na foto abaixo para visualizar a noticia completa e suas informações.
			</p>
		</section>

		<section class="flexslider">
			<ul class="slides">
				 <?php
	   		
						$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
				   		$query = mysqli_query($connect,"SELECT * FROM tbl_noticia ORDER BY id_noticia DESC LIMIT 5");
				   		while ($potagens_feitas = mysqli_fetch_array($query)) {

						?>
						
			
				
				<li>
					<img src="<?php echo $potagens_feitas['imagem']; ?>">
						<section class="flex-caption">
							<p class="previa_titulo"><a href="paginas/noticias.php?id=<?php echo $potagens_feitas['id_noticia'];?>"><?php echo $potagens_feitas['titulo']; ?></a></p>
							<p class= "noticia_slider">
								<?php
									$texto = utf8_encode($potagens_feitas['noticia']);
									$previa_post = substr($texto, 0,150);
									echo $previa_post;
								?>
							</p>
						</section>
				</li>
			<?php }?>
		
			</ul>
		</section>

		<footer>
			<ul class = "icone_redes">
				<li><a href="https://www.facebook.com/fatecbaruerioficial/" target="blank"><img src="icones/face.png"></a></li>
				<li><a href="https://www.youtube.com/user/fatecbar" target="blank"><img src="icones/youtube.png"></a></li>
				<li><a href="https://www.instagram.com/explore/locations/1029630361/"><img src="icones/instra.png"></a></li>
			</ul>
			<p>Desenvolvido por alunos da fatec de Carapicuiba
			<br>
			<a href="paginas/desenvolvedores.html">Clique aqui e saiba mais</a>

			</p>
		</footer>
	</body>
</html>