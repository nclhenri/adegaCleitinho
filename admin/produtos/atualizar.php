<?php
$id = $_GET["id"];
require_once('class/produtos.php');
$produto = new ProdutoClass($id);




if (isset($_POST['marcaProduto'])) {


    $marcaProduto = $_POST['marcaProduto'];
    $nomeProduto = $_POST['nomeProduto'];
    $validadeProduto = $_POST['validadeProduto'];
    $alcoolicoProduto = $_POST['alcoolicoProduto'];
    $quantidadeProduto = $_POST['quantidadeProduto'];
    $statusProduto = $_POST['statusProduto'];



    require_once('class/produtos.php');


    $produto->marcaProduto = $marcaProduto;
    $produto->nomeProduto = $nomeProduto;
    $produto->validadeProduto = $validadeProduto;
    $produto->alcoolicoProduto = $alcoolicoProduto;
    $produto->quantidadeProduto = $quantidadeProduto;
    $produto->statusProduto = $statusProduto;


    $produto->Atualizar();
}

?>

<h2 class="display-4">Página Atualizar Produtos</h2>





<form action="index.php?p=produtos&w=atualizar&id=<?php echo $produto->idProduto ?>" method="POST" enctype="multipart/form-data">



    <div class="caixa">



        <div class="mb-3">
            <label for="marcaProduto" class="form-label">Marca:</label>
            <input type="text" class="form-control" name="marcaProduto" id="marcaProduto" placeholder="Marca do produto:" value="<?php echo $produto->marcaProduto ?>">
        </div>


        <div class="mb-3">
            <label for="nomeProduto" class="form-label">Produto:</label>
            <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" value="<?php echo $produto->nomeProduto ?>">
        </div>

        <div class="mb-3">
            <label for="validadeProduto" class="form-label">Validade:</label>
            <input type="text" class="form-control" name="validadeProduto" id="validadeProduto" value="<?php echo $produto->validadeProduto ?>">
        </div>

        <div class="mb-3">
            <label for="alcoolicoProduto" class="form-label">O produto é alcoólico?:</label>
            <input type="text" class="form-control" name="alcoolicoProduto" id="alcoolicoProduto" value="<?php echo $produto->alcoolicoProduto ?>">
        </div>

        <div class="mb-3">
            <label for="quantidadeProduto" class="form-label">Quantidade:</label>
            <input type="text" class="form-control" name="quantidadeProduto" id="quantidadeProduto" value="<?php echo $produto->quantidadeProduto ?>">
        </div>

        <div class="mb-3">
            <label for="statusProduto" class="form-label">Status:</label>
            <input type="text" class="form-control" name="statusProduto" id="statusProduto" value="<?php echo $produto->statusProduto ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="AtualizarBtn">Atualizar Produto</button>
        </div>
    </div>


</form>