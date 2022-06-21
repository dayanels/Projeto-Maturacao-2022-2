<?php
session_start();
require_once "./views/header.php";
require_once './models/class/super_user.class.php';
require_once './models/class/monitor.class.php';
require_once './models/class/discente.class.php';
require_once './models/class/curso.class.php';
require_once './models/dao/daocurso.php';
require_once './models/dao/daodocente.php';
$path = $_SERVER['DOCUMENT_ROOT'];

//navegação
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'login';
}

//logout
if (isset($_POST['logout'])) {
    $page = 'logout';
}


switch ($page) {
    case "login":
        // incluir pag login front
        // incluir pag controller login
        require_once "./views/login.php";
        require_once $path . '/controller/login.controller.php';
        break;
    case "admin":
        if (isset($_SESSION['super_user'])) {
        
            require_once $path . '/controller/super_user/super_user.controller.php';

        }else{
           
            echo "<script> window.location.href='/'</script> ";
        }

    break;
    case "cadastro":
        require_once "./views/cadastro.php";
        /*
        if (isset($_POST['cadastrar'])) {
            $con = new Conexao();
            $usuario = new Usuario();

            $dao = new DaoUsuario();

            $usuario->setMatricula($_POST['matricula']);
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);
            $usuario->setDocumento($dao->uploadArquivo(($_FILES['documento'])));


            $usuario->setTipo($_POST['tipo']);

            $documento = $usuario->getDocumento();

            echo $documento;

            if (isset($documento) && $documento !== 0) {
                $dao->create($usuario);
            } else {
                require_once './views/erro.php';
            }
        }
        */
        break;
    case 'discente':
        if (isset($discente)) {
            // incluir  pág com front e lógica pra tratar
            // a navegação do usuario
            // pág de controller pro discente
        } else {
            return $page = 'login';
        }
        break;
    case 'docente':
        if (isset($docente)) {
            // incluir  pág com front e lógica pra tratar
            // a navegação do usuario
            // pág de controller pro docente
        } else {
            return $page = 'login';
        }
        break;
    case 'monitor':
        if (isset($monitor)) {
            // incluir  pág com front e lógica pra tratar
            // a navegação do usuario
            // pág de controller pro monitor
        } else {
            return $page = 'login';
        }
        break;
    case 'logout':
        
        session_unset();
        echo "<script> window.location.href='index.php?p=admin'</script>" ;

        break;
    default:
        echo $page;
        break;
}
?>

<?php
require_once "./views/footer.php";
?>