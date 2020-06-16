window.sr = ScrollReveal();
sr.reveal('.navbar', {
    duration: 3000,
    origin: 'bottom'
});

sr.reveal('.showcase-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px'
});

sr.reveal('.showcase-rigth', {
    duration: 2000,
    origin: 'rigth',
    distance: '300px'
});

sr.reveal('.showcase-top', {
    duration: 3000,
    origin: 'top',
});

$(function () {
    $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 690);
    });
});

$("#telefone").mask("(00) 00000-0000");
$("#latitude").mask("-00.0000000");
$("#longitude").mask("-00.0000000");

//Formulário
function buscar(estado, cidade) {
    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: 'busca.php',
        beforeSend: function () {
            $("#dados").prepend('<img class="loading img-responsive center-block" src="imagens/loading.gif"/>');
        },
        data: { estado: estado, cidade: cidade },
        success: function (msg) {
            $("#dados").html(msg);
        }
    });
}

$('#btnBuscar').click(function () {
    let estado = $("#estados").val();
    let cidade = $("#cidades").val();
    buscar(estado, cidade);
});











