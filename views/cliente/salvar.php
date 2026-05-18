<h3 class="mt-3 text-primary">
    Cliente
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
                       placeholder="Nome do cliente">
            </div>

        </div>

        <div class="form-group row">

            <label class="col-sm-2 col-form-label">
                Email
            </label>

            <div class="col-sm-10">
                <input type="email"
                       name="txtemail"
                       class="form-control"
                       placeholder="Email do cliente">
            </div>

        </div>

        <div class="form-group row">

            <div class="col-sm-10">

                <input type="submit"
                       name="btnsalvar"
                       class="btn btn-primary"
                       value="Cadastrar">

                <a href="?p=clientes"
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
    $email = filter_input(INPUT_POST, 'txtemail');

    include_once '../models/Cliente.php';

    $cli = new Cliente();

    $cli->setId(NULL);
    $cli->setNome($nome);
    $cli->setEmail($email);

    if($cli->salvar()){

?>

<div class="alert alert-success mt-3">
    Cliente cadastrado com sucesso.
</div>

<meta http-equiv="refresh" content="1;URL=?p=clientes">

<?php

    } else {

?>

<div class="alert alert-danger mt-3">
    Erro ao cadastrar cliente.
</div>

<?php

    }

}

?>