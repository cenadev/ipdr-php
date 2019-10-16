/*let currentForm = 1;

const verifyCurrentForm = function () {
    switch (currentForm) {
        case 1:
            $('#form1').show(), $('#form2').hide(), $('#form3').hide(), $('#n-2').removeClass('n-active');
            break;
        case 2:
            $('#form1').hide(), $('#form2').show(), $('#form3').hide(), $('#n-2').addClass('n-active'), $('#n-3').removeClass('n-active');
            break;
        case 3:
            $('#form1').hide(), $('#form2').hide(), $('#form3').show(), $('#n-3').addClass('n-active');
            break;
        default:
            console.log("diferente");
            break;
    }
}
const next = function () {
    if (currentForm >= 2) {
        $('#cadModal1Submit').text("Salvar");
        if (currentForm >= 3) {
            return false;
        }
        
    } else {
        currentForm = currentForm + 1;
        console.log(currentForm);
        verifyCurrentForm();
    }
}
const prev = function () {
    if (currentForm <= 1) {
        return false;
    } else {
    currentForm = currentForm - 1;
    console.log(currentForm);
    verifyCurrentForm();
    }
}

const chageMenuColor = function () {
    path = window.location.pathname;
    path = path.slice(10);
    switch (path) {
        case 'home':
            $('#nav-link-home').addClass('active');
            break;
        case 'membros':
            $('#nav-link-members').addClass('active');
            break;
        case 'users':
            $('#nav-link-users').addClass('active');
            break;
        case 'about':
            $('#nav-link-about').addClass('active');
            break;

        default:
            break;
    }
}

window.onload = () => {
    verifyCurrentForm();
    chageMenuColor();
};
*/

let msgAlert = '';
//$("#alertModal1").hide();
$('#spinnerModal1').hide();
//$('#')
$('#cad1Form').submit(function (e) {
    e.preventDefault();

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
            alert(msgAlert);
            window.location.href = "/ipdr-php/membros";
        },
        error: function (err) {
            console.log("Request failed: " + err);

        }
    });
});
