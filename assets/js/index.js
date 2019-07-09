
let msgAlert = '';
$("#alertModal1").hide();
$('#spinnerModal1').hide();
//$('#')
$('#cad1Form').submit(function (e) {
    e.preventDefault();
    $("#cadModal1Submit").html("Salvando"), $("#cadModal1Submit").attr('disabled', ''), $('#spinnerModal1').show();

    $.ajax({
        url: "/ipdr-php/membros/cadastrar",
        type: "post",
        dataType: "html",
        data: {
            'nome': $("#inputName").val(),
            'genero': $("[name='genderRadios']").val(),
            'dataNasc': $("#inputDateOfBirth").val(),
            'nacionalidade': $("#inputNationality").val(),
            'natalidade': $("#inputNatality").val(),
            'email': $("#inputEmail").val(),
            'identidade': $("#inputRG").val(),
            'orgaoEmissor': $("#inputShippingAgent").val(),
            'inputCPF': $("#inputCPF").val()
        },

        success: function (response) {
            msgAlert = 'Cadastro realizado com sucesso!';
            console.log(response);
            $('#alertModal1').html(msgAlert), $('#alertModal1').addClass('alert-success'), $('#alertModal1').show();
            $("#cadModal1Submit").html("Próximo"), $("#cadModal1Submit").attr('data-dismiss', 'modal'), $("#cadModal1Submit").attr('type', 'button'), $("#cadModal1Submit").removeAttr('disabled', ''), $('#spinnerModal1').hide();
        },
        error: function (err) {
            console.log("Request failed: " + err);

        }
    });
});