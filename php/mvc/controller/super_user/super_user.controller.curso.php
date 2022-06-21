<?php
$cod_Curso = $_GET['id'];
$dao = new DaoCurso();
$class_info = $dao->getCourse($cod_Curso);
$ativo = $class_info['ativo'];

$dao->alterarStatusAtivoDoCurso($cod_Curso, $ativo);
?>