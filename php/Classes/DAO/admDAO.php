<?php

require_once 'conexao.php';

class admDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Conectar();
    }

    function cadastrar(Administrador $adm) {

        try {
            $stmt = $this->pdo->prepare("INSERT INTO tbl_adm VALUES('',:nome_adm,:email,:senha)");
            $para = array(
                ":nome_adm" => $adm->getNome_adm(),
                ":email" => $adm->getEmail(),
                ":senha" =>md5($adm->getSenha($senha))

            );
            return $stmt->execute($para);

        } catch (PDOException $ex) {
            echo "Erro 01 cadastrar:{$ex->getMessage()}";
        }
    }

    function consultarEmail($email){
        try{
            $stmt= $this->pdo->prepare("SELECT * FROM tbl_adm WHERE email = :email");
            $para = array(":email"=> $email);
            $stmt->execute($para);

            if($stmt->rowCount() > 0){
                $consulta = $stmt-> fetch(PDO::FETCH_ASSOC);
                return $consulta['id_Adm']; 
            }else{
                return "";
            }
        }catch (PDOException $ex) {
            echo "Erro 02:{$ex->getMessage()}";
        }
    }

    function login($email,$senha){
        try{
            $stmt= $this->pdo->prepare("SELECT * FROM tbl_adm WHERE email = :email AND senha = :senha");
            $para = array(":email"=> $email,
                          ":senha"=> substr(md5($senha),0,15));
            $stmt->execute($para);
            echo substr(md5($senha),0,15);
              foreach ($para as $stringArray)
              {
                $stringArray = $stringArray.$stringArray;
              }
            
            if($stmt->rowCount() > 0){
               
                $consulta = $stmt-> fetch(PDO::FETCH_ASSOC);
                return $consulta['id_Adm']; 
            }else{

                return "";
                echo "<script>document.location.href='postagens.php';</script>";
            }
        }catch (PDOException $ex) {
            echo "Erro 03:{$ex->getMessage()}";
            echo "<script>document.location.href='postagens.php';</script>";
        }
    }

}       