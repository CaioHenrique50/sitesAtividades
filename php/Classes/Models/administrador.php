<?php
class Administrador{
    
     private $id_Adm;
     private $nome_adm;
     private $email;
     private $senha;
    
     function getId_Adm() {
         return $this->id_Adm;
     }

     function getNome_adm() {
         return $this->nome_adm;
     }

     function getEmail() {
         return $this->email;
     }

     function getSenha() {
         return $this->senha;
     }

     function setId_Adm($id_Adm) {
         $this->id_Adm = $id_Adm;
     }

     function setNome_adm($nome_adm) {
         $this->nome_adm = $nome_adm;
     }

     function setEmail($email) {
         $this->email = $email;
     }

     function setSenha($senha) {
         $this->senha = $senha;
     }


    
}



?>

