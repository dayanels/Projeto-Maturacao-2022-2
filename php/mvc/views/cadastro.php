<div class="container my-5 border rounded border-success col-8 p-4">


    <h2 class="text-center py-4">Cadastro</h2>
    <form method="post" class="row g-2" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-md-6">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="number" class="form-control" id="matricula" name="matricula">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="col-12">
            <label for="documento" class="form-label">Comprovante de matrícula</label>
            <input class="form-control form-control-sm" id="documento" type="file" name="documento">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="tipo" id="professor">
                <label class="form-check-label" for="professor">
                    Professor
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="2" name="tipo" id="aluno" checked>
                <label class="form-check-label" for="aluno">
                    Aluno
                </label>
            </div>
        </div>
        <button type="submit" name="cadastrar" class="btn btn-success mt-3">Cadastrar</button>
    </form>
</div>