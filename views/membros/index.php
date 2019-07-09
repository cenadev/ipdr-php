<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#cadModal">
    Cadastrar
</button>
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="cadModal">
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

                <form id="cad1Form">

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputName">Nome Completo</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Nome Completo">
                        </div>


                        <div class="form-group col-md-2">
                            <label for="genderRadios">Gênero</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios1" value="f">
                                <label class="form-check-label px-2" for="genderRadios1">
                                    F
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderRadios" id="genderRadios2" value="m">
                                <label class="form-check-label px-2" for="genderRadios2">
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


            </div>
            <div class="modal-footer">
                <div class="alert alert-dismissible fade show" id="alertModal1">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" id="cadModal1Submit" data-toggle="modal" data-dismiss="" data-target="#cadModal2">

                    Salvar
                </button>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="spinnerModal1"></span>
                </form>
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
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>

                        </div>

                    </fieldset>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#cadModal3">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- fim do modal 2 -->

<!-- Modal 03 -->
<div class="modal fade" id="cadModal3" tabindex="-1" role="dialog" aria-labelledby="cadModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastrar Membro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-center pb-3">Ficha 3</h5>

                <form>

                    <div class="form-row">

                        <fieldset>
                            <legend>Estado Cívil</legend>
                            <div class="form-group col-md-12">
                                <div class="form-inline">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios1" value="solteiro" checked>
                                        <label class="form-check-label" for="maritalStatusRadios1">
                                            Solteiro
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios2" value="casado">
                                        <label class="form-check-label" for="maritalStatusRadios2">
                                            Casado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios3" value="separado">
                                        <label class="form-check-label" for="maritalStatusRadios3">
                                            Separado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios4" value="desquitado">
                                        <label class="form-check-label" for="maritalStatusRadios4">
                                            Desquitado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios5" value="divorciado">
                                        <label class="form-check-label" for="maritalStatusRadios5">
                                            Divorciado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="maritalStatusRadios" id="maritalStatusRadios6" value="viúvo">
                                        <label class="form-check-label" for="maritalStatusRadios6">
                                            Viúvo
                                        </label>
                                    </div>
                                </div>
                        </fieldset>
                    </div>



                    <div class="form-row">

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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="">Salvar</button>
            </div>
        </div>
    </div>
</div>
<!-- fim do modal 3 -->