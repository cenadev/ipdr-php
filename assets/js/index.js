
let msgAlert = '';
//$("#alertModal1").hide();
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
            'genero': $("[name='genderRadios']:checked").val(),
            'dataNasc': $("#inputDateOfBirth").val(),
            'nacionalidade': $("#inputNationality").val(),
            'natalidade': $("#inputNatality").val(),
            'email': $("#inputEmail").val(),
            'identidade': $("#inputRG").val(),
            'orgaoEmissor': $("#inputShippingAgent").val(),
            'inputCPF': $("#inputCPF").val(),
            'nomePai': $("#inputNameFather").val(),
            'paiVivo': $("[name='fatherAliveRadios']:checked").val(),
            'paiEvangelico': $("[name='fatherEvangelicalRadios']:checked").val(),
            'paiIpdr': $("[name='fatherIpdrRadios']:checked").val(),
            'nomeMae': $("#inputNameMother").val(),
            'maeViva': $("[name='motherAliveRadios']:checked").val(),
            'maeEvangelica': $("[name='motherEvangelicalRadios']:checked").val(),
            'maeIpdr': $("[name='motherIpdrRadios']:checked").val(),
            
        },

        success: function (response) {
            msgAlert = 'Cadastro realizado com sucesso!';
            console.log(response);
            //alert(msgAlert);
            //$('#alertModal1').html(msgAlert), $('#alertModal1').addClass('alert-success'), $('#alertModal1').show();
            $('#spinnerModal1').hide(), $("#cadModal1Submit").html("Próximo"), /*$("#cadModal1Submit").attr('type', 'button'),*/ $("#cadModal1Submit").attr('data-dismiss', 'modal'), $("#cadModal1Submit").removeAttr('disabled', '');
        },
        error: function (err) {
            console.log("Request failed: " + err);

        }
    });
});