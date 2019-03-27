<?php
require_once ("../php/Classes/DAO/admDAO.php");
require_once ("../php/Classes/Models/administrador.php");
session_start();
$admDAO = new admDAO();
$usuario = new Administrador();


if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "login.php?erro=1";
		alert('Acesso não autorizado! Entre com um usuário válido');
    </script>
    <?php
} else {

?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
	<title>Postagens</title>
	<link rel=icon href=../favicon.png sizes="16x16" type="image/png">
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/adm.css">
	<script src="../js/jquery.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="../js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="../js/efeitos.js"></script>
	<script type="text/javascript" src = "../plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src = "../plugin/tinymce/init-tinymce.js"></script>
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
				
				<h1><a href="../index.php" accesskey="i"><img src="../icones/logo.png" class = "logo" alt = "Logo da fatec barueri"></a></h1>

				<ul class="aparece_menu">
					<li class = "aparece_sub_menu_acess">
						<ul class ="sub_menu_acess">
							<li class="contraste">Auto contraste</li>
							<li>Mapa do site</li>
						</ul>
						<a href="../index.html"><img src="../imagens/menu img.jpg" alt="" class = "fatec"></a>
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
		<section class = "separador"></section>

		<section class="foto_pessoa">
			
		</section>


		<section class = "usuario">
			<p>Olá</p>

			 <span class="sair"><a href="?acao=sair"> Sair</a></span>		
		</section>
		<section class="novo">
			<p>Novo usuário</p><a href="cad_user.php"><img src="../icones/mais.jpeg" class="mais_icon"></a>
		</section>
		<section class="novo">
			<p>Novo postagens</p><a href="administrador.php"><img src="../icones/mais.jpeg" class="mais_icon"></a>
		</section>
		
			<section class = "tudo_postagem">
				<h2>Postagens</h2>

				<?php

						$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
						$insert = mysqli_query($connect,"SELECT * FROM tbl_noticia order by id_noticia desc");
						while ($potagens_feitas = mysqli_fetch_array($insert)) {

					?>
					<section class="container_postagem">
						<h3><?php echo $potagens_feitas['titulo'] ?></h3>
						<span><a href="noticias.php?id=<?php echo $potagens_feitas['id_noticia'];?>">Visualizar</a></span>
						<span><a href="edit_perfil.php?id=<?php echo $potagens_feitas['id_noticia'];?>">Editar</a></span>
						<span><a href="../php/excluir_post.php?id=<?php echo $potagens_feitas['id_noticia'];?>">Excluir</a></span>
					</section>
					
				<?php }?>	
			
		</section>
		<footer>
			<ul class = "icone_redes">
				<li><img src="../icones/face.png"></li>
				<li><img src="../icones/youtube.png"></li>
				<li><img src="../icones/instra.png"></li>
			</ul>
			<p class="desenvolvedores">Desenvolvido por alunos da fatec de Carapicuiba</p>
			<a href="desenvolvedores.html" class="texto">Clique aqui e saiba mais</a>
		</footer>
	</body>
</html>
<?php
}
if (isset($_GET["acao"])) {

    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "login.php";
        </script>
        <?php
    }
}

?>