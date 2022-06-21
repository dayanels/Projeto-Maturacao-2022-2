<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . '/models/class/super_user.class.php';
require_once $path . '/models/db/conexao.php';


class DaoSuperUser
{


    public function login($matricula, $senha)
    {

        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT * FROM super_user WHERE matricula LIKE'$matricula' and senha LIKE md5('$senha')";

        $result = $conn->query($sql);



        if($result->num_rows == 1){
            $_SESSION['super_user'] = $matricula;
            $conn->close();
            echo "<script> window.location.href='index.php?p=admin'</script> ";
        }else {
            echo $conn->error;
        }       

    }
}
