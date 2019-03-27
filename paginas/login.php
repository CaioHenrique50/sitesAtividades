<?php
    require_once ("../php/Classes/DAO/admDAO.php");
    session_start();
    $admDAO = new admDAO();
    if (@$_SESSION['logado'] == 1) {
        ?>
        <script type="text/javascript">
            document.location.href = "postagens.php";
    		
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset="UTF-8">
	<title>Login</title>
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
		
		<section class = "usuario">
					
		</section>
		
		<section class="tudo_user">
			 <form method="post" name="formCadAdm">
                <br>
                <span>Usuario:</span>
                <input type="text" name="nome">
                <span>Senha:</span>
                <input type="password" name="senha">

                <input type="submit" name="Confirmar" value="Confirmar" id="enviar">
            </form>
		</section>
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

<?php

    if(isset($_POST['Confirmar'])){
    		if($admDAO->login($_POST['nome'],$_POST['senha'])){
                $_SESSION['logado'] =1;
    			echo '<script>document.location.href="postagens.php";</script>';
    		}else{
                $_SESSION['logado']=0;
    			echo '<script>alert("Usuário e/ou senha incorretos!");</script>';
    		}
    }

?>
