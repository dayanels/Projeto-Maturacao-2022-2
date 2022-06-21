<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . '/models/class/discente.class.php';
require_once $path . '/models/class/docente.class.php';
require_once $path . '/models/class/monitor.class.php';
require_once $path . '/models/dao/daosuperuser.php';

if (isset($_POST['login'])) {
    if ($_POST['tipo'] == 4) {
        $_POST['admin'] =  true;
    }
}

if (isset($_POST['admin'])) {
    $matricula = $_POST['matricula'];
    $senha =  $_POST['senha'];

    $dao = new DaoSuperUser();
    $dao->login($matricula, $senha);
}



// if (isset($_SESSION['super_user'])) {
//     $super_user = new Super_User();
//     $super_user = unserialize($_SESSION['super_user']);
// } else if (isset($_SESSION['discente'])) {
//     $discente = new Discente();
//     $discente = unserialize($_SESSION['discente']);
// } else if (isset($_SESSION['monitor'])) {
//     $monitor = new Monitor();
//     $monitor = unserialize($_SESSION['monitor']);
// } else if (isset($_SESSION['docente'])) {
//     $docente = new Docente();
//     $docente = unserialize($_SESSION['docente']);
// }
