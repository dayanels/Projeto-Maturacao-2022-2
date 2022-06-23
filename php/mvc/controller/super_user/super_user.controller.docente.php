<?php
function alternaStatusDocente()
{
    $matricula = $_GET['id'];
    $dao = new DaoDocente();
    $class_info = $dao->getTeacher($matricula);
    $ativo = $class_info['ativo'];

    $dao->alterarStatusAtivoDoDocente($matricula, $ativo);
}


//if (isset($_POST['adicionar_docente'])) {


    function novoDocente()
    {
        $con = new Conexao();
        $dao = new DaoDocente();
        $docente = new Docente($con->getConnection());
        $docente->setMatricula($_POST['matricula_docente']);
        $docente->setNome($_POST['nome_docente']);
        $docente->setSenha($_POST['senha_docente']);
        $docente->setAtivo(1);

        // var_dump($tele); 

        $dao->createDocente($docente);

        // echo ''
    }

//    novoDocente();
//}

?>
