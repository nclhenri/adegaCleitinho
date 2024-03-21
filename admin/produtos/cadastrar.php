<?php
if (isset($_POST['marcaProduto'])) {
    $marcaProduto = $_POST['marcaProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $validadeProduto = $_POST['validadeProduto'];
    $alcoolicoProduto = $_POST['alcoolicoProduto'];
    $quantidadeProduto = $_POST['quantidadeProduto'];
    $statusProduto = $_POST['statusProduto'];
    $idFonecedor = $_POST['idFonecedor'];

    require_once('class/produtos.php');

    $produto = new ProdutoClass();


    $produto->marcaProduto = $marcaProduto;
    $produto->nomeProduto = $nomeProduto;
    $produto->validadeProduto = $validadeProduto;
    $produto->alcoolicoProduto = $alcoolicoProduto;
    $produto->quantidadeProduto = $quantidadeProduto;
    $produto->statusProduto = $statusProduto;
    $produto->idFonecedor = $idFonecedor;
    //echo($fornecedor->idFonecedor);


    $produto->Cadastrar();
}
?>


<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Produto</h3>
        </div>

        <form action="index.php?p=produtos&w=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-body">

                <div class="row">

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="marcaProduto" class="col-sm-2 col-form-label">Marca:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="marcaProduto" name="marcaProduto" required placeholder="Marca:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" required placeholder="Nome:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validadeProduto" class="col-sm-2 col-form-label">Validade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validadeProduto" name="validadeProduto" required placeholder="Validade:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alcoolicoProduto" class="col-sm-2 col-form-label">O produto é alcoólico?:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alcoolicoProduto" name="alcoolicoProduto" required placeholder="Digite S para sim e N para não">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantidadeProduto" class="col-sm-2 col-form-label">Quantidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="quantidadeProduto" name="quantidadeProduto" required placeholder="Quantos produtos você quer cadastrar?">
                            </div>
                        </div>

                
                        <div class="row">
                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="statusProduto" id="statusProduto">
                                    <option>Status</option> 
                                    <option value="ATIVO">ATIVO</option>
                                    <option value="DESATIVO">DESATIVO</option>
                                 
                                </select>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="idFonecedor">
                                    <option>Fornecedores</option>
                                    <option value="1">julio</option>
                                    <option value="2">julianoo</option>
                                    <option value="3">juliana</option>
                                    <option value="4">juliana silva</option>
                                    <option value="5">luisa</option>
                                </select>
                            </div>
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>