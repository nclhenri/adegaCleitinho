<?php
if (isset($_POST['nomeFornecedor'])) {
    $nomeFornecedor = $_POST['nomeFornecedor'];
    $telefoneFornecedor = $_POST['telefoneFornecedor'];
    $enderecoFornecedor = $_POST['enderecoFornecedor'];
    $cepFornecedor = $_POST['cepFornecedor'];
    $cnpjFornecedor = $_POST['cnpjFornecedor'];
    $statusFornecedor = $_POST['statusFornecedor'];

    require_once('class/fornecedor.php');

    $fornecedor = new fornecedorclass();

    $fornecedor->nomeFornecedor = $nomeFornecedor;
    $fornecedor->telefoneFornecedor = $telefoneFornecedor;
    $fornecedor->enderecoFornecedor = $enderecoFornecedor;
    $fornecedor->cepFornecedor = $cepFornecedor;
    $fornecedor->cnpjFornecedor = $cnpjFornecedor;
    $fornecedor->statusFornecedor = $statusFornecedor;

    $fornecedor->Cadastrar();
}

?>

<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Funcionario</h3>
        </div>

        <form action="index.php?p=fornecedores&e=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-body">

                <div class="row">
                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeFornecedor" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeFornecedor" name="nomeFornecedor" required="" placeholder="Nome:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefoneFornecedor" class="col-sm-2 col-form-label">Telefone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telefoneFornecedor" name="telefoneFornecedor" required="" placeholder="Telefone:">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="enderecoFornecedor" class="col-sm-2 col-form-label">Endereço:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="enderecoFornecedor" name="enderecoFornecedor" required="" placeholder="Endereço:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cepFornecedor" class="col-sm-2 col-form-label">CEP:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cepFornecedor" name="cepFornecedor" required="" placeholder="CEP:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnpjFornecedor" class="col-sm-2 col-form-label">CNPJ:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cnpjFornecedor" name="cnpjFornecedor" required="" placeholder="CNPJ:">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="statusFornecedor">
                                    <option selected=""> Selecione o Status</option>
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVADO">DESATIVADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Cadastrar Funcionario</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>