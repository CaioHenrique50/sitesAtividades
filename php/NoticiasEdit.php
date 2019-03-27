<?php
	$id = $_GET['id'];
   	$titulo = strip_tags(trim($_POST['titulo']));
   	$imagem = strip_tags(trim($_POST['imagem']));
   	$subTitulo = strip_tags(trim($_POST['titulo2']));
	$conteudo = strip_tags(trim($_POST['conteudo']),ENT_QUOTES);
	
		$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
		$query = "update tbl_noticia set titulo = '$titulo', subtitulo = '$subTitulo' ,noticia = '$conteudo',imagem = '$imagem' where id_noticia = '$id'";
		$update = mysqli_query($connect,$query);

		if($update){
	          echo"<script language='javascript' type='text/javascript'>alert('Postagem atualizada com sucesso!');window.location.href='../paginas/postagens.php'</script>";
	        }else{
	        	echo "<script language='javascript' type='text/javascript'>alert('Ocorreu algum erro')</script>";
	        }
	     if(!$connect){
			echo mysqli_error();
		}
?>