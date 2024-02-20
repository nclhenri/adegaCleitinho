<div class="col-md-12">

    <div class="cardi card-info">
        <div class="cardi-header">
            <h3 class="cardi-title"> Cadastre Funcionario</h3>
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
                                <input type="text" class="form-control" id="marcaProduto" name="marcaProduto" required="" placeholder="Nome do Funcionario:">
                            </div>
                        </div>

                        <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="">
                                    <option selected=""> Selecione o Cargo</option>
                                    <option value="ADM">ADM</option>
                                    <option value="atendente">atendente</option>
                                    <option value="atendente">atendente</option>
                                </select>
                            </div>

                        <div class="row">

                            <div class="form-group col-sm-6 offset-md-2">
                                <select class="form-select col-sm-2" name="">
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