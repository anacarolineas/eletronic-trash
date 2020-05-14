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
    $('#cod_estados').change(function(){
      if( $(this).val() ) {
        $('#cod_cidades').hide();
        $('.carregando').show();
        $.getJSON(
          'cidades.ajax.php?search=',
          {
            cod_estados: $(this).val(),
            ajax: 'true'
          }, function(j){
            var options = '<option value=""></option>';
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' +
                j[i].cod_cidades + '">' +
                j[i].nome + '</option>';
            }
            $('#cod_cidades').html(options).show();
            $('.carregando').hide();
          });
      } else {
        $('#cod_cidades').html(
          '<option value="">-- Escolha um estado --</option>'
        );
      }
    });
  });
