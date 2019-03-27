<?php
	
   	$titulo = strip_tags(trim($_POST['titulo']));
   	$imagem = strip_tags(trim($_POST['imagem']));
   	$subTitulo = strip_tags(trim($_POST['titulo2']));
	$conteudo = strip_tags(trim($_POST['conteudo']),ENT_QUOTES);
	
		$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
		$query = "insert into tbl_noticia(titulo,subtitulo,noticia,imagem) values ('$titulo','$subTitulo','$conteudo','$imagem')";
		$insert = mysqli_query($connect,$query);

		if($insert){
	          echo"<script language='javascript' type='text/javascript'>alert('Postagem efetuada com sucesso!');window.location.href='../paginas/postagens.php'</script>";
	        }else{
	        	echo "<script language='javascript' type='text/javascript'>alert('Ocorreu algum erro')</script>";
	        }
	     if(!$connect){
			echo mysqli_error();
		}
?>