var msgAlert = '';
$('#spinnerModal1').hide();
$('#cadModal1Submit').click(function (){
    $(this).html("Salvando"), $(this).attr('disabled', ''),$('#spinnerModal1').show();

    $.ajax({
        type: "post",
        url: "/membros/cadastrar",
        data: {
            'nome': $("#inputName").val(),
            'genero': $("#genderRadios").val(),
            'dataNasc': $("#inputDateOfBirth").val(),
            'nacionalidade': $("#inputNacionality").val(),
            'natalidade': $("#inputNatality").val(),
            'email': $("#inputEmail").val(),
            'identidade': $("#inputRG").val(),
            'orgaoEmissor': $("#inputShippingAgent").val(),
            'inputCPF': $("#inputCPF").val()
        },
        dataType: "html",
        success: function (response) {
            msgAlert = 'Cadastro realizado com sucesso!'
            $('#alertModal1').html(msgAlert), $('#alertModal1').addClass('alert-sucess'), $('#alertModal1').alert();
        }
    });
});