<h3 class="mt-3 text-primary">
    Fornecedor
</h3>

<div class="card shadow mt-3">

    <form method="post" class="m-3">

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">
                Nome
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="txtnome"
                       class="form-control"
                       placeholder="Nome do fornecedor">
            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">
                Cidade
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="txtcidade"
                       class="form-control"
                       placeholder="Cidade">
            </div>

        </div>

        <div class="form-group row">

            <div class="col-sm-10">

                <input type="submit"
                       name="btnsalvar"
                       class="btn btn-primary"
                       value="Cadastrar">

                <a href="?p=fornecedores"
                   class="btn btn-danger">
                   Cancelar
                </a>

            </div>

        </div>

    </form>

</div>

<?php

if(filter_input(INPUT_POST, 'btnsalvar')){

    $nome = filter_input(INPUT_POST, 'txtnome');
    $cidade = filter_input(INPUT_POST, 'txtcidade');

    include_once '../models/Fornecedor.php';

    $for = new Fornecedor();

    $for->setId(NULL);
    $for->setNome($nome);
    $for->setCidade($cidade);

    if($for->salvar()){

?>

<div class="alert alert-success mt-3">
    Fornecedor cadastrado com sucesso.
</div>

<meta http-equiv="refresh" content="1;URL=?p=fornecedores">

<?php

    } else {

?>

<div class="alert alert-danger mt-3">
    Erro ao cadastrar fornecedor.
</div>

<?php

    }

}

?>