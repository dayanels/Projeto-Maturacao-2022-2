<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . '/models/class/curso.class.php';
require_once $path . '/models/db/conexao.php';

class DaoCurso
{

    public function create($discente, $cod_Curso){
        $con = new Conexao();
        $curso = new Curso();
        $con = $con->getConnection();
        if($curso->getCodCurso() == $cod_Curso){
        $sql = "INSERT INTO discente(matricula, nome, curso, senha, fk_Curso, ativo) VALUES(?,?,?,MD5(?),?,?);";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssii",$matricula,$nome,$curso,$senha,$fk_curso,$ativo);
        $matricula = $discente->getMatricula();
        $nome = $discente->getNome();
        $senha = $discente->getSenha();
        $fk_curso = $curso->getCodCurso();
        $ativo = $discente->getAtivo();
        echo"matricula: $matricula, nome: $nome e curso: $curso";
        echo"linha 20 ate aqui foi\n";
        echo"Dados inseridos"; 
        $stmt->execute();
        }
        }

    public function getAllActiveCoursers()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT * FROM `curso` WHERE curso.ativo = 1";

        $result = $conn->query($sql);

        $courses = null;

        while ($data = $result->fetch_object()) {
            $courses[] = $data;
        }

        return $courses;
    }

    public function getAllInactiveCoursers()
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT * FROM `curso` WHERE curso.ativo = 0";

        $result = $conn->query($sql);

        $courses = null;

        while ($data = $result->fetch_object()) {
            $courses[] = $data;
        }

        return $courses;
    }

    public function alterarStatusAtivoDoCurso($cod_Curso, $ativo)
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();
        echo $ativo;
        if ($ativo == 1) {
            $ativo = 0;
        } else {
            $ativo = 1;
        }

        $sql = "UPDATE `curso` SET curso.ativo = $ativo WHERE curso.cod_Curso = $cod_Curso";
        // UPDATE `mtr`.`curso` SET `ativo` = '0' WHERE (`cod_Curso` = '2');

        if ($conn->query($sql)) {
            echo "<script>alert('O curso foi reajustado com sucesso, gg.')</script>";
            echo "<script> window.location.href='?p=admin'</script> ";
        } else {
            echo '
                <div class="fixed-top mt-2 mx-5">
                <div class="position-relative col-4">
                <div class="alert alert-danger  position-absolute top-0 start-0 " role="alert">
                Ocorreu um erro ao reajustar o curso, perdemo.
                <br>
                <span class="badge bg-primary">contato: lemos.dayane.d@gmail.com</span>
              </div>
              <a href="/" name="voltar" class="button btn  btn-outline-primary d-block w-100 mt-3">Voltar</a>
            </div>
              </div>
              </div>';
        }
    }

    public function getCourse($cod_Curso)
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "SELECT cod_Curso, ativo, nome FROM curso WHERE cod_Curso = " . $cod_Curso;

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
