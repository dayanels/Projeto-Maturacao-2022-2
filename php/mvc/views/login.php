<div class="mt-5 mx-auto col-6 border rounded border-success p-4">
<?php
    /*
    if (isset($_POST['login'])) {
        $matricula = $_POST['matricula'];
        $senha =  $_POST['senha'];

        $dao = new DaoUsuario();
        $dao->login($matricula, $senha);
    }*/
    ?>
    <form method="post" action="#" class="my-4">
        <h2 class="text-center">Null Doubt - Login</h2>
        <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula</label>
            <input placeholder="Matrícula" required type="number" name="matricula" step="false" class="form-control border-success" id="matricula" aria-describedby="Matrícula">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input placeholder="Senha" name="senha" required type="password" class="form-control border-success" id="senha">
        </div>
        <div class="col-12">
        <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="tipo" id="aluno" checked>
                <label class="form-check-label" for="aluno">
                    Aluno
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="tipo" id="professor">
                <label class="form-check-label" for="professor">
                    Professor
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="4" name="tipo" id="admin" checked>
                <label class="form-check-label" for="admin">
                    Admin
                </label>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" name="login" class="btn btn-success d-inline">Acessar</button>
            <!--
            <a class="d-inline" href="?p=cadastro">Ainda não possui cadastro ?</a>
            -->
        </div>
    </form>

</div>