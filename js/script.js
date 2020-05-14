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

$(function() {
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
    });
});


$(function(){
    $('#estados').change(function(){
        var idEstado = $("#estados").val();

        $.ajax({
            url: '../get_cidades.php',
            type: 'POST',
            data: {id: idEstado},
            beforeSend: function() {
                $("#cidades").css({'display': 'block'});
                $("#cidades").html("Carregando...");
            },
            sucess: function(data) {
                $("#cidades").css({'display': 'block'});
                $("#cidades").html(data);
            },
            error: function(data) {
                $("#cidades").css({'display': 'block'});
                $("#cidades").html("Houve um erro ao carregar.");
            }
        });
     
    });
  });
