<?php
date_default_timezone_set('America/Sao_Paulo');

class Conexao{
    
    private $usuario;
    private $pass;
    private $host;
    private $banco;
    private $file;
    public $pdo;
    
    public function Conectar(){
        try {
            $this->user = "root";
            $this->pass = "";
            $this->host ="localhost"; /* trocar quando for para o servidor remoto*/
            $this->banco = "fatecbarueri";
            
            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
            $this->file = "mysql:host=" . $this->host . ";dbname=" . $this->banco;
            $this->pdo = new PDO($this->file, $this->user, $this->pass, $parametros);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);    
            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);    
            if (!$this->pdo) {
                    echo "Erro na conexão";
                }
                return $this->pdo;
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
?>