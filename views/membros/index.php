<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#cadModal">
    Cadastrar
</button>
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#cadModal">
    Alterar
</button>
<a href="<?php echo (BASE_URL); ?>/membros/alterar" class="btn btn-outline-danger">Excluir</a>

<?php
//lista de membros
?>


<!-- Modal -->
<div class="modal fade" id="cadModal" tabindex="-1" role="dialog" aria-labelledby="cadModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastrar Membro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-center pb-3">Ficha 1</h5>

                <form>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputName">Nome Completo</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Nome Completo">
                        </div>


                        <div class="form-group col-md-2">
                            <label for="genderRadios">Gênero</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios1" value="option1" checked>
                                <label class="form-check-label" for="genderRadios1">
                                    F
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios2" value="option2">
                                <label class="form-check-label" for="genderRadios2">
                                    M
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputDateOfBirth">Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputDateOfBirth">
                        </div>


                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputNationality">Nacionalidade</label>
                            <input type="text" class="form-control" id="inputNationality">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNatality">Natalidade</label>
                            <input type="text" class="form-control" id="inputNatality">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputRG">Identidade</label>
                            <input type="text" class="form-control" id="inputRG">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputShippingAgent">Orgão Expedidor</label>
                            <input type="text" class="form-control" id="inputShippingAgent">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCPF">CPF</label>
                            <input type="text" class="form-control" id="inputCPF">
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#cadModal2">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- fim do modal 1 -->


<!-- Modal 2 -->
<div class="modal fade" id="cadModal2" tabindex="-1" role="dialog" aria-labelledby="cadModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastrar Membro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-center pb-3">Ficha 2</h5>

                <form>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputTelCel">Telefone Celular</label>
                            <input type="text" class="form-control" id="inputTelCel" placeholder="(xx) xxxxx-xxxx">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTelRes">Telefone Residencial</label>
                            <input type="text" class="form-control" id="inputTelRes" placeholder="(xx) xxxx-xxxx">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTelCom">Telefone Comercial</label>
                            <input type="text" class="form-control" id="inputTelCom" placeholder="(xx) xxxx-xxxx">
                        </div>

                    </div>

                    <fieldset class="">
                        <legend>Endereço residencial</legend>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputStreet">Rua</label>
                                <input type="text" class="form-control" id="inputStreet">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputNumber">Nº</label>
                                <input type="number" class="form-control" id="inputNumber">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputNeighborhood">Bairro</label>
                                <input type="text" class="form-control" id="inputNeighborhood">
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-8">
                                <label for="inputComplement">Complemento</label>
                                <input type="text" class="form-control" id="inputComplement" placeholder="Condomínio ... AP 502 BLOCO D">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputUF">UF</label>
                                <select name="inputUF" class="form-control" id="inputUF">
                                    <option value="select">selecione</option>
                                    <option value="">AC</option>
                                    <option value="">AL</option>
                                    <option value="">AP</option>
                                    <option value="">AM</option>
                                    <option value="">BA</option>
                                    <option value="">CE</option>
                                    <option value="">DF</option>
                                    <option value="">ES</option>
                                    <option value="">GO</option>
                                    <option value="">MA</option>
                                    <option value="">MT</option>
                                    <option value="">MS</option>
                                    <option value="">MG</option>
                                    <option value="">PA</option>
                                    <option value="">PB</option>
                                    <option value="">PR</option>
                                    <option value="">PE</option>
                                    <option value="">PI</option>
                                    <option value="">RJ</option>
                                    <option value="">RN</option>
                                    <option value="">RS</option>
                                    <option value="">RO</option>
                                    <option value="">SC</option>
                                    <option value="">SP</option>
                                    <option value="">SE</option>
                                    <option value="">TO</option>
                                </select>
                            </div>

                        </div>

                    </fieldset>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- fim do modal 2 -->