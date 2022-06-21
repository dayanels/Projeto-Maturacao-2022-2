<?php

class Conexao{
    private $user = 'root';
    private $password = "dayane@706";
    private $db2 = 'db';
    private $db = 'mtr';
    public $conn;

    public function getConnection(){
        $conn = new mysqli($this->db2, $this->user, $this->password, $this->db);

        if($conn->connect_error){
            echo "deu ruim ao conectar ao banco: " . $conn->connect_error;
        }else{
            echo 'Conexão está a funfar .';
            return $conn;
        }
    }
}


// $conexao = new Conexao();
// $conexao->getConnection();
// /*phpinfo();*/
?>
