<?php
$matricula = $_GET['id'];
$dao = new DaoDocente();
$class_info = $dao->getTeacher($matricula);
$ativo = $class_info['ativo'];

$dao->alterarStatusAtivoDoDocente($matricula, $ativo);
?>