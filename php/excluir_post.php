<?php
	
   		$id = $_GET['id'];
	
		$connect = mysqli_connect('127.0.0.1','root','','fatecbarueri');
		$query = "DELETE FROM tbl_noticia WHERE id_noticia = '$id'";
		$delete = mysqli_query($connect,$query);

		if($delete){
	          echo"<script language='javascript' type='text/javascript'>alert('Postagem excluida com sucesso!');window.location.href='../paginas/postagens.php'</script>";
	        }else{
	        	echo "<script language='javascript' type='text/javascript'>alert('Ocorreu algum erro')</script>";
	        }
	     if(!$connect){
			echo mysqli_error();
		}
?>