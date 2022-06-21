<?php
    require_once "./discente.php";
    require_once "../dao/daodiscente.php";
    require_once "../db/conexao.php";
?>


<div class="container col-md-10 m-5 p-5 border border-primary rounded">
    <div class=" justify-content-center">
        <h2 class=" text-center text-bold">Cadastro de Discente:</h2>
    </div>
    <form method="post" class="mb-5 small" action="#" enctype="multipart/form-data" id="form_discente">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Matricula</label>
                <input type="text" class="form-control  form-control-sm" name="matricula" id="matricula" placeholder="matricula" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control  form-control-sm" name="nome" id="nome" placeholder="Nome" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Curso</label>
                <input type="number" class="form-control  form-control-sm" name="curso" id="curso" placeholder="Curso" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Senha</label>
                <input type="password" class="form-control  form-control-sm" name="senha" id="senha" placeholder="senha" value="" required>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary mt-5" type="submit" name="cadastra">Cadastrar</button>
        </div>
    </form>

</div>
<?php
    if(isset($_POST['cadastra'])){
        $con = new Conexao();
        $dao = new DaoDiscente();
        $discente = new Discente($con->getConnection());
        $discente ->setMatricula($_POST['matricula']);
        $discente ->setNome($_POST['nome']);
        $discente->setSenha($_POST['senha']);
       
        var_dump($discente); 
        
        // var_dump($tele); 
       
        $dao->create($discente,$_POST['curso']);
         echo "<pre>";
         var_dump($discente); 
         echo "</pre>";
    }

?>