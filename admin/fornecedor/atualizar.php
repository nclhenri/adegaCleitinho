<?php 
$id = $_GET["id"];
require_once('class/fornecedor.php');
$fornecedor = new fornecedorclass($id);

if(isset($_POST['nomeFornecedor'])){
    
    $nomeFornecedor = $_POST['nomeFornecedor'];
    $telefoneFornecedor = $_POST['telefoneFornecedor'];
    $enderecoFornecedor = $_POST['enderecoFornecedor'];
    $cepFornecedor = $_POST['cepFornecedor'];
    $cnpjFornecedor = $_POST['cnpjFornecedor'];
    $statusFornecedor = $_POST['statusFornecedor'];

    require_once('class/fornecedor.php');
    

    $fornecedor->nomeFornecedor = $nomeFornecedor;
    $fornecedor->telefoneFornecedor = $telefoneFornecedor;
    $fornecedor->enderecoFornecedor = $enderecoFornecedor;
    $fornecedor->cepFornecedor = $cepFornecedor;
    $fornecedor->cnpjFornecedor = $cnpjFornecedor;
    $fornecedor->statusFornecedor = $statusFornecedor;

    $fornecedor->Atualizar();

    
}
?>
<h2 class="display-4">Página Atualizar Fornecedores</h2>





<form action="index.php?p=fornecedores&e=atualizar&id=<?php echo $fornecedor->idFonecedor ?>" method="POST" enctype="multipart/form-data">



    <div class="caixa">



        <div class="mb-3">
            <label for="nomeFornecedor" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeFornecedor" id="nomeFornecedor" placeholder="" value="<?php echo $fornecedor->nomeFornecedor ?>">
        </div>


        <div class="mb-3">
            <label for="telefoneFornecedor" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFornecedor" id="telefoneFornecedor" value="<?php echo $fornecedor->telefoneFornecedor ?>">
        </div>

        <div class="mb-3">
            <label for="enderecoFornecedor" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="enderecoFornecedor" id="enderecoFornecedor" value="<?php echo $fornecedor->enderecoFornecedor ?>">
        </div>

        <div class="mb-3">
            <label for="cepFornecedor" class="form-label">CEP:</label>
            <input type="text" class="form-control" name="cepFornecedor" id="cepFornecedor" value="<?php echo $fornecedor->cepFornecedor ?>">
        </div>

        <div class="mb-3">
            <label for="cnpjFornecedor" class="form-label">CNPJ:</label>
            <input type="text" class="form-control" name="cnpjFornecedor" id="cnpjFornecedor" value="<?php echo $fornecedor->cnpjFornecedor ?>">
        </div>

        <div class="mb-3">
            <label for="statusFornecedor" class="form-label">Status:</label>
            <input type="text" class="form-control" name="statusFornecedor" id="statusFornecedor" value="<?php echo $fornecedor->statusFornecedor ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="AtualizarBtn">Atualizar Fornecedor</button>
        </div>
    </div>


</form>