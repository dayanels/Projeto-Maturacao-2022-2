<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . '/models/class/docente.class.php';
require_once $path . '/models/db/conexao.php';

class DaoDocente
{

    public function createDocente($docente)
    {
        $con = new Conexao();

        $con = $con->getConnection();

        $sql = "INSERT INTO docente(nome, senha, matricula, ativo) VALUES(?,MD5(?),?,?);";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssi",  $nome, $senha, $matricula, $ativo);
        $matricula = $docente->getMatricula();
        $nome = $docente->getNome();
        $senha = $docente->getSenha();
        $ativo = $docente->getAtivo();
        $stmt->execute();
    }

    public function getAllActiveTeachers()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT * FROM `docente` WHERE docente.ativo = 1";

        $result = $conn->query($sql);

        $teachers = null;

        while ($data = $result->fetch_object()) {
            $teachers[] = $data;
        }

        return $teachers;
    }

    public function getAllInactiveTeachers()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT * FROM `docente` WHERE docente.ativo = 0";

        $result = $conn->query($sql);

        $teachers = null;

        while ($data = $result->fetch_object()) {
            $teachers[] = $data;
        }

        return $teachers;
    }

    public function alterarStatusAtivoDoDocente($matricula, $ativo)
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();
        echo $ativo;
        if ($ativo == 1) {
            $ativo = 0;
        } else {
            $ativo = 1;
        }

        $sql = "UPDATE `docente` SET docente.ativo = $ativo WHERE docente.matricula = $matricula";
        //echo $sql;
        if ($conn->query($sql)) {
            echo "<script>alert('O docente foi reajustado com sucesso, gg.')</script>";
            echo "<script> window.location.href='?p=admin'</script> ";
        } else {
            echo '
                <div class="fixed-top mt-2 mx-5">
                <div class="position-relative col-4">
                <div class="alert alert-danger  position-absolute top-0 start-0 " role="alert">
                Ocorreu um erro ao reajustar o docente, perdemo.
                <br>
                <span class="badge bg-primary">contato: lemos.dayane.d@gmail.com</span>
              </div>
              <a href="/" name="voltar" class="button btn  btn-outline-primary d-block w-100 mt-3">Voltar</a>
            </div>
              </div>
              </div>';
        }
    }

    public function getTeacher($matricula)
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT matricula, ativo, nome FROM docente WHERE matricula = " . $matricula;

        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            $conn->close();
            return $row;
        } else {
            echo $conn->error;
        }
    }
}
