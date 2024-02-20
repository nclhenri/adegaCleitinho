


<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Produto</h3>
        </div>

        <form action="index.php?p=produtos&w=cadastrar" method="POST" enctype="multipart/form-data">

            <div class="cardi-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <img src="../img/sem-foto.png" alt="Imagem Sem Foto" id="imgFoto">
                            <input type="file" class="form-control" id="" name="" style="display:none;">
                        </div>

                    </div>

                    <div class="col-md-8 form-dash">

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="marcaProduto" name="marcaProduto" required="" placeholder="Nome do Produto:">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeProduto" class="col-sm-2 col-form-label">Descrição :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="nomeProduto" id="nomeProduto" cols="30" rows="10" placeholder="Informe a descrição do Produto:"></textarea>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="">
                                    <option selected="">Categorias</option>
                                    <option value="Cervejas">Cervejas</option>
                                    <option value="Alcoolicas">Alcoólicas</option>
                                    <option value="Vinhos">Vinhos</option>
                                    <option value="Energéticos">Energéticos</option>
                                    <option value="Sucos">Sucos</option>
                                    <option value="Gelos">Gelos </option>
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