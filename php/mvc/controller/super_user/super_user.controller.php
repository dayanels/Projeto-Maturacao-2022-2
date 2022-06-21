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
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "change-docente":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
}
?>