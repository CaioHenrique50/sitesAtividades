<?php
require_once './conexao.php';

class noticiaDAO{

    function __contruct(){
        $this->con= new Conexao();
        $this->pdo = $this->con->Conectar();
    }

    function cadastrarNoticia(Noticia $not) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO tbl_noticia VALUES('',:titulo,:noticia,:dt_publicacao,:autor,:id_adm");
            $para = array(
                ":titulo"=>$titulo->getTitulo(),
                ":noticia"=>$noticia->getNoticia(),
                ":dt_publicacao"=>$dt_publicacao->getdate(),
                ":autor"=>$autor->getAutor(),
                ":id_adm"=>$id_adm->getAdm()
            );
            
            return $stmt->execute($para);
        } catch (PDOException $ex) {
            echo "Erro 01 cadastrar:{$ex->getMessage()}";
        }
    }
}

?>