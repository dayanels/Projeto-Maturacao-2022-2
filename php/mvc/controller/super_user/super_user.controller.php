<?php
if (isset($_SESSION["super_user"])) {

    if (isset($_GET["adm"])) {
        $admin = $_GET["adm"];
    } else {
        $admin = "home";
    }
} else {
    echo "<script> window.location.href='/'</script> ";
}

if (isset($_POST['adicionar_docente'])) {
    $admin = "new-docente";
}

if (isset($_POST['adicionar_curso'])) {
    $admin = "new-curso";
}

switch ($admin) {
    case "home":
        require_once $path . '/views/super_user/header.php';
        //echo'entrou no home';
        require_once $path . '/views/super_user/footer_super_user.php';
        //require_once "admin.home.php";
        break;
    case "change-curso":
        //echo'entrou no nem sei';
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.curso.php';
        alternaStatusCurso();
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "new-curso":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.curso.php';
        //echo 'entrou no case new-curso';
        if (isset($_POST['codigo_curso'])) {
            //echo $_POST['matricula_docente'];
            novoCurso();
        }
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "change-docente":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        alternaStatusDocente();
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "new-docente":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        if (isset($_POST['matricula_docente'])) {
            //echo $_POST['matricula_docente'];
            novoDocente();
        }
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
}
