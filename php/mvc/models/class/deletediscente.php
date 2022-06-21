<?php
    require_once "./discente.php";
    require_once "../dao/daodiscente.php";
    require_once "../db/conexao.php";
?>


<div class="container col-md-10 m-5 p-5 border border-primary rounded">
    <div class=" justify-content-center">
        <h2 class=" text-center text-bold">Teste de Delete de Discente:</h2>
    </div>
    <form method="post" class="mb-5 small" action="#" enctype="multipart/form-data" id="form_discente">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Matricula</label>
                <input type="text" class="form-control  form-control-sm" name="matricula" id="matricula" placeholder="matricula" value="" required>
            </div>            
        </div>
        <div class="text-center">
            <button class="btn btn-primary mt-5" type="submit" name="delete">Deletar</button>
        </div>
    </form>

</div>
<?php
    if(isset($_POST['delete'])){
        $con = new Conexao();
        $dao = new DaoDiscente();
        $discente = new Discente($con->getConnection());

        $dao->delete($discente);

         echo "<pre>";
         var_dump($discente); 
         echo "</pre>";
    }

?>